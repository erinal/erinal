<?php
namespace app\models;
use yii\db\ActiveRecord;

class Article_category extends ActiveRecord
{
    public static function tableName() {
        return "{{%article_category}}";
    }

    public function add() {
        return true;
    }

}