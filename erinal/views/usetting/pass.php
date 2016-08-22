    <div class="member_main">
        <div class="perInfo">
            <div class="titleInfoBorder">
                <span>我的设置</span>
            </div>
            <div class="firstTabBox lineSpace">
    <a class="tab " href="http://www.sucaihuo.com/Member/set.html">个人资料</a>
    <span class="line">|</span>
    <a class="tab " href="http://www.sucaihuo.com/Member/avatar.html">头像设置</a>
    <span class="line">|</span>
    <a class="tab " href="http://www.sucaihuo.com/Member/email_check.html">邮箱验证</a>
    <span class="line">|</span>
    <a class="tab currentTab" href="http://www.sucaihuo.com/Member/pwd.html">修改密码</a>
<!--    <span class="line">|</span>
    <a class="tab " href="http://www.sucaihuo.com/Member/bind.html">绑定账号</a>-->
</div>
        </div>
        <div class="setting-right-wrap wrap-boxes settings">
            <div class="pwd-reset-wrap setting-resetpwd">
               <form novalidate="novalidate" id="form" name="form" method="post" action="http://www.sucaihuo.com/Home/Member/pwd_post">
                    <div class="wlfg-wrap">
                        <label class="label-name" for="pwdOld">当前密码</label>
                        <div class="rlf-group">
                            <input class="rlf-input rlf-input-pwd" placeholder="请输入当前密码" name="pwdOld" id="pwdOld" maxlength="20" autocomplete="off" type="password">
                            <p class="rlf-tip-wrap"></p>
                        </div>
                    </div>
                    <div class="wlfg-wrap">
                        <label class="label-name" for="pwd">新密码</label>
                        <div class="rlf-group">
                            <input id="pwd" class="rlf-input rlf-input-pwd" placeholder="请输入密码" name="pwd" maxlength="20" autocomplete="off" type="password">
                            <p class="rlf-tip-wrap"></p>
                        </div>
                    </div>
                    <div class="wlfg-wrap">
                        <label class="label-name" for="pwd2">确认密码</label>
                        <div class="rlf-group">
                            <input id="pwd2" class="rlf-input rlf-input-pwd" placeholder="请输入密码" name="pwd2" maxlength="20" autocomplete="off" type="password">
                            <p class="rlf-tip-wrap"></p>
                        </div>
                    </div>
                    <div class="wlfg-wrap">
                        <label class="label-name"></label>
                        <div class="rlf-group">
                            <button id="pwd_save" class="btn-green btn" type="submit">保存</button>
                        </div>
                    </div>
                </form>
            </div>
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


<script src="/assets/style/validate.js"></script>
<script type="text/javascript">
    $(function() {
        $("#form").validate({
            errorPlacement: function(error, element) {
                var error_td = element.parent('.rlf-group');
                error_td.find(".rlf-tip-wrap").html(error).show();
//                error_td.find('p.focusTips').remove();
            },
            rules: {
                pwdOld: {
                    required: true,
                    remote: {
                        url: "http://www.sucaihuo.com/Ajax/checkPwd.html",
                        type: 'post',
                        data: {
                            pwdOld: function() {
                                return $('#pwdOld').val();
                            }
                        }
                    }
                },
                pwd: {
                    required: true,
                    minlength: 6,
                    maxlength: 20
                },
                pwd2: {
                    required: true,
                    equalTo: '#pwd'
                }
            },
            messages: {
                pwdOld: {
                    required: '请输入原密码！',
                    remote: '原密码不正确！'
                },
                pwd: {
                    required: '密码不能为空',
                    minlength: '密码长度应在6-20个字符之间',
                    maxlength: '密码长度应在6-20个字符之间'
                },
                pwd2: {
                    required: '请再次输入您的密码',
                    equalTo: '两次输入的密码不一致'
                }

            }
        });
    });
</script>
