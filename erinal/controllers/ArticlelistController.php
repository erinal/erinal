<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\Article;
use app\models\Category;
use app\models\User;
use Yii;

//这里如果在用户写文章的时候，自动把session中的用户id找到相应的用户名，保存在article表中的一个作者字段中会不会好点?

class ArticlelistController extends Controller {
    public function actionIndex() {
        $this->layout = false;
        $User = new User;
        $cateid = Yii::$app->request->get();
        // var_dump($cateid);die;
        $model = Category::find()->joinwith('article_category');
        $model2 = Article::find()->joinwith('article_category');
        $userid = $User->getAttribute('userid');
        // $author = User::find()->where('userid = :userid',[':userid' => $userid])->getAttribute('username');
        $author = User::find()->where('userid = :userid',[':userid' => $userid])->one();
        $articles = $model2->where('eri_article_category.cateid = :cateid',[':cateid' => $cateid['cateid']])->all();
        $cates = $model->where('eri_category.cateid = :cateid',[':cateid' => $cateid['cateid']])->all();
        // var_dump($articles);die;
        return $this->render('index',['articles' => $articles,'author' => $author['username'],'cates' => $cates]);
    }
}
