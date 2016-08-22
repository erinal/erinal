
    <div class="member_main">
        <div class="perInfo">
            <div class="titleInfoBorder">
                <span>我的设置</span>
            </div>
            <div class="firstTabBox lineSpace">
    <a class="tab " href="http://www.sucaihuo.com/Member/set.html">个人资料</a>
    <span class="line">|</span>
    <a class="tab currentTab" href="http://www.sucaihuo.com/Member/avatar.html">头像设置</a>
    <span class="line">|</span>
    <a class="tab " href="http://www.sucaihuo.com/Member/email_check.html">邮箱验证</a>
    <span class="line">|</span>
    <a class="tab " href="<?php echo yii\helpers\Url::to(['usetting/pass']);?>">修改密码</a>
<!--    <span class="line">|</span>
    <a class="tab " href="http://www.sucaihuo.com/Member/bind.html">绑定账号</a>-->
</div>
        </div>
        <div class="setting-right-wrap wrap-boxes settings" id="avatar_main">

            <a href="javascript:;" class="file">选择文件
                <input name="head_photo" id="head_photo" value="" type="file">

            </a>
            <input name="photo_pic" id="photo_pic" value="" type="hidden">
            <!--头像显示-->
            <div id="show_photo" style="border:1px solid #f7f7f7;margin:20px 0 0"><img src="images/3091.jpg" alt="头像"></div>
        </div>

        <!--<div class="myspace-list">
    <a class="myspace-plan " href="http://www.sucaihuo.com/Member/info.html">
        <span>主页</span>
    </a>
     <a class="myspace-note planactive" href="http://www.sucaihuo.com/Member/set.html">
        <span>设置</span>
    </a>
    <a class="myspace-course " href="http://www.sucaihuo.com/Member/comments.html">
        <span>评论</span>
    </a>

    <a class="myspace-ques " href="">
        <span>问答</span>
    </a>

    <a class="myspace-code " href="">
        <span>代码</span>
    </a>
</div>-->
    </div>
</div>
<script type="text/javascript" src="/assets/style/ajaxfileupload.js"></script>
<link href="style/default.css" rel="stylesheet"><script type="text/javascript" src="/assets/style/jquery.js"></script>
<script type="text/javascript" src="/assets/style/iframeTools.js"></script>
<script type="text/javascript">
    $(function() {
        $('#head_photo').live('change', function() {
            ajaxFileUploadview('head_photo', 'photo_pic', "../upload.php");
        });

    });
    function show_head(head_file) {
       location.reload();
        //$.post("http://www.sucaihuo.com/Home/Index/update_head.html",{head_file:head_file},function(result){
//                $("#head_photo_src").attr('src', "../Public/avatar/"+head_file);
        //});
    }

    //文件上传带预览
    function ajaxFileUploadview(imgid, hiddenid, url) {
        $.ajaxFileUpload({
            url: url,
            secureuri: false,
            fileElementId: imgid,
            dataType: 'json',
            data: {name: 'logan', id: 'id'},
            success: function(data, status) {
                if (typeof (data.error) != 'undefined') {
                    if (data.error != '') {
                        var dialog = art.dialog({title: false, fixed: true, padding: 0});
                        dialog.time(2).content("<div class='tips'>" + data.error + "</div>");
                    } else {
                        var resp = data.msg;
                        if (resp != '0000') {
                            var dialog = art.dialog({title: false, fixed: true, padding: 0});
                            dialog.time(2).content("<div class='tips'>" + data.error + "</div>");
                            return false;
                        } else {
                            $('#' + hiddenid).val(data.imgurl);

                            art.dialog.open("../other/avatar/crop_image.php?img=" + data.imgurl, {
                                title: '裁剪头像',
                                width: '580px',
                                height: '400px'
                            });
                            //dialog.time(3).content("<div class='msg-all-succeed'>上传成功！</div>");
                        }
                    }
                }
            },
            error: function(data, status, e) {
                dialog.time(3).content("<div class='tips'>" + e + "</div>");
            }
        })
    }
</script>
<div style="display: none; position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; cursor: move; opacity: 0; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"></div>
