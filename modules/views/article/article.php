<link rel="stylesheet" href="assets/admin/css/compiled/user-list.css" type="text/css" media="screen" />
<!-- main container -->
<div class="content">

    <div class="container-fluid">
        <div id="pad-wrapper" class="users-list">
            <div class="row-fluid header">
                <h3>文章列表</h3>
                <div class="span10 pull-right">
                <a href="<?php echo yii\helpers\Url::to(['article/add']) ?>" class="btn-flat success pull-right">
                        <span>&#43;</span>
                        添加新文章
                    </a>
                </div>
            </div>

            <!-- Users table -->
            <div class="row-fluid table">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="span6 sortable">
                                <span class="line"></span>文章名称
                            </th>
                            <th class="span2 sortable">
                                <span class="line"></span>作者
                            </th>
                            <th class="span2 sortable">
                                <span class="line"></span>点击量
                            </th>
                            <th class="span2 sortable">
                                <span class="line"></span>分类
                            </th>
                            <th class="span2 sortable">
                                <span class="line"></span>评论数
                            </th>
                            <th class="span2 sortable">
                                <span class="line"></span>创建时间
                            </th>
                            <th class="span2 sortable">
                                <span class="line"></span>是否推荐
                            </th>

                            <th class="span3 sortable align-right">
                                <span class="line"></span>操作
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($articles as $article): ?>
                    <!-- row -->
                    <tr class="first">
                        <td>
                        <a href="<?php echo yii\helpers\Url::to(['article/detail', 'articleid' => $article->articleid]) ?>" class="name"><?php echo $article->title ?></a>
                        </td>
                        <td>
                            <?php //if isset(article->username) echo $article->username ?>
                        </td>
                        <td>
                            <?php
                                echo $article->click;
                            ?>
                        </td>
                        <td>
                            <?php foreach ($article->article_category as $_ => $value) {
                                echo $relation[$value->cateid].'/';} ?>
                        </td>
                        <td>
                            <?php
                                // echo $article->commentcount;
                            ?>
                        </td>
                        <td>
                            <?php echo  date('Y-m-d H:i:s',$article->createtime) ?>
                        </td>
                        <td>
                            <?php 
                            $option = ['否','是'];
                            echo  $option[$article->isrecommond] ?>
                        </td>

                        <td class="align-right">
                        <a href="<?php echo yii\helpers\Url::to(['article/mod', 'articleid' => $article->articleid]) ?>">编辑</a>
                        <a href="<?php echo yii\helpers\Url::to(['article/on', 'articleid' => $article->articleid]) ?>">查看评论</a>
                        <a href="<?php echo yii\helpers\Url::to(['article/del', 'articleid' => $article->articleid]) ?>">删除</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="pagination pull-right">
                <?php echo yii\widgets\LinkPager::widget(
                    [
                        'pagination' => $pager,
                        'prevPageLabel' => '&#8249;',
                        'nextPageLabel' => '&#8250;',
                    ]
                );?>
            </div>
            <!-- end users table -->
        </div>
    </div>
</div>
<!-- end main container -->
