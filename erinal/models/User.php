<?php

namespace app\models;
use yii\db\ActiveRecord;
use Yii;

class User extends ActiveRecord {
    public static function tableName()
    {
        return "{{%user}}";
    }

    public function getProfile() {
        return $this->hasOne(Profile::className(), ['userid' => 'userid']);
    }
}
