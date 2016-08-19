<?php
namespace app\models;
use yii\helpers\ArrayHelper;
use yii\db\ActiveRecord;
use app\models\Article_category;
use Yii;

class Article extends ActiveRecord {
    // public $cateid;
    public static function tableName() {
        return "{{%articles}}";
    }

    public function attributeLabels() {
        return [
            'cateid' => '分类',
            'title' => '文章标题',
            'content' => '正文',
            'summary' => '简介',
            'isrecommond' => '',
        ];
    }

    public function rules() {
        return [
          ['title','required','message' => '标题不能为空','on' => 'addArticle'],
          ['content','required','message' => '内容不能为空','on' => 'addArticle'],
          ['summary', 'safe', 'on'=>'addArticle'],
          ['isrecommond','boolean','on' => 'addArticle'],
          ['ishot','boolean','on'=>'addArticle'],
        ];
    }

    public function addArticle($data) {
        $this->scenario = 'addArticle';
        if($this->load($data)) {
            $this->createtime = time();
            $this->userid = (int)Yii::$app->session['admin']['adminuser'];
            if($this->save()) {
                return $this->attributes['articleid'];
            }
        }
        return false;
    }

    public function getArticle_category() {
        // 第一个参数为要关联的子表模型类名，
        // 第二个参数指定 通过子表的customer_id，关联主表的id字段
        return $this->hasMany(Article_category::className(), ['articleid' => 'articleid']);
    }

    //     public function getCategory() {
    //     return $this->hasMany(Category::className(), ['cateid' => 'cateid']);
    // }



}
