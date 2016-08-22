<?php

namespace app\controllers;
use yii\web\Controller;

class UsettingController extends Controller {
    public function actionIndex() {
        $this->layout = 'ucenter';
        return $this->render('index');
    }

    public function actionProfile() {
        $this->layout = 'ucenter';
        return $this->render('profile');
    }

    public function actionAvator() {
        $this->layout = 'ucenter';
        return $this->render('avator');
    }

    public function actionPass() {
        $this->layout = 'ucenter';
        return $this->render('pass');
    }
}
