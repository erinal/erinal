<?php
namespace app\modules\controllers;
use yii\web\Controller;
use app\models\Article;
use app\models\Article_category;
use app\models\Category;
use yii\data\Pagination;
use Yii;
    
class ArticleController extends Controller {


    private function getRelation() {
        $cates = Category::find()->all();
        foreach($cates as $cate) {
            $relation[$cate->cateid] = $cate->catename;
        }
        return $relation;
    }
    public function actionList() {
        $this->layout = "layout_admin";
        $model = Article::find()->joinWith(['article_category']);
        $relation = $this->getRelation();
        $count = $model->count();
        $pageSize = Yii::$app->params['pageSize']['manage'];
        $pager = new Pagination(['totalCount' => $count, 'pageSize' => $pageSize]);
        $articles = $model -> offset($pager->offset)->limit($pager->limit)->all();
         return $this->render("article",['articles'  => $articles,'pager' => $pager,'relation'=>$relation]);
     }
        
    public function actionDetail() {
        $this->layout = "layout_mem";
        return $this->render("detail");
    }

    public function actionAdd() {
        $this->layout = "layout_admin";
        $model = new Article();
        $list = (new Category)->getOptions([]);
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            if($articleid = $model->addArticle($post)) {
                $data['Article_category']['cateid'] = $post['Article']['cateid'];
                $data['Article_category']['articleid'] = $articleid;
                $data['_csrf'] = $post['_csrf'];
                if ($a = (new article_category)->add($data)) {
                    $this->redirect(['article/list']);
                }
            } else {
                Yii::$app->session->setFlash('info','添加失败');
            }
        }
        return $this->render("add",['model' => $model, 'list' =>$list]);
    }


    public function actionDel() {
        $articleid = (int)Yii::$app->request->get("articleid");
        if (empty($articleid)) {
            $this->redirect(['article/list']);
        }
        $model = new Article;
        if( $model->deleteAll('articleid = :id',[':id' => $articleid])) {
            // Yii::$app->session->setflash('info','文章删除成功');
            $this->redirect(['article/list']);
        }else {
            // Yii::$app->session->setflash('info','文章删除失败');
            $this->redirect(['article/list']);
        }
    }
}
?>