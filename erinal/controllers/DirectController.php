<?php

namespace app\controllers;
use yii\web\Controller;
use Yii;

class DirectController extends Controller {
    public function actionIndex() {
        $this->layout = false;
        $type = Yii::$app->request->get();
        return $this->render('index',['type' => $type]);
    }

    public function actionError() {
        $this->layout = false;
        return $this->render('error');
    }
}
