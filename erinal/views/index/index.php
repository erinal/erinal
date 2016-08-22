<?php
    use yii\helpers\Html;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Erina-心情记录专家</title>

<link rel="stylesheet" href="/assets/css/onepage-scroll.css">
<link rel="stylesheet" href="/assets/css/index.css">
<LINK rel="stylesheet" type="text/css" href="/assets/css/js.itobe.cn.css">
<LINK rel="stylesheet" type="text/css" href="/assets/css/aaAccordion.css">
<LINK rel="stylesheet" type="text/css" href="/assets/css/flickerplate.css">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- <script type="text/javascript" src="/assets/js/jquery-1.9.0.min.js"></script> -->
<script type="text/javascript" src="/assets/js/jquery.onepage-scroll.min.js"></script>
<script type="text/javascript" src="/assets/js/jQuery.resizeEnd.min.js"></script>
<script type="text/javascript" src="/assets/js/modernizr.custom.07427.js"></script>
<script type="text/javascript" src="/assets/js/jquery.carouFredSel-6.2.0-packed.js"></script>
<script type="text/javascript" src="/assets/js/jquery.zaccordion.min.js"></script>
<script type="text/javascript" src="/assets/js/flickerplate.min.js"></script>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->

<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body class="loading">
<div class="dowebok-hd">
  <div class="inner">
    <img src="/assets/images/erinal.png" height="63px"/>
    <ul class="nav">
      <li><a href="<?php echo yii\helpers\Url::to(['eriuser/auth']);?>">登陆/注册</a></li>
      <li><a href="http://www.htmlsucai.com">关于我们</a></li>
      <li><a href="#">下载APP端</a></li>
    </ul>
  </div>
</div>

<!-- MAIN-->
<div class="main" id="main">
	<div class="page page1">
		<DIV class="head-pic">
			<DIV style="display: block;" id="showCon0" class="big-pic" ><IMG  src="/assets/images/img1.png"></A> </DIV>
			<DIV style="display: none;" id="showCon1" class="big-pic"> <IMG  src="/assets/images/img2.png"> </DIV>
			<DIV style="display: none;" id="showCon2" class="big-pic"> <IMG src="/assets/images/img3.png"> </DIV>
			<DIV style="display: none;" id="showCon3" class="big-pic"><IMG src="/assets/images/img4.png"> </DIV>
			<!-- <DIV style="display: none;" id="showCon4" class="big-pic"><IMG src="/assets/images/img5.png"> </DIV>
			<DIV style="display: none;" id="showCon5" class="big-pic"><IMG src="/assets/images/img6.png"> </DIV>
			<DIV style="display: none;" id="showCon6" class="big-pic"><IMG  src="/assets/images/img7.png"> </DIV> -->
			<UL class="small-pic">
			  <LI id="list0" class="on" onMouseOver="showContent(0)"> <IMG alt="颜色" src="/assets/images/1.jpg"></LI>
			  <LI id="list1" onMouseOver="showContent(1)"> <IMG alt="颜色" src="/assets/images/2.jpg"></LI>
			  <LI id="list2" onMouseOver="showContent(2)"> <IMG alt="颜色" src="/assets/images/3.jpg"></LI>
			  <LI id="list3" onMouseOver="showContent(3)"> <IMG alt="颜色" src="/assets/images/4.jpg"></LI>
			  <!-- <LI id="list4" onMouseOver="showContent(4)"> <IMG alt="颜色" src="/assets/images/5.jpg"></LI>
			  <LI id="list5" onMouseOver="showContent(5)"> <IMG alt="颜色" src="/assets/images/6.jpg"></LI>
			  <LI id="list6" onMouseOver="showContent(6)"> <IMG alt="颜色" src="/assets/images/7.jpg"></LI> -->
			</UL>
		</DIV>
		<!-- <div class="icon"></div> -->

		<SCRIPT language="javascript">

		var current = 0;
		var imgNum = 1;
		var interval = 0;
		function showContent(index){
			var oldTag = document.getElementById("list" + current.toString());
			var oldCon = document.getElementById("showCon" + current.toString());
			var newTag = document.getElementById("list" + index.toString());
			var newCon = document.getElementById("showCon" + index.toString());
			if(current != index){
				oldTag.className= "";
				oldCon.style.display = "none";
				current = index;
				newTag.className="on";
				newCon.style.display = "block";
			}
		}
		function setMode(n){
			if(n != null){
				imgNum = n+1;
			}
			if(interval == 0){
				interval = setInterval("showTime()", 300000);  //时间调整
			}
		}
		function showTime(){
			if(imgNum > 4){
				imgNum = 0;
			}
			showContent(imgNum);
			imgNum ++;
		}
		setMode();

		</SCRIPT>
	</div>
	<div class="page page2">
		<div class="txt" >
			<div class="h2" id="page2_h2">爱分享&nbsp;</div>
			<div class="h2_list" id="page2_list">
				在Erinal分享生活&nbsp;&nbsp;&nbsp;<br/>
				分享技术，<br/>
				了解别人，<br/>
				让一切有趣起来。<br/>
			</div>
			<div class="page2_img1">
				<!-- <img src="/assets/images/page2_img1.jpg">可以加一张功能截图 -->
			</div>
		</div>
		<img src="/assets/images/banner1.jpg" class="img2-b" width="1201px" height="803px">
	</div>
	<div class="page page3">
		<div class="txt">
			<div class="h3" id="page3_h3">多记录&nbsp;</div>
			<div class="h3_list" id="page3_list">
			支持各种类型的上传分享&nbsp;&nbsp;&nbsp;<br/>
			无论是文字，视频，图片，&nbsp;&nbsp;&nbsp;<br/>
			私密空间，想写什么写什么。<br/>
			</div>
			<div class="page3_img1">
				<img src="/assets/images/page3_img1.jpg">
			</div>
		</div>
	</div>
	<div class="page page4">
		<div class="photo w1920-h1080">
		  <ul>
			<li class="one">
			  <div class="photo-mask" style="opacity: 0.5;"></div>
			  <div class="photo-text">热门文字</div>
			</li>
			<li class="two">
			  <div class="photo-mask" style="opacity: 0;"></div>
			  <div class="photo-text">精品文字</div>
			</li>
			<li class="three">
			  <div class="photo-mask" style="opacity: 0.5;" id="tabwind"></div>
			  <div class="photo-text">内容导航</div>
			</li>
			<li class="four">
			  <div class="photo-mask" style="opacity: 0.5;"></div>
			  <div class="photo-text">个人空间</div>
			</li>
		  </ul>
		  <!--导航-->
		</div>
	</div>

	<div class="page page5">
		<div class="flicker-example" data-block-text="false">

		  <ul>
			<li data-background="/assets/images/phone.jpg">
			  <div class="flick-title"><a href="https://github.com/erinal/erinal" target="_blank">
