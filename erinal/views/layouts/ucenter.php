<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>我的主页</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <!-- <link rel="shortcut icon" href="http://www.sucaihuo.com/Public//assets/user_images/favicon.ico" type="image/x-icon"> -->
        <link rel="stylesheet" href="/assets/style/style_version2016.css" type="text/css">

    </head>
    <body>
        <div id="site_nav">
            <div class="sn_container clearfix">
                <ul class="tg_tools fr">
                    <li class="no-hover">
                        <a href="http://www.sucaihuo.com/Member/pay.html" class="head_pay_btn">充值</a>
                    </li>
                    <li class="no-hover" style="display: none">
                        <a id="msg_notify" class="msg_notify" href="http://www.sucaihuo.com/Member/message.html"></a>
                    </li>
                    <li class="box_color nav_home">
                        <span><a href="http://www.sucaihuo.com/Member/info.html">个人中心</a></span><b class="icon"></b>
                        <ul>
                            <li><a href="http://www.sucaihuo.com/Member/info.html"><span>我的主页</span></a></li>
                            <li><a href="http://www.sucaihuo.com/Member/set.html"><span>个人设置</span></a></li>
                            <li><a href="http://www.sucaihuo.com/Member/downloads.html"><span>下载记录</span></a></li>
                            <li><a href="http://www.sucaihuo.com/Member/collects.html"><span>我的收藏</span></a></li>
                            <li><a href="http://www.sucaihuo.com/Member/sign.html"><span>我的签到</span></a></li>
                            <li><a href="http://www.sucaihuo.com/Download/logout?r=/Member/info.html"><span>退出登录</span></a></li>
                        </ul>
                    </li>
                    <li class="tg-line icon"></li>
                    <li class="box_color">
                        <span>帮助中心</span><b class="icon"></b>
                        <ul>
                            <li><a href="http://www.sucaihuo.com/help/template"><span>扒模板</span></a></li>
                            <li><a href="http://www.sucaihuo.com/help/points"><span>积分获取</span></a></li>
                            <li><a href="http://www.sucaihuo.com/help/contact"><span>联系我们</span></a></li>
                            <li><a href="http://www.sucaihuo.com/help/index"><span>关于我们</span></a></li>
                            <li><a href="http://www.sucaihuo.com/help/job"><span>招纳贤士</span></a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="tg_tools fl" id="login_area" style="display:block">
                    <li class="tg_tools_home no-hover"><i class="icon-more"></i><span><a href="http://www.sucaihuo.com/">素材火首页</a></span></li>

                    <li class="no-hover haslogin"><span><a href="http://www.sucaihuo.com/Member/info.html"><font class="sn_login username">tongpan</font></a></span></li>
                        <li class="tg-line icon"></li>
                        <li class="no-hover haslogin"><span><a href="http://www.sucaihuo.com/Download/logout?r=/Member/info.html">退出</a></span></li>
                                                            </ul>
            </div>
        </div>


        <link href="/assets/style/member.css" rel="stylesheet" type="text/css">
        <div class="container clearfix">
            <div class="member_right">
            <div class="member_per">
                <div class="panel clearfix">
                    <div class="panel-info clearfix">
                        <a href="http://www.sucaihuo.com/Member/avatar.html"><img class="round-image" src="/assets/user_images/3091.jpg" alt="头像" height="50" width="50"></a>
                        <div class="name-job">
                            <h4 class="`my`name"> tongpan </h4>
                            <p class="job-title"> 工作保密 </p>
                        </div>
                    </div>
                    <div class="sign-wrap">
                        <textarea id="signed_textarea" class="signed_textarea" disabled="disabled" autocomplete="off">123</textarea>
                        <em id="signed_edit" class="signed_edit"></em>
                    </div>
                    <p id="signed_error" class="signed_error"></p>
                    <div class="rank-points">
                        <ul>
                            <li class="mp-item">
                                <a class="mp-atag" href="http://www.sucaihuo.com/Member/points.html">
                                    <span class="mp-title">积分</span>
                                    <span class="mp-num">14</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="member_per">
                <ul class="nav panel">
                    <li>
                        <a href="#"><i class="icon-nav icon-tick"></i>我的主页</a>
                    </li>
                    <li>
                        <a href="<?php echo yii\helpers\Url::to(['usetting/profile']);?>"><i class="icon-nav icon-note"></i>我的设置</a>
                    </li>
                    <li>
                        <a href="http://www.sucaihuo.com/Member/comments.html"><i class="icon-nav icon-plan"></i>我的评论</a>
                    </li>
                   <li>
                        <a href="http://www.sucaihuo.com/Member/topic.html"><i class="icon-nav icon-ques"></i>我的话题</a>
                    </li>
        <!--            <li>
                        <a href="" class=""><i class="icon-nav icon-code"></i>我的代码</a>
                    </li>-->
                    <li style="border-bottom: none">
                        <a href="http://www.sucaihuo.com/Member/message.html" class=""><i class="icon-nav icon-msg"></i>我的消息</a>
                    </li>
                </ul>
            </div>
            <div class="member_per">
                <ul class="space-data panel">
                    <li>
                        <span class="icon-clock icon" title="下载"></span>
                        下载：
                        <a href="http://www.sucaihuo.com/Member/downloads.html">2次</a>
                    </li>
                    <li>
                        <span class="icon-tick icon" title="收藏"></span>
                        收藏：
                        <a href="http://www.sucaihuo.com/Member/collects.html">0条</a>
                    </li>
                    <li>
                        <span class="icon-note icon" title="签到"></span>
                        签到：
                        <a class="countNote" href="http://www.sucaihuo.com/Member/sign.html">2次</a>
                    </li>
        <!--            <li>
                        <span class="icon-ques icon" title="发表"></span>
                        话题：
                        <a href="">0条</a>
                    </li>-->
        <!--            <li>
                        <span class="icon-chat icon" title="回答"></span>
                        回答：
                        <a href="">0条</a>
                    </li>-->
                    <li>
                        <span class="icon-code icon" title="代码"></span>
                        代码：
                        <a href="">0条</a>
                    </li>
                    <li>
                        <span class="icon-user icon" title="粉丝"></span>
                        粉丝：
                        <a href="">0个</a>
                    </li>
                </ul>
            </div>
        </div>
    <?php echo $content; ?>

    <script src="/assets/style/hm.js"></script>
    <script src="/assets/style/jquery_highlight.js" type="text/javascript"></script>
    <script src="/assets/style/member.js" type="text/javascript"></script>
    <div class="mmsg-box mmsg-box-info" id="msg-box" style="margin-top: -23.5px; margin-left: -96.5px;">
        <div class="mmsg-content">
            <i class="mmsg-icon"></i>
            <p id="msg-box-content"></p>
        </div>
        <div class="mmsg-background"></div>
    </div></body></html>
