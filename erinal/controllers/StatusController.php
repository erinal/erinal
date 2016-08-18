<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Status;

class StatusController extends Controller {
  public function actionCreate() {
    $model = new Status();
    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
           //  $model 有post数据时直接展示
           return $this->render('view', ['model' => $model]);
       } else {
           // 没有数据的时候，直接渲染create视图
           return $this->render('create', ['model' => $model]);
       }
  }
}
