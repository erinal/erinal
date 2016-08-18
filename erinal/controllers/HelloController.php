<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class HelloController extends controller {

  public function actionSay() {

    $message = "坤强是傻逼";
    return $this->render('say',['message' => $message]);
  }

}
