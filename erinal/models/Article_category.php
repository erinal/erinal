<?php
namespace app\models;
use yii\db\ActiveRecord;

class Article_category extends ActiveRecord
{
    public static function tableName() {
        return "{{%article_category}}";
    }
    public function rules() {
        return [
          ['articleid', 'safe', 'on'=>'add'],
          ['cateid', 'safe', 'on'=>'add'],
        ];
    }

    public function add($data) {
        $this->scenario = 'add';
        if($this->load($data)) {
            $issuccess = false;
            $cateid = $this->cateid;
            foreach ($cateid as $key => $value) {
                $this->cateid = $value;
                if($this->save())
                    $issuccess = true;
                else
                    $issuccess = false;
                $this->setIsNewRecord(true);
            }
            if($issuccess)
                return true;
        }
        return false;
    }

    public function getCategory() {
        return $this->hasMany(Category::className(), ['cateid' => 'cateid']);
    }

    public function getArticle() {
        return $this->hasMany(Article::className(),['articleid' => 'articleid']);
    }
}
