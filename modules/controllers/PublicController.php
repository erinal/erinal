<?php

namespace app\modules\controllers;
use yii\web\Controller;
use app\modules\models\Admin;
use Yii;

 class PublicController extends Controller {


     public function actionLogin() {
        //  $this->layout = "layout_admin";

        $model = new Admin;
        if(Yii::$app->request->isPost){
            $post = Yii::$app->request->post();
            if($model->login($post)) {
                $this->redirect(['default/index']);
                Yii::$app->end();
            }
        }
         return $this->renderPartial("login",['model'=> $model]);
     }

     public function actionLogout() {
         Yii::$app->session->removeAll();
         if(!isset(Yii::$app->session['admin']['isLogin'])) {
             $this->redirect(['public/login']);
             Yii::$app->end();
         }
         $this->goback();
     }

     public function actionSeekpassword() {
         $model = new Admin;
         if(Yii::$app->request->isPost) {
             $post = Yii::$app->request->post();
             if($model->seekPass($post)) {
               Yii::$app->session->setFlash('info', '邮件已发送成功，请注意查收');
             }
         }

         return $this->renderPartial('seekpassword',['model'=>$model]);
     }
 }
