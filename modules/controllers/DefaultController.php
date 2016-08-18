<?php

namespace app\modules\controllers;

use yii\web\Controller;
use app\models\User;
use Yii;

/**
 * Default controller for the `modules` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        if(!isset(Yii::$app->session['admin']['isLogin'])) {
             $this->redirect(['public/login']);
             Yii::$app->end();
        }
        $this->layout = 'layout_admin';
        $info = [
            'visitors' => 10,
            'users' => User::find()->count(),
            'articles' => 100,
            'comments' => 200,
        ];
        return $this->render('index', ['info' => $info]);
    }
}
