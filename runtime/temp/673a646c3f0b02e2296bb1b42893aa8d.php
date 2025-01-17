<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\phpstudy_pro\WWW\php_project\public/../application/admin\view\login.html";i:1542613457;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>后台登录</title>
    <link rel="stylesheet" href="/static/admin/js/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/css/admin.css">
    <link rel="stylesheet" href="/static/admin/css/login.css">
    <!--<link id="layuicss-layer" rel="stylesheet" href="/static/admin/css/layer.css" media="all">-->
    <script src="http://static.geetest.com/static/tools/gt.js"></script>
    <script>
        /*保证登录页面是顶级页面*/
        if(window.top!==window.self){window.top.location=window.location};
    </script>
</head>
<body layadmin-themealias="default">
<div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login" >
    <div class="layadmin-user-login-main">
        <div class="layadmin-user-login-box layadmin-user-login-header">
            <h2>layui后台</h2>
            <p>后台管理系统</p>
        </div>
        <div class="layadmin-user-login-box layadmin-user-login-body">
            <form class="layui-form" onsubmit="return false;">
                <div class="layui-form-item">
                    <label class="layadmin-user-login-icon layui-icon layui-icon-username"
                           for="LAY-user-login-username"></label>
                    <input type="text" name="username" id="LAY-user-login-username" lay-verify="required" placeholder="用户名" class="layui-input">
                </div>
                <div class="layui-form-item">
                    <label class="layadmin-user-login-icon layui-icon layui-icon-password"
                           for="LAY-user-login-password"></label>
                    <input type="password" name="password" id="LAY-user-login-password" lay-verify="required" placeholder="密码" class="layui-input">
                </div>
                <div class="layui-form-item">
                    <div class="layui-row">
                        <?php if(config('verify_type') == 1): ?>
                        <div class="layui-col-xs7">
                            <label class="layadmin-user-login-icon layui-icon layui-icon-vercode"
                                   for="LAY-user-login-vercode"></label>
                            <input type="text" name="vercode" id="LAY-user-login-vercode" lay-verify="required" placeholder="图形验证码" class="layui-input">
                        </div>
                        <div class="layui-col-xs5">
                            <div style="margin-left: 10px;">
                                <img src="<?php echo url('checkVerify'); ?>" onclick="javascript:this.src='<?php echo url('checkVerify'); ?>?tm='+Math.random();" style="float:right;cursor: pointer" id="verify"/>
                            </div>
                        </div>
                        <?php elseif(config('verify_type') == 2): ?>
                        <div class="layui-col-xs12" id="geeFa">
                            <div id="embed-captcha"></div>
                        </div>
                        <p id="wait">正在加载验证码.... <i class="layui-icon layui-icon-loading-1 layui-icon layui-anim layui-anim-rotate layui-anim-loop"></i></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="layui-form-item" style="margin-bottom: 20px;">
                    <!--<input type="checkbox" name="remember" lay-skin="primary" title="记住密码">-->
                    <!--<div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>记住密码</span><i-->
                            <!--class="layui-icon layui-icon-ok"></i></div>-->
                    <!--<a href="javascript:;" class="layadmin-user-jump-change layadmin-link" style="margin-top: 7px;">忘记密码？</a>-->
                </div>
                <div class="layui-form-item">
                    <button class="layui-btn layui-btn-fluid" lay-submit="" lay-filter="LAY-login">登 录</button>
                </div>
            </form>
        </div>
    </div>

    <div class="layui-trans layadmin-user-login-footer">
        <p>© 2018 <a href="http://www.layui.com/" target="_blank">layui.com</a></p>
    </div>
</div>
<script src="/static/admin/js/layui/layui.all.js"></script>
<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/admin/js/wk.js"></script>
<script>
    $('#LAY-user-login-username').focus();
    var handlerEmbed = function (captchaObj) {
        $("#embed-submit").click(function (e) {
            var validate = captchaObj.getValidate();
            if (!validate) {
                $("#notice")[0].className = "show";
                setTimeout(function () {
                    $("#notice")[0].className = "hide";
                }, 2000);
                e.preventDefault();
            }
        });
        // 将验证码加到id为captcha的元素里
        captchaObj.appendTo("#embed-captcha");
        captchaObj.onReady(function () {
            $("#wait")[0].className = "layui-hide";
        });
        // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
    };
    var geeCheck = function(){
        $.ajax({
            // 获取id，challenge，success（是否启用failback）
            url: "<?php echo url('getVerify',array('t'=>time())); ?>", // 加随机数防止缓存
            type: "get",
            dataType: "json",
            success: function (data) {
                // 使用initGeetest接口
                // 参数1：配置参数
                // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
                initGeetest({
                    gt: data.gt,
                    challenge: data.challenge,
                    product: "float", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
                    offline: !data.success, // 表示用户后台检测极验服务器是否宕机，一般不需要关注
                    width:"100%",
                }, handlerEmbed);
            }
        });
    }
    if('<?php echo config('verify_type'); ?>' == 2){
        geeCheck();
    }
    layui.use('form', function(){
        var form = layui.form;
        //监听提交
        form.on('submit(LAY-login)', function(data){
            $(".layui-btn").addClass('layui-disabled').attr('disabled','disabled').html('登录中... &nbsp;<i class="layui-icon layui-icon-loading-1 layui-icon layui-anim layui-anim-rotate layui-anim-loop"></i>');
            $.ajax({
                url:"<?php echo url('doLogin'); ?>",
                type:'post',
                dataType:'json',
                data:data.field,
                success:function(res){
                    if(res.code == 1){
                        setTimeout(function(){
                            location.href=res.url;
                        },1500);
                    }else{
                        layer.msg(res.msg,{icon:2,time:1500,anim: 6},function(index){
                            if('<?php echo config('verify_type'); ?>' == 2 && res.code != -3){
                                $("#wait").removeClass('layui-hide');
                                $('#embed-captcha').remove();
                                $('#geeFa').append('<div id="embed-captcha"></div>')
                                geeCheck();
                            }else if('<?php echo config('verify_type'); ?>' == 1){
                                $('#verify').attr("src","<?php echo url('checkVerify'); ?>?tm="+Math.random());
                            }
                            switch(res.code)
                            {
                                case -1:
                                    $('#LAY-user-login-username').focus();
                                    break;
                                case -2:
                                    $('#LAY-user-login-password').focus();
                                    break;
                                case -4:
                                    $('#LAY-user-login-vercode').focus();
                                    break;
                            }
                            layer.close(index);
                        })
                        $(".layui-btn").removeClass('layui-disabled').removeAttr('disabled').text("登 录");
                        return false;
                    }
                }
                ,error:function(event, xhr, options, exc){
                    switch (event.status) {
                        case 403:
                            wk.error('403:禁止访问...');
                            break;
                        case 404:
                            wk.error('404:请求服务器出错...');
                            break;
                        case 500:
                            wk.error('500:服务器错误...');
                            break;
                    }
                    $(".layui-btn").removeClass('layui-disabled').removeAttr('disabled').text("登 录");
                }
            })
        });
    });
    //防止页面后退
    history.pushState(null, null, document.URL);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, document.URL);
    });

</script>
</body>
</html>