<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\PHPNote\php_project\public/../application/admin\view\article\index.html";i:1542614435;s:64:"D:\PHPNote\php_project\application\admin\view\public\header.html";i:1542340311;s:64:"D:\PHPNote\php_project\application\admin\view\public\footer.html";i:1542617006;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo config('WEB_SITE_TITLE'); ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/static/admin/js/layui/css/layui.css" >
    <link rel="stylesheet" href="/static/admin/css/admin.css" >
    <link rel="stylesheet" href="/static/admin/css/plugins/viewer/viewer.css"><!--viewer图片查看器-->
    <link rel="stylesheet" href="/static/admin/css/font-awesome.min.css"><!--fontAwesome图标库-->
    <link rel="stylesheet" href="/static/admin/css/plugins/cropper/ImgCropping.css" ><!--图片裁剪组件-->
    <link rel="stylesheet" href="/static/admin/css/plugins/cropper/cropper.min.css" ><!--图片裁剪组件-->
    <!--<link rel="stylesheet" href="/static/admin/css/plugins/animate/animate.min.css" >-->
    <link rel="stylesheet" href="/static/admin/js/plugins/zTree/zTreeStyle.css" ><!--zTree组件-->
    <link rel="stylesheet" href="/static/admin/css/plugins/formSelects/formSelects-v4.css" ><!--select多选组件-->
    <link rel="stylesheet" href="/static/admin/js/plugins/webuploader/webuploader.css" ><!--webUploader上传组件-->
    <link rel="stylesheet" href="/static/admin/js/plugins/webuploader/style.css" ><!--webUploader上传组件-->
    <link rel="stylesheet" href="/static/admin/js/plugins/wx-audio/wx-audio.css" ><!--音频播放器组件-->
    <link rel="stylesheet" href="/static/admin/css/plugins/toastr/toastr.css" ><!--toastr通知组件-->
    <style>
        /*layui滚动条自适应*/
        /*.layui-body{overflow-y: scroll;}*/
        /*body{overflow-y: scroll;}*/
        /*灯箱图片*/
        /*.closeP{width:60px;height:60px;text-align: center;line-height: 70px;border-radius:30px;background:rgba(0,0,0,0.5);font-size: 25px;position: fixed;top:-23px;right:-20px;color: #ccc;cursor: pointer;}*/
        /*.cha{position:relative;top:1px;right:8px;}*/
        /*.closeP:hover{color: white}*/
        /*.showP{width: 100%;height: 100vh;background: rgba(0,0,0,0.5);text-align: center;position: fixed;top: 0;left: 0;z-index: 1000;}*/
        /*图标*/
        /*#chooseicon {margin:20px;}*/
        /*#chooseicon ul { margin:5px 0 0 0;}*/
        /*#chooseicon ul li{width:41px;height:41px;line-height:41px;border:1px solid #e7e7e7;padding:1px;margin:1px;text-align: center;font-size:18px;float: left;}*/
        /*#chooseicon ul li:hover{border:1px solid #2c3e50;cursor:pointer;}*/

        /* 输入框添加蓝色边框效果，阴影边框效果  */
        /*.layui-input:focus,*/
        /*.layui-textarea:focus {*/
            /*border-color: rgba(91, 192, 222, 0.8) !important;*/
            /*-webkit-box-shadow: 0 0 5px rgba(91, 192, 222, .5);*/
            /*-moz-box-shadow: 0 0 5px rgba(91, 192, 222, .5);*/
            /*box-shadow: 0 0 5px rgba(91, 192, 222, .5);*/
        /*}*/

        /*.layui-input:hover,*/
        /*.layui-textarea:hover {*/
            /*border-color: rgba(91, 192, 222, 0.8) !important;*/
            /*-webkit-box-shadow: 0 0 5px rgba(91, 192, 222, .5);*/
            /*-moz-box-shadow: 0 0 5px rgba(91, 192, 222, .5);*/
            /*box-shadow: 0 0 5px rgba(91, 192, 222, .5);*/
        /*}*/

        /*!* 表单验证失败红色边框效果，阴影效果 *!*/
        /*.layui-form-danger, .layui-form-danger:focus, .layui-form-danger:hover{*/
            /*border-color: rgba(255,87,34, .8) !important;*/
            /*-webkit-box-shadow: 0 0 5px rgba(255,87,34, .5);*/
            /*-moz-box-shadow: 0 0 5px rgba(255,87,34, .5);*/
            /*box-shadow: 0 0 5px rgba(255,87,34, .5);*/
        /*}*/
    </style>
