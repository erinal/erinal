<?php

namespace app\modules\controllers;
use yii\web\Controller;
use Yii;

class PublicController extends Controller {
    public function actionLogin() {
        $this->layout = 'layout_admin';
        return $this->render('login');
    }
}
