<?php

namespace app\modules\controllers;

use yii\web\Controller;
use app\modules\models\Admin;
use yii\data\Pagination;
use Yii;

/**
 * Default controller for the `modules` module
 */
class ManageController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    
    private function checklogin(){
        if(!isset(Yii::$app->session['admin']['isLogin'])) {
             $this->redirect(['public/login']);
             Yii::$app->end();
        }
    }

    public function actionManagers() {
        $this->checklogin();
        $this->layout = "layout_admin";
        //  $managers = Admin::find()->all();
        $model = Admin::find();
        $count = $model->count();
        $pageSize = Yii::$app->params['pageSize']['manage'];
        $pager = new Pagination(['totalCount' => $count, 'pageSize' => $pageSize]);
        $managers = $model -> offset($pager->offset)->limit($pager->limit)->all();
        //$query->limit(10); 限制返回结果个数 $query -> offset(100); 记录偏移 忽略前100行记录
        return $this->render("managers",['managers'  => $managers,'pager' => $pager]);
    }

    public function actionReg() {
        $this->checklogin();
        $this->layout = "layout_admin";
        $model = new Admin;
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            if($model->reg($post)) {
            Yii::$app->session->setFlash('info','添加成功');
            $this->redirect(['manage/managers']);
        } else {
             Yii::$app->session->setFlash('info','添加失败');
        }
     }
        return $this->render("reg",['model' => $model]);
    }

    public function actionDel() {
        $this->checklogin();
        $adminid = (int)Yii::$app->request->get("adminid");
        if (empty($adminid)) {
            $this->redirect(['manage/managers']);
        }
        $model = new Admin;
        if( $model->deleteAll('adminid = :id',[':id' => $adminid])) {
            Yii::$app->session->setflash('info','管理员账号删除成功');
            $this->redirect(['manage/managers']);
        }else {
            Yii::$app->session->setflash('info','管理员账号删除失败');
            $this->redirect(['manage/managers']);
        }
   }

    public function actionChangepass() {
        $this->checklogin();
        $this->layout = 'layout_admin';
        $model = Admin::find()->where('adminuser = :user', [':user' => Yii::$app->session['admin']['adminuser']])->one();
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            if ($model->changePass($post)) {
                Yii::$app->session->setFlash('info', '修改成功');
            }
        }
        $model->adminpass = '';
        $model->repass = '';
        return $this->render('changepass', ['model' => $model]);
     }

}
