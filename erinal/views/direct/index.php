<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>页面跳转中</title>
    </head>
    <body>
        <?php
            if($type['type'] == 'gmail') {
                $type['type'] = 'google';
            }
        ?>
        <a href="<?php echo 'https://mail.' . $type['type'] . '.com';?>"><h1>请注意查收邮件激活账户，点击进入邮箱</h1></a>
        <span id='index'>5秒后页面跳转到首页....点击此处直接跳转到首页</span>
    </body>
    <script>
        setTimeout(function(){
        location.href="<?php echo yii\helpers\Url::to(['index/index']); ?>";
    },5000);
        var red = document.getElementById('index');
        red.onclick = function(){
            window.location.href="<?php echo yii\helpers\Url::to(['index/index']); ?>";
        }
    </script>
</html>