</head>
<style>
    .layui-table-view .layui-table[lay-size=lg] .layui-table-cell {height: 58px;line-height: 58px;}
    .wx-audio-content{padding:0px;border:0px;}
    .wx-audio-content .wx-audio-left .wx-audio-state{margin-bottom:15px;}
    .wx-audio-content .wx-audio-right .wx-audio-time{padding-top:0px;position: relative;bottom:6px;}
    .wx-audio-content .wx-audio-right .wx-audio-progrees{top:6px;}
</style>
<body>
<div class="layui-fluid">
    <div class="layui-card">
        <div class="layui-form layui-card-header layuiadmin-card-header-auto">
            <div class="layui-form-item">
                <div class="layui-inline">
                    <div class="layui-input-inline">
                        <input type="text" name="start" class="layui-input" onclick="wk.lay_date(this);" placeholder="创建开始日期">
                    </div>
                    <div class="layui-form-mid">
                        -
                    </div>
                    <div class="layui-input-inline">
                        <input type="text" name="end" class="layui-input" onclick="wk.lay_date(this);" placeholder="创建结束日期">
                    </div>
                </div>
                <div class="layui-inline">
                    <div class="layui-input-inline">
                        <input type="text" id="key" class="layui-input" name="key" placeholder="文章名称"/>
                    </div>
                </div>
                <div class="layui-inline">
                    <div class="layui-input-inline">
                        <button class="layui-btn" lay-submit="" lay-filter="LAY-search">立即搜索</button>
                        <button  class="layui-btn layui-btn-normal" id="empty"  lay-submit="" lay-filter="LAY-search">重置</button>
                    </div>
                </div>
            </div>
            <blockquote class="layui-elem-quote" style="margin-top: 10px;">
                <button class="layui-btn" id="test3" onclick="setCountdown()">倒计时<span id="test2" >60</span>秒</button>
                <button class="layui-btn" onclick="wk.msg('速度框架萨达成卡萨打可承受的擦上档次萨达初三党测试导出砂垫层坚')">提示信息</button>
                <button class="layui-btn" onclick="wk.layer_show('打印订单','<?php echo url('printOrder'); ?>')">打印订单</button>
                <button class="layui-btn layui-btn-normal" onclick="toastr.success('你有新消息了!','消息提示');wk.voice_msg();">成功消息</button>
                <button class="layui-btn layui-btn-warm" onclick="toastr.warning('你有新消息了!','消息提示');">警告消息</button>
                <button class="layui-btn layui-btn-danger" onclick="toastr.error('你有新消息了!','消息提示');">失败消息</button>
                <button class="layui-btn layui-btn-info" onclick="toastr.info('你有新消息了!','消息提示');">信息消息</button>
                <button class="layui-btn " onclick="wk.voice_msg()">声音消息</button>
            </blockquote>
            <div>
                <button class="layui-btn" data-type="add" onclick="wk.href('<?php echo url('add_article'); ?>')">
                    <i class="fa fa-plus"></i> 添加文章
                </button>
                <span class="layui-btn-dropdown" style="display:inline-block;">
                    <button class="layui-btn layui-btn-danger" data-toggle="dropdown"><i class="fa fa-wrench"></i> 批量操作 <i class="fa fa-caret-down"></i></button>
                    <ul class="layui-dropdown-menu layui-anim layui-anim-upbit">
                        <li><a href="javascript:;" class="layuiBtn" data-type="getCheckData"><i class="fa fa-trash-o"></i> 批量删除 </a></li>
                        <li><a  href="javascript:;" class="layuiBtn" data-type="usingAll" id="onAll"><i class="fa fa-check-circle"></i> 批量启用</a></li>
                        <li><a  href="javascript:;" class="layuiBtn" data-type="forbiddenAll" id="offAll"><i class="fa fa-ban"></i> 批量禁用</a></li>
                    </ul>
                </span>
            </div>
        </div>

        <div class="layui-card-body">
            <table id="LAY-table-manage" lay-filter="LAY-table-manage"></table>
            <!--图片模板-->
            <script type="text/html" id="imgTpl">
                <ul class="layui-cricle">
                    <li><img src="{{d.photo[0]}}" class="layui-table-img layui-circle"onerror="this.src='/static/admin/images/timg.jpg'" /></li>
                    {{# if(d.photo.length >= 1){ }}
                        {{# for(var i=1;i<d.photo.length;i++){  }}
                            <li style="display:none;"><img src="{{d.photo[i]}}" onerror="this.src='/static/admin/images/timg.jpg'" ></li>
                        {{# } }}
                    {{# } }}
                </ul>
            </script>
            <!--音频模板-->
            <script type="text/html" id="musicTpl">
                <div id="music_{{d.id}}" style=""></div>
            </script>
            <!--状态模板-->
            <script type="text/html" id="staBar">
                <input type="checkbox" value="{{d.id}}"  lay-skin="switch"  lay-text="ON|OFF" lay-filter="OnOff"{{d.status == 1 ? 'checked' : '' }}  >
            </script>
            <!--操作模板-->
            <script type="text/html" id="opeBar">
                <a onclick="wk.layer_show('编辑文章','<?php echo url('edit_article'); ?>?id={{d.id}}')" class="layui-btn layui-btn-xs" title="编辑"><i class="fa fa-pencil"></i></a>
                <a href="javascript:;" onclick="wk.confirm('{{d.id}}','<?php echo url('del_article'); ?>')" class="layui-btn layui-btn-danger layui-btn-xs" title="删除"><i class="fa fa-trash-o"></i></a>
            </script>
        </div>
    </div>
</div>
<div id="headCrop" style="display:none">
    <div class="tailoring-content-one">
        <label title="选择图片" for="chooseImg" class="layui-btn">
            <input type="file" accept="image/jpg,image/jpeg,image/png" name="file" id="chooseImg" class="hidden" onchange="selectImg(this)"><i class="fa fa-cloud-upload"></i>
            选择图片
        </label>
    </div>
    <div class="ibox-content">
        <div class="tailoring-content">
            <div class="tailoring-content-two">
                <div class="tailoring-box-parcel" style="text-align: center">
                    <img id="tailoringImg">
                    <span class="word" style="position:relative;top:50%;font-size:14px;color: #c2c2c2">仅支持JPG、JPEG、PNG格式的图片文件</span><br>
                    <!--<span class="size" style="position:relative;top:50%;font-size:16px">文件不能大于2MB</span>-->
                </div>
                <div class="preview-box-parcel">
                    <!--<p>图片预览：</p>-->
                    <div class="square previewImg"></div>
                    <div class="circular previewImg"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <span class="layui-btn cropper-reset-btn" style="float:left">复位</span>
        <span class="layui-btn zoomIn" style="float:left">放大</span>
        <span class="layui-btn zoomOut" style="float:left">缩小</span>
        <span class="layui-btn cropper-rotate-btn" style="float:left">旋转</span>
        <span class="layui-btn cropper-scaleX-btn" style="float:left">换向</span>
        <span class="layui-btn " id="sureCut"><i class="fa fa-save"></i> 保存</span>
        <span class="layui-btn layui-btn-primary" onclick="layer.closeAll()"><i class="fa fa-close"></i> 关闭</span>
    </div>
</div>
<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/admin/js/layui/layui.js"></script>
<script src="/static/admin/js/plugins/viewer/viewer.js"></script><!--viewer图片查看器-->
<script src="/static/admin/js/Icon.js"></script><!--fontAwesome图标库-->
<script src="/static/admin/js/wk.js"></script><!--封装方法-->
<script src="/static/admin/js/common.js"></script><!--全局监听ajax-->
<script src="/static/admin/js/plugins/cropper/cropper.min.js"></script><!--图片裁剪组件-->
<script src="/static/admin/js/plugins/zTree/jquery.ztree.core-3.5.js"></script><!--zTree组件-->
<script src="/static/admin/js/plugins/zTree/jquery.ztree.excheck-3.5.js"></script><!--zTree选择组件-->
<!--<script src="/static/admin/js/plugins/zTree/jquery.ztree.exedit-3.5.js"></script>--><!--zTree编辑组件-->
<script src="/static/admin/js/plugins/webuploader/webuploader.js"></script><!--webUploader上传组件-->
<script src="/static/admin/js/plugins/wangEditor-3.1.1/release/wangEditor.js" ></script><!--wangEditor编辑器-->
<script src="/static/admin/js/plugins/wx-audio/wx-audio.js" ></script><!--音频播放器组件-->
<script src="/static/admin/js/plugins/clipboard/clipboard.js" ></script><!--粘贴板组件-->
<script src="/static/admin/js/plugins/jqprint/jQuery.print.js" ></script><!--打印组件-->
<script src="/static/admin/js/plugins/toastr/toastr.js" ></script><!--toastr通知组件-->
<script src="/static/admin/js/plugins/ueditor/ueditor.config.js" ></script><!--百度富文本-->
<script src="/static/admin/js/plugins/ueditor/ueditor.all.js" ></script><!--百度富文本-->
<script>
    layui.config({
        base: '/src/' //静态资源所在路径
    }).extend({
        index: 'lib/index' //主入口模块
        , formSelects: 'formSelects-v4'
        , dropdown: 'dropdown'
    }).use(['index','dropdown','formSelects']),function(){
        var formSelects = layui.formSelects
    };
</script>
<script>
   toastr.options = {
        "newestOnTop": false, //新的toastr会显示在旧的toastr前面
        "preventDuplicates": false, //重复内容的提示框只出现一次
        "target": "body", // 默认为'body', 设置toastr的目标容器
        "closeButton": true,//关闭按钮
        "debug": false,//调试模式
        "progressBar": true,//进度条
        "closeOnHover": true,//hover关闭
        "positionClass": "toast-bottom-right",//toastr显示位置
        "showDuration": "400",//显示的时间
        "hideDuration": "100",//消失的时间
        "timeOut": "7000",//停留的时间
        "extendedTimeOut": "100",//控制时间
        "showEasing": "swing",//显示时的动画缓冲方式
        "hideEasing": "linear",//消失时的动画缓冲方式
        "showMethod": "layui-anim layui-anim-up",//显示时的动画方式
        "hideMethod": "layui-anim layui-anim-fadeout",//消失时的动画方式
    }
    //view初始化查看图片
    $(function(){
        $('.layui-append-img,.layui-circle').viewer({
            url: 'data-original',
        });
    })

    //关闭自动填充
    $('input').attr('autocomplete',"off");

    // //图片灯箱
    // function imgDisplay(obj) {
    //     var src = $(obj).attr("src");
    //     var imgHtml = '<div class="showP"><img src=' + src + ' style="margin-top: 120px;height:50%;margin-bottom:120px;"  /><p class="closeP"  onclick="closePicture(this)"><span class="cha">×</span></p></div>'
    //     $('body').append(imgHtml);
    // }
    //
    // //关闭图片灯箱
    // function closePicture(obj) {
    //     $(obj).parent("div").remove();
    // }

    //tips框
    $('#offAll').on('mouseover', function(){
        var that = this;
        layer.tips('<span style="color:#686B6D;"><i class="fa fa-info-circle"></i> 若未勾选默认禁用全部</span>', that,{tips: [2, '#F2F2F2'],time: 10000});
    });
    //tips框
    $('#onAll').on('mouseover', function(){
        var that = this;
        layer.tips('<span style="color:#686B6D;"><i class="fa fa-info-circle"></i> 若未勾选默认启用全部</span>', that,{tips: [2, '#F2F2F2',''],time: 10000});
    });
    //tips框
    $('#excel').on('mouseover', function(){
        var that = this;
        layer.tips('<span style="color:#686B6D;"><i class="fa fa-info-circle"></i> 导出筛选完成数据</span>', that,{tips: [2, '#F2F2F2',''],time: 10000});
    });
    //关闭tips框
    $('#offAll,#onAll,#export,#excel').on('mouseout', function(){
        layer.closeAll('tips');
    });

    //layui公共操作
    layui.use(['form','table'], function() {
        var form = layui.form
            ,table = layui.table
        //重置搜索框
        $('#empty').on('click', function () {
            $('.layui-input').val('');
            // $(".search").trigger("chosen:updated");
            $('select').each(function (i, j) {
                $(j).find("option:selected").attr("selected", false);
                form.render('select')
            })
        });
        //表格排序
        table.on('sort(LAY-table-manage)', function(obj){
            table.reload('LAY-table', {
                initSort: obj //记录初始排序，如果不设的话，将无法标记表头的排序状态
                ,where: { //请求参数
                    field: obj.field //排序字段
                    ,order: obj.type //排序方式
                }
            });
        });
        //监听搜索
        form.on('submit(LAY-search)', function (data) {
            //执行重载
            table.reload('LAY-table', {
                page: {
                    curr: 1 //重新从第 1 页开始
                }
                ,where: data.field
            });
        });
        //地区三级联动
        form.on('select(province)', function(data){
            getArea("province",data.value);
        });
        form.on('select(city)', function(data){
            getArea("city",data.value);
        });
        function getArea(type,id){
            $.ajax({
                url:"<?php echo url('admin/Base/place'); ?>",
                dataType:"json",
                data:'id='+id,
                type:'post',
                success:function(res){
                    var opt = null;
                    $.each(res.msg,function(key,vo){
                        opt = opt+"<option value="+vo.district_id+">"+vo.district+"</option>";
                    })
                    if(type=="province"){
                        $("#city").empty();
                        $("#city").append('<option value="">---- 请选择市 ----</option>');
                        $("#district").empty();
                        $("#district").append('<option value="">---- 请选择区 ----</option>');
                        $("#city").append(opt);
                    }else if(type == "city"){
                        $("#district").empty();
                        $("#district").append('<option value="">---- 请选择区 ----</option>');
                        $("#district").append(opt);
                    }
                    form.render('select');
                }
            })
        }
    });
</script>
<script>
    var music = function(){
        if($('#music').length == 0){
            $('body').append('<div id="music"></div>');
        }
        var wxAudio = wk.lay_audio({elem:'#music',src:'/static/admin/images/default.mp3'});
        $('#music').hide();
        wxAudio.audioPlay();
    }

    layui.use(['index', 'table','util'], function () {
        var $ = layui.$
            , form = layui.form
            , table = layui.table
        table.render({
            elem: '#LAY-table-manage'
            , url: '<?php echo url("Article/index"); ?>'
            ,response: {
                statusCode: 220 //成功的状态码，默认：0
            }
            , page: true
            , even: false //开启隔行背景
            , size: 'lg' //sm小尺寸的表格 lg大尺寸
            // ,width:100
            , cellMinWidth: 150
            , height: "full-220"
            , limits: [10, 20, 30, 40, 50]
            , limit: "<?php echo config('pages'); ?>"
            , loading: true
            , id: 'LAY-table'
            , cols: [[
                {type: 'checkbox', fixed: 'left',}
                , {field: 'id', width: 60, title: 'ID', sort: true, align: 'center'}
                , {field: 'title', width: '', title: '标题', align: 'center'}
                , {field: 'name', width: '', title: '所属分类', align: 'center'}
                , {field: 'picture', width: 80, title: '封面', align: 'center',templet: '#imgTpl'}
                , {field: 'views', width: '', title: '浏览量',sort: true, align: 'center'}
                , {field: 'music', width: 290, title: '音频', align: 'center',templet:'#musicTpl'}
                , {field: 'is_tui', width: 100, title: '是否推荐', align: 'center',templet: "<div>{{ d.is_tui==1?'是':'否'}}</div>"}
                , {field: 'create_time', width: 180, title: '创建时间',sort: true, align: 'center',templet:"<div>{{layui.util.toDateString(d.create_time,'yyyy年MM月dd日')}}</div>"}
                , {field: 'update_time', width: 180, title: '更新时间',sort: true, align: 'center'}
                , {field: 'status',fixed: 'right', width: 100, title: '状态',sort: true, align: 'center', templet: '#staBar'}
                , {fixed: 'right', width: 120, title: '操作', align: 'center', toolbar: '#opeBar'}
            ]]
            ,done: function (res, curr, count) {
                $('.layui-cricle').viewer({
                    url: 'data-original',
                });
                $.each(res.data,function(index,item) {
                    wk.lay_audio({elem:'#music_'+item['id'],src:item['music'],width:'250px'});
                });
            }
        });
        //监听状态开关操作
        form.on('switch(OnOff)', function (obj) {
            var num = '';
            obj.elem.checked == true? num = 1: num = 2;
            //用户状态
            wk.status(this.value,num, '<?php echo url("user_state"); ?>',obj);
        });
        //事件
        var active = {
            getCheckData: function(){
                //批量删除
                wk.batchDel(getIds(),"<?php echo url('batchDelUser'); ?>");
            }
            ,forbiddenAll: function(){
                //批量禁用
                wk.batchForbidden(getIds(),2,"<?php echo url('forbiddenAdmin'); ?>");
            }
            ,usingAll: function(){
                //批量启用
                wk.usingAll(getIds(),1,"<?php echo url('usingAdmin'); ?>");
            }
            ,excelAll: function(){
                //导出Excel
                wk.excelAll(getIds(),$("form").serialize(),"<?php echo url('excelAdmin'); ?>");
            }
        };

        $('.layuiBtn').on('click', function () {
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });
        var getIds = function () {
            var ids = [];
            var checkStatus = table.checkStatus('LAY-table')
                ,data = checkStatus.data;
            $.each(data,function(index,item){
                ids.push(item['id'])
            });
            return ids;
        }

        //倒计时
        // var thisTimer, setCountdown = function(){
        //     lay('#test3').addClass('layui-disabled').attr('disabled').text('完了');
        //     var endTime = new Date(new Date().getFullYear(),new Date().getMonth(),new Date().getDate(),new Date().getHours(),new Date().getMinutes(),new Date().getSeconds() + 60).getTime() //结束日期
        //         ,serverTime = new Date().getTime(); //假设为当前服务器时间，这里采用的是本地时间，实际使用一般是取服务端的
        //     clearTimeout(thisTimer);
        //     util.countdown(endTime, serverTime, function(date, serverTime, timer){
        //         var str = date[3] + '秒';
        //         if(date[3] == 0){
        //             lay('#test3').removeClass('layui-disabled').removeAttr('disabled').text('完了');
        //         }else{
        //             lay('#test2').html(str);
        //         }
        //         thisTimer = timer;
        //     });
        // };
        // var date = new Date();
        // setCountdown(date.getFullYear(),date.getMonth(),date.getDate(),date.getHours(),date.getMinutes(),date.getSeconds() + 60);
    });
    var thisTimer, setCountdown = function(){
        $('#test3').addClass('layui-disabled').attr('disabled','disabled');
        var endTime = new Date(new Date().getFullYear(),new Date().getMonth(),new Date().getDate(),new Date().getHours(),new Date().getMinutes(),new Date().getSeconds() + 60).getTime() //结束日期
            ,serverTime = new Date().getTime(); //假设为当前服务器时间，这里采用的是本地时间，实际使用一般是取服务端的
        clearTimeout(thisTimer);
        layui.util.countdown(endTime, serverTime, function(date, serverTime, timer){
            var str = date[3];
            if(date[3] == 0){
                $('#test3').removeClass('layui-disabled').removeAttr('disabled');
                $('#test2').html(60);
            }else{
                $('#test2').html(str);
            }
            thisTimer = timer;
        });
    };
</script>
</body>
</html>