<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>标签云</title>
<link rel="stylesheet" type="text/css" href="/assets/css/miaov_style.css" />
<script type="text/javascript" src="/assets/js/miaov.js"></script>
</head>

<body>
<div id="div1">
	<!-- 这里未实现的就是点击标签之后对应到相应的article页面下，并且使得不同级别的标签显示不同的颜色-->
	<?php foreach($categorys as $item => $category) : ?>
	<a href="<?php echo yii\helpers\Url::to(['articlelist/index','cateid' => $category['cateid']])?>"><?php echo $category['catename'];?></a>
	<?php endforeach;?>
	<!-- <a href="http://www.miaov.com/course_outline_1.html.php" class="red">教程</a>
	<a href="http://www.miaov.com">试听</a>
	<a href="http://www.miaov.com">精品</a>
	<a href="http://www.miaov.com" class="blue">妙味课堂</a>
	<a href="http://blog.miaov.com/722.html">SEO</a>
	<a href="http://www.miaov.com" class="red">特效</a>
	<a href="http://www.miaov.com/course.html.php" class="yellow">JavaScript</a>
	<a href="http://www.miaov.com/course_detail_1.html.php">miaov</a>
	<a href="http://www.miaov.com/course_detail_2.html.php" class="red">CSS</a>
	<a href="http://www.miaov.com/course_detail_3.html.php">求职</a>
	<a href="http://www.miaov.com/course_detail_2.html.php" class="blue">面试题</a>
	<a href="http://www.miaov.com/contact.html.php">继承</a>
	<a href="http://www.miaov.com/" class="red">妙味课堂</a>
	<a href="http://www.miaov.com/about.html.php" class="blue">OOP</a>
	<a href="http://www.miaov.com/work.html.php">XHTML</a>
	<a href="http://www.miaov.com/message.html.php" class="blue">setInterval</a>
	<a href="http://blog.miaov.com/">W3C</a>
	<a href="http://blog.miaov.com/716.html">石川</a>
	<a href="http://www.miaov.com/" class="yellow">妙味课堂</a>
	<a href="http://blog.miaov.com/676.html">blue</a> -->
</div>
<p>点击您所喜欢的标签，GET STARTED!</p>
</body>
</html>
