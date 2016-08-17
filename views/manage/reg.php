<?php
use yii\bootstrap\ActiveForm;
use yii;
use yii\helpers\Html;
?>
<link rel="stylesheet" href="assets/admin/css/compiled/new-user.css" type="text/css" media="screen" />
<!-- main container -->
<div class="content">
    <div class="container-fluid">
        <div id="pad-wrapper" class="new-user">
            <div class="row-fluid header">
                <h3>添加新管理员</h3></div>
            <div class="row-fluid form-wrapper">
                <!-- left column -->
                <div class="span9 with-sidebar">
                    <div class="container">

                      <?php $form = ActiveForm::begin([
                        'options' => ['class' => 'new_user_form inline-input'],
                        'fieldConfig' => [
                          'template' => '<div class= "span12 fieldbox">{label}{input}</div>{error}'
                        ],

                      ]); ?>
                      <?php  if(Yii::$app->session->hasflash('info')) {
                        echo Yii::$app->session->getflash('info');
                      };?>
<?php echo $form->field($model, 'adminuser')->textInput(['class' => 'span9']);?>
<?php echo $form->field($model,'adminemail')->textInput(['class' => 'span9']);?>
<?php echo $form->field($model,'adminpass')->passwordInput(['class' => 'span9']);?>
<?php echo $form->field($model,'repass')->passwordInput(['class' => 'span9']);?>

                            <div class="span11 field-box actions">
                                <?php echo Html::submitButton('创建',['class' => 'btn-glow primary']);?>
                                <span>或者</span>
                                <?php echo Html::submitButton('取消',['class' => 'reset']);?>
                        <?php ActiveForm::end();?>
                    </div>
                </div>
                <!-- side right column -->
                <div class="span3 form-sidebar pull-right">
                    <div class="alert alert-info hidden-tablet">
                        <i class="icon-lightbulb pull-left"></i>请在左侧填写管理员相关信息，包括管理员账号，电子邮箱，以及密码</div>
                    <h6>重要提示：</h6>
                    <p>管理员可以管理后台功能模块</p>
                    <p>请谨慎添加</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