　　                  GitHub 项目地址
            </a></div>
			  <div class="flick-sub-text">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Looking forward to your star!
            </div>
			</li>
			<li data-background="/assets/images/misc.jpg">
			  <div class="flick-title">关于我们</div>
			  <div class="flick-sub-text">
                  <a href="https://github.com/vampirebitter">vampirebiiter</a>
                  <span>南京信息工程大学学生</span>
                  <br />
                  <a href="https://github.com/Qsaka">Qsaka</a>
                  <span>南京信息工程大学学生</span>
              </div>
			</li>
		  </ul>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function(){

	$('.flicker-example').flicker({flick_animation: 'jquery-slide'});
	var $window = $(window);
	var $wh = $window.height();
	var $body = $('body');
	var $main = $('.main');
	var $responsiveImg = $('.responsiveImg');
	var $responsiveFallback = false;

	//页面加载时判断是否需要更换图片
	if($wh < 790){
		responsiveFn1();
	}

	//浏览器检测，判断是否为高级浏览器
	if(Modernizr.cssanimations){
		$responsiveFallback = false;
	} else {
		$responsiveFallback = true;
	}

	//onepage_scroll方法
	$main.onepage_scroll({
		sectionContainer: '.page',
		loop:false,
		responsiveFallback: $responsiveFallback,
		beforeMove: function(index){
			$("#page2_h2").fadeOut();
			$("#page2_list").fadeOut();
			$(".page2_img1").fadeOut();

			$("#page3_h3").fadeOut();
			$("#page3_list").fadeOut();
			$(".page3_img1").fadeOut();

			$(".flick-title").fadeOut();
			$(".flick-sub-text").fadeOut();
			$("#page6_txt").fadeOut();
			$("#page6_list").fadeOut();
			$(".page6_img1").fadeOut();
			$("#page7_txt").fadeOut();
			$("#page7_list").fadeOut();
			$(".page7_img1").fadeOut();
		},
		afterMove: function(index){
			switch(index){
				case 1:
					var current = 0;
					var imgNum = 1;
					var interval = 0;
					setMode();
					break;
				case 2:
					$("#page2_h2").fadeIn();
					$("#page2_list").fadeIn(3000);
					$(".page2_img1").fadeIn(4000);
					break;
				case 3:
					$("#page3_h3").fadeIn();
					$("#page3_list").fadeIn(3000);
					$(".page3_img1").fadeIn(4000);
					break;
				case 5:
					$(".flick-title").fadeIn();
					$(".flick-sub-text").fadeIn(3000);
					break;
				case 6:
					$("#page6_txt").fadeIn();
					$("#page6_list").fadeIn(3000);
					$(".page6_img1").fadeIn(4000);
					break;
				case 7:
					$("#page7_txt").fadeIn();
					$("#page7_list").fadeIn(3000);
					$(".page7_img1").fadeIn(4000);
					break;
			}
		}
	});

	//窗口改变大小切换不同的图片
	$window.resizeEnd({
		delay : 500
	}, function(){
		var $wh = $window.height();
		if($wh < 790){
			responsiveFn1();
		} else {
			responsiveFn2();
		}
	});

    var tabwind = document.getElementById("tabwind");
    tabwind.onclick = function(){
        window.location.href="<?php echo yii\helpers\Url::to(['tabwind/index']); ?>";
    }



	function responsiveFn1(){
		$body.addClass('responsive-height-lt790')
		$responsiveImg.each(function(){
			var $dateSmall = $(this).attr('date-small');
			$(this).attr('src', $dateSmall);
		});
	}

	function responsiveFn2(){
		$body.removeClass('responsive-height-lt790')
		$responsiveImg.each(function(){
			var $dateBig = $(this).attr('date-big');
			$(this).attr('src', $dateBig);
		});
	}




});

//页面加载时的 Loading 效果
$(window).load(function(){
	window.setTimeout(function(){
		$('body').removeClass('loading');
	}, 2000);
});
</script>

</body>
</html>
