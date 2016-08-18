<p> 尊敬的<?php echo $username; ?>，您好:</p>

<p>您的激活用户链接如下:</p>

<?php $url = Yii::$app->urlManager->createAbsoluteUrl(['/usetting/profile','timestamp' => $time, 'adminuser' => $adminuser,'token' => $token]);?>

<p><a href="<?php echo $url;?>"><?php echo $url;?></a></p>

<p>该链接5分钟内有效，请勿传递给别人！</p>

<p>该邮件为系统自动发送，请勿回复！</p>
