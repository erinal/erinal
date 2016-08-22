<?php
namespace app\modules\controllers;
use yii\web\Controller;
use Yii;
use app\models\Category;

class CategoryController extends Controller {
    public function actionList() {
        $this->layout = "layout_admin";
        $model = new Category;
        $cates = $model->getTreeList();
        return $this->render('cates',['cates' => $cates]);
    }

    public function actionAdd() {
        $model = new Category;
        $list = $model->getOptions();
        // $list = array_merge([0 => '添加成功顶级分类'],$list);
        // $cates = $model -> getData();
        // $tree = $model->getTree($cates);
        if(Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            if($model->add($post)){
                Yii::$app->session->setFlash('info','添加成功');
            } else {
                Yii::$app->session->setFlash('info','添加失败');
            }
        }
        $this->layout = "layout_admin";
        $model->catename = "";
        return $this->render("add",['list' => $list, 'model' => $model]);
    }

    public function actionMod() {
        $this->layout = "layout_admin";
        $cateid = Yii::$app->request->get('cateid');
        $model = Category::find()->where('cateid = :id',[':id' => $cateid])->one();
        if(Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            if($model->load($post) && $model->save()) {
                Yii::$app->session->setFlash('info','修改成功');
            } else {
                Yii::$app->session->setFlash('info','修改失败，请重试');
            }
        }
        $list = $model->getOptions();
        return $this->render('add',['model' => $model,'list' => $list]);
    }

    public function actionDel() {
        try{
            $cateid = Yii::$app->request->get('cateid');
            if(empty($cateid)) {
                throw new \Exception('该分类下有子类，不能删除');
            }
            if (!Category::deleteAll('cateid = :id',[':id' => $cateid])) {
                throw new \Exception('删除失败');
            }
            $data = Category::find()->where('parentid = :pid',[':pid' => $cateid])->one();
            if($data) {
                throw new \Exception();
            }
        } catch(\Exception $e) {
            Yii::$app->session->setFlash('info','删除失败');
        }
        return $this->redirect(['category/list']);
    }
}
 ?>
