<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
// use yii\captcha\Captcha;
use Yii;
?>
<!DOCTYPE html>
<html lang="zh-cn">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="this is a page which user can login or loginup">
    <meta name="author" content="vampirebitter">

    <title>
        erinal-登陆/注册页面
    </title>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/auth.css" rel="stylesheet" >
  </head>

  <body>
    <div class="navbar-USF">
      <div class="dropdown">
        <a href="/">
          <span class="glyphicon glyphicon-home"></span>
        </a>
        <a href="/">
          <span class="glyphicon glyphicon-th"></span>
        </a>
      </div>
    </div>
    <div class="container">
      <div class="sign-page">
        <div class="alert alert-info" role="alert">
          <?php
            if(Yii::$app->session->hasFlash('info')) {
                echo Yii::$app->session->getFlash('info');
            }
          ?>
        </div>
        <div class="signup-page">
          <?php $form = ActiveForm::begin([
              'fieldConfig' => [
                  'template' => '<div class="input-prepend">{label}{input}</div>{error}',
              ],
              'options' => [
                  'class' => 'new_user_form inline-input',
                  'enctype' => 'multipart/form-data'
              ],
              'action' => ['eriuser/auth'],
          ]);
          ?>
            <h3>
              Sign up with Email
            </h3>
            <p class="slogan">
              Quick Start
            </p>
            <?php echo $form->field($model,'username')->textInput(['placeholder' => 'UserName']);?>
            <?php echo $form->field($model,'useremail')->textInput(['placeholder' => 'Email']);?>
            <?php echo $form->field($model,'userpass')->passwordInput(['placeholder' => '******']);?>
            <?php echo $form->field($model,'repass')->passwordInput(['placeholder' => '******']);?>
            
            <br>
            <?php echo Html::submitButton('注册',['class' => 'btn btn-lg btn-primary btn-block']);?>
          <?php ActiveForm::end();?>
        </div>

      </div>
      <div class="signin-page">
        <form>
          <h3>
            Sign in
          </h3>
          <p class="slogan">
            Quick Start
          </p>
          <p class="slogan">
              <div class="social-auth-buttons">
                  <div class="row">
                      <div class="col-md-6">
                          <button id='login_qq' class="btn-block btn-lg btn btn-facebook"><i class="fa fa-qq"></i>
                              使用QQ账号登录
                          </button>
                      </div>
                      <div class="col-md-6">
                          <button id='login_weibo' class="btn-block btn-lg btn btn-twitter"><i class="fa fa-weibo"></i>
                              使用新浪微博登录
                          </button>
                      </div>
                  </div>
          </p>
          <div class="input-prepend">
            <span class="glyphicon glyphicon-user"></span>
            <input type="text" placeholder="用户名">
          </div>
          <br>
          <div class="input-prepend">
            <span class="glyphicon glyphicon-lock"></span>
            <input type="password" placeholder="******">
          </div>
          <br>
          <span id="control-group">
            <label>
              <input type="checkbox" value="option1">
              Remember Me |
            </label>
            <a href="/user/newpasswd">Forgot Password?</a>
          </span>
          <br>
          <button class="btn btn-lg btn-danger btn-block">
            <span>登陆</span>
          </button>
        </form>
      </div>
    </div>
  </body>
  <!-- "http://localhost/index.php?r=eriuser%2Fcaptcha&amp;v=1471512990000"  -->
  <!-- "/index.php?r=eriuser%2Fcaptcha&amp;v=57b581c339e58" -->
  <script>
      var qqbtn = document.getElementById("login_qq");
      qqbtn.onclick = function(){
          window.location.href="<?php echo yii\helpers\Url::to(['eriuser/qqlogin']) ?>";
      }

  //     $(function(){                   //当页面加载的时候
  //     get_code();         //刷新或者重新加载一个验证码
  //     });
  //
  // //更改或者重新加载验证码
  // function get_code() {
  //     $.ajax({
  //         url: "/eriuser/auth/captcha?refresh",
  //         dataType: 'json',
  //         cache: false,
  //         success: function(data) {
  //             $('#captchaimg').attr('src', data['url']);
  //             $('body').data('/eriuser/auth/captcha?refresh', [data['hash1'], data['hash2']]);
  //         }
  //     });
  // }
        // function get_code(obj) {
        //
        //     if(!obj)
        //     {
        //         obj = document.getElementById('captchaimg');
        //     }
        //
        //     obj.src = obj.src.split('&v')[0].toString() + "&amp;"+Date.parse(new Date());
        // }
  </script>
</html>
