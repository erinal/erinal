
    <div class="member_main">
        <div class="perInfo">
            <div class="titleInfoBorder">
                <span>我的设置</span>
            </div>
            <div class="firstTabBox lineSpace">
    <a class="tab currentTab" href="http://www.sucaihuo.com/Member/set.html">个人资料</a>
    <span class="line">|</span>
    <a class="tab " href="<?php echo yii\helpers\Url::to(['usetting/avator']);?>">头像设置</a>
    <span class="line">|</span>
    <a class="tab " href="http://www.sucaihuo.com/Member/email_check.html">邮箱验证</a>
    <span class="line">|</span>
    <a class="tab " href="http://www.sucaihuo.com/Member/pwd.html">修改密码</a>
<!--    <span class="line">|</span>
    <a class="tab " href="http://www.sucaihuo.com/Member/bind.html">绑定账号</a>-->
</div>
        </div>
        <div class="setting-right-wrap wrap-boxes settings">
            <div id="setting-profile" class="setting-wrap setting-profile">
                <div class="wlfg-wrap">
                    <label class="label-name" for="nick">昵称</label>
                    <input id="nickname" class="rlf-input rlf-input-nick" placeholder="请输入昵称." value="tongpan" data-validate="nick" autocomplete="off" name="nickname" type="text">
                </div>
                <div class="wlfg-wrap">
                    <label class="label-name" for="job">职位</label>
                    <select id="job" class="rlf-select" hidefocus="true" name="job" autocomplete="off">
                        <option selected="selected" value="">请选择职位</option>
                        <option value="页面重构设计">页面重构设计</option><option value="交互设计师">交互设计师</option><option value="产品经理">产品经理</option><option value="UI设计师">UI设计师</option><option value="JS工程师">JS工程师</option><option value="Web前端工程师">Web前端工程师</option><option value="移动开发工程师">移动开发工程师</option><option value="PHP开发工程师">PHP开发工程师</option><option value="软件测试工程师">软件测试工程师</option><option value="Linux系统工程师">Linux系统工程师</option><option value="JAVA开发工程师">JAVA开发工程师</option><option value="技术总监">技术总监</option><option value="CEO">CEO</option><option value="学生">学生</option><option value="其它">其它</option>                    </select>
                </div>
                <div class="wlfg-wrap">
                    <label class="label-name" for="province-select">城市</label>
                    <span id="city_area">
                        <select class="prov"><option selected="selected" value="北京">北京</option><option value="天津">天津</option><option value="河北">河北</option><option value="山西">山西</option><option value="内蒙古">内蒙古</option><option value="辽宁">辽宁</option><option value="吉林">吉林</option><option value="黑龙江">黑龙江</option><option value="上海">上海</option><option value="江苏">江苏</option><option value="浙江">浙江</option><option value="安徽">安徽</option><option value="福建">福建</option><option value="江西">江西</option><option value="山东">山东</option><option value="河南">河南</option><option value="湖北">湖北</option><option value="湖南">湖南</option><option value="广东">广东</option><option value="广西">广西</option><option value="海南">海南</option><option value="重庆">重庆</option><option value="四川">四川</option><option value="贵州">贵州</option><option value="云南">云南</option><option value="西藏">西藏</option><option value="陕西">陕西</option><option value="甘肃">甘肃</option><option value="青海">青海</option><option value="宁夏">宁夏</option><option value="新疆">新疆</option><option value="香港">香港</option><option value="澳门">澳门</option><option value="台湾">台湾</option><option value="国外">国外</option></select>
                        <select class="city"><option selected="selected" value="东城区">东城区</option><option value="西城区">西城区</option><option value="崇文区">崇文区</option><option value="宣武区">宣武区</option><option value="朝阳区">朝阳区</option><option value="丰台区">丰台区</option><option value="石景山区">石景山区</option><option value="海淀区">海淀区</option><option value="门头沟区">门头沟区</option><option value="房山区">房山区</option><option value="通州区">通州区</option><option value="顺义区">顺义区</option><option value="昌平区">昌平区</option><option value="大兴区">大兴区</option><option value="平谷区">平谷区</option><option value="怀柔区">怀柔区</option><option value="密云县">密云县</option><option value="延庆县">延庆县</option></select>
                        <select style="display: none;" class="dist" disabled="disabled"></select>
                    </span>
                </div>
                <div class="wlfg-wrap">
                    <label class="label">性别</label>
                    <label>
                        <input name="sex" value="0" hidefocus="true" autocomplete="off" checked="checked" type="radio">
                        保密
                    </label>
                    <label>
                        <input name="sex" value="1" hidefocus="true" autocomplete="off" type="radio">
                        男
                    </label>
                    <label>
                        <input name="sex" value="2" hidefocus="true" autocomplete="off" type="radio">
                        女
                    </label>

                </div>
                <div class="wlfg-wrap">
                    <label class="label-name label_signature" for="aboutme">个性签名</label>
                    <textarea class="textarea textarea_signature" rows="5" cols="30" id="signature">123</textarea>

                </div>
                <div class="wlfg-wrap">
                    <label class="label-name"></label>
                    <button class="btn" type="button" id="btn_submit">保存</button>
                </div>
            </div>
        </div>
        <div class="pager"></div>
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




<script type="text/javascript" src="/assets/style/jquery.js"></script>
<script type="text/javascript">
    $(function() {
        $("#city_area").citySelect({
            prov: "",
            city: "",
            dist: "",
            nodata: "none",
            url: "/Public/js/other/city.min.js"
        });
        $("#btn_submit").click(function() {
            var nickname = $("#nickname").val();
            var job = $("#job").val();
            var sex = $("input[name=sex]:checked").val();
            var signature = $("#signature").val();
            var area = '';
            $("#city_area").children("select").each(function() {
                area += $(this).val() + ",";
            })
            checkBefore('#btn_submit');
            $.post(getUrl("Ajax/updateInfo"), {nickname: nickname, job: job, area: area, sex: sex, signature: signature}, function(data) {
                $("#signed_textarea").val(signature);
                $(".job-title").html(job);
                $(".myname").html(nickname);
                checkAfter('#btn_submit');
                showSuccessTip('资料修改成功！');
            }, "json")
        })
    })

</script>
