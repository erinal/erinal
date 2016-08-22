<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Category;

class TabwindController extends Controller {

    public function actionIndex() {
        $this->layout = false;
        $model = new Category;
        $data = $model->getData();
        $category = $model->getTree($data);
        // var_dump($category);die;
        return $this->render('index',['categorys' => $category]);
    }


}
