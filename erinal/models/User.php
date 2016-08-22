<?php

namespace app\models;
use yii\db\ActiveRecord;
use Yii;

class User extends ActiveRecord {
    public $repass;
    public $loginname;
    public $rememberMe = true;
    public static function tableName()
    {
        return "{{%user}}";
    }

    public function attributeLabels()
    {
        return [
            'username' => '用户名',
            'userpass' => '用户密码',
            'repass' => '确认密码',
            'useremail' => '电子邮箱',
            'loginname' => '用户名/电子邮箱',
        ];
    }
    public function rules() {
        return [
            ['username','required','message' => '用户名不能为空','on' => ['userRegister','userIndexRegister']],
            ['userpass','required','message' => '密码不能为空','on' => ['userRegister','userIndexRegister']],
            ['username', 'unique', 'message' => '用户已经被注册', 'on' => ['userRegister','userIndexRegister']],
            ['useremail', 'required', 'message' => '电子邮件不能为空', 'on' => ['userRegister','userIndexRegister']],
            ['useremail', 'email', 'message' => '电子邮件格式不正确', 'on' => ['userRegister','userIndexRegister']],
            ['useremail', 'unique', 'message' => '电子邮件已被注册', 'on' => ['userRegister','userIndexRegister']],
            ['userpass', 'required', 'message' => '用户密码不能为空', 'on' => ['userRegister', 'login','userIndexRegister']],
            ['repass', 'required', 'message' => '确认密码不能为空', 'on' => ['userRegister','userIndexRegister']],
            ['repass', 'compare', 'compareAttribute' => 'userpass', 'message' => '两次密码输入不一致', 'on' => ['userRegister','userIndexRegister']],
            ['userpass', 'validatePass', 'on' => ['login']],
        ];
    }

    public function getProfile() {
        return $this->hasOne(Profile::className(), ['userid' => 'userid']);
    }

    public function validatePass() {
        if (!$this->hasErrors()) {
            $loginname = "username";
            if (preg_match('/@/', $this->loginname)) {
                $loginname = "useremail";
            }
            $data = self::find()->where($loginname.' = :loginname and userpass = :pass', [':loginname' => $this->loginname, ':pass' => md5($this->userpass)])->one();
            if (is_null($data)) {
                $this->addError("userpass", "用户名或者密码错误");
            }
        }
    }
    public function reg($data) {
        $this->scenario = 'userRegister';
        if ($this->load($data) && $this->validate()) {
            $this->createtime = time();
            $this->userpass = md5($this->userpass);
            if ($this->save(false)) {
                return true;
            }
            return false;
        }
        return false;
    }
// <!-- <?php echo Captcha::widget(['name'=>'captchaimg','captchaAction'=>'eriuser/captcha','imageOptions'=>['id'=>'captchaimg', 'title'=>'换一个', 'alt'=>'换一个','onclick' => 'get_code(this)', 'style'=>'cursor:pointer;margin:0 0 20px 0;'],'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div>']);
    public function login($data)
    {
        $this->scenario = "login";
        if ($this->load($data) && $this->validate()) {
            //做点有意义的事
            $lifetime = $this->rememberMe ? 7*24*3600 : 0;
            $session = Yii::$app->session;
            session_set_cookie_params($lifetime);
            $session['loginname'] = $this->loginname;
            $session['isLogin'] = 1;
            return (bool)$session['isLogin'];
        }
        return false;
    }

    public function sendEmail($data) {
        $this->scenario = "userIndexRegister";
        $allType = explode('@',$data['User']['useremail']);
        $type = explode('.',$allType[1])[0];
        if($this->load($data) && $this->validate()) {
            $this->createtime = time();
            $this->userpass = md5($this->userpass);
            if ($this->save(false)) {
                $time = time();
                $token = $this->createToken($data['User']['username'],$time);
                $mailer = Yii::$app->mailer->compose('verifyUser',['username' => $data['User']['username'],'time' => $time, 'token' => $token]);
                $mailer->setFrom("lj550566181@gmail.com");
                $mailer->setTo($data['User']['useremail']);
                $mailer->setSubject("这是一封激活用户的邮件");
                if ($mailer->send()) {
                    return $type;
                }
            }
        }
            return false;
    }

    public function createToken() {
        return md5(md5($adminuser).md5($time));
    }
}
