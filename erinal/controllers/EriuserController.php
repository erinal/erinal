<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\User;
use Yii;

class EriuserController extends Controller {

    // public function actions(){
    //     return [
    //         'captcha' => [
    //             'class' => 'yii\captcha\CaptchaAction',
    //             'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
    //             'backColor'=>0x000000,//背景颜色
    //             'maxLength' => 4, //最大显示个数
    //             'minLength' => 3,//最少显示个数
    //             'padding' => 5,//间距
    //             'height' => 31,
    //             'width' => 70,
    //             'foreColor'=>0xffffff,     //字体颜色
    //             'offset'=>4,        //设置字符偏移量 有效果
    //         ]
    //     ];
    // }

    public function actionAuth() {
        $this->layout = false;
        $model = new User;
        if(Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            if($model->sendEmail($post)) {
                Yii::$app->session->setFlash('info','验证邮箱已发送，请注意查收');
            } else {
                Yii::$app->session->setFlash('info','邮箱发送失败，请稍后重试');
            }
        }

        return $this->render('auth',['model' => $model]);
    }



}
