<?php

namespace app\modules\controllers;

use yii\web\Controller;
use app\models\User;
use app\models\Profile;
use yii\data\Pagination;
use Yii;

/**
 * Default controller for the `modules` module
 */
class UserController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionUsers() {
        $model = User::find() -> joinWith('profile');
        $count = $model->count();
        $pageSize = Yii::$app->params['pageSize']['user'];
        $pager = new Pagination(['totalCount' => $count,'pageSize' => $pageSize]);
        $users = $model->offset($pager->offset)->limit($pager->limit)->all();
        $this->layout = "layout_admin";
        return $this->render('users',['users' => $users,'pager' => $pager]);
    }

    public function actionReg() {
        $this->layout = "layout_admin";
        $model = new User;
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            if($model->reg($post)) {
            Yii::$app->session->setFlash('info','添加成功');
            $this->redirect(['user/users']);
        } else {
             Yii::$app->session->setFlash('info','添加失败');
        }
     }
        return $this->render("reg",['model' => $model]);//这里的['model' => $model ] 就可以在模板中实现对模板的创建
    }
}
