<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"D:\www\12_03_ddsc\public/../application/admin\view\login\index.html";i:1544500670;s:59:"D:\www\12_03_ddsc\application\admin\view\public\header.html";i:1544085067;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<title><?php echo $sys['name']; ?></title>

<meta name="description" content="overview &amp; stats" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<link rel="shortcut icon" href="">

<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="/static/admin/assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="/static/admin/assets/font-awesome/4.7.0/css/font-awesome.min.css" />

<!-- page specific plugin styles -->
<link rel="stylesheet" href="/static/admin/assets/css/jquery-ui.custom.min.css" />
<link rel="stylesheet" href="/static/admin/assets/css/jquery.gritter.min.css" />
<link rel="stylesheet" href="/static/admin/assets/css/bootstrap-datepicker3.min.css" />
<link rel="stylesheet" href="/static/admin/assets/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="/static/admin/assets/css/daterangepicker.min.css" />
<link rel="stylesheet" href="/static/admin/assets/css/bootstrap-datetimepicker.min.css" />
<link rel="stylesheet" href="/static/admin/assets/css/colorbox.min.css" />

<!-- text fonts -->
<link rel="stylesheet" href="/static/admin/assets/css/fonts.googleapis.com.css" />

<!-- ace styles -->
<link rel="stylesheet" href="/static/admin/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

<!--[if lte IE 9]>
<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
<![endif]-->
<link rel="stylesheet" href="/static/admin/assets/css/ace-skins.min.css" />
<link rel="stylesheet" href="/static/admin/assets/css/ace-rtl.min.css" />

<!--[if lte IE 9]>
<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
<![endif]-->
<link rel="stylesheet" href="/static/admin/css/style.min.css">
<link rel="stylesheet" href="/static/admin/css/input.css">

<!-- inline styles related to this page -->
 <!-- <link rel="stylesheet" href="/static/admin/layui/css/layui.css"  media="all"> -->
<!-- ace settings handler -->
<script src="/static/admin/assets/js/ace-extra.min.js"></script>

<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

<!--[if lte IE 8]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<!-- basic scripts -->

<!--[if !IE]> -->
<script src="/static/admin/assets/js/jquery-2.1.4.min.js"></script>
<script src="/static/admin/js/input.js"></script>
<script src="/static/admin/js/zh.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
  if('ontouchstart' in document.documentElement) document.write("<script src='/static/admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/static/admin/assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="/static/admin/assets/js/jquery-ui.custom.min.js"></script>
<script src="/static/admin/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="/static/admin/assets/js/bootbox.js"></script>
<script src="/static/admin/assets/js/jquery.easypiechart.min.js"></script>
<script src="/static/admin/assets/js/jquery.gritter.min.js"></script>
<script src="/static/admin/assets/js/jquery.sparkline.index.min.js"></script>
<script src="/static/admin/assets/js/jquery.inputlimiter.min.js"></script>
<script src="/static/admin/assets/js/jquery.colorbox.min.js"></script>
<!--日期选择-->
<script src="/static/admin/assets/js/bootstrap-datepicker.js"></script>
<script src="/static/admin/assets/js/locales/bootstrap-datepicker.zh-CN.js"></script>
<script src="/static/admin/assets/js/bootstrap-timepicker.min.js"></script>
<script src="/static/admin/assets/js/moment.min.js"></script>
<script src="/static/admin/assets/js/daterangepicker.min.js"></script>
<script src="/static/admin/assets/js/bootstrap-datetimepicker.min.js"></script>

<!--表单验证-->
<script src="/static/admin/assets/js/wizard.min.js"></script>
<script src="/static/admin/assets/js/jquery.validate.min.js"></script>
<!--<script src="assets/js/jquery.flot.min.js"></script>-->
<!--<script src="assets/js/jquery.flot.pie.min.js"></script>-->
<!--<script src="assets/js/jquery.flot.resize.min.js"></script>-->
<!--增加-->
<script src="/static/admin/assets/layer/layer.js"></script>
<script src="/static/admin/assets/js/jquery.form.js"></script>
<!-- ace scripts -->
<script src="/static/admin/assets/js/ace-elements.min.js"></script>
<script src="/static/admin/assets/js/ace.min.js"></script>
<script src="/static/admin/js/main.js"></script>
<!--表单验证-->
<script src="/static/admin/js/Validform_v5.3.2_min.js"></script>
<script src="/static/admin/assets/js/jquery.form.js"></script>
  <script src="/static/admin/assets/js/jquery.maskedinput.min.js"></script>
<style>
    /*==========以下部分是Validform必须的===========*/
    .Validform_checktip{
      margin-left:8px;
      line-height:20px;
      height:20px;
      overflow:hidden;
      color:#999;
      font-size:12px;
    }
    .Validform_right{
      color:#71b83d;
      padding-left:20px;
      background:url(/static/admin/img/right.png) no-repeat left center;
    }
    .Validform_wrong{
      color:red;
      padding-left:20px;
      white-space:nowrap;
      background:url(/static/admin/img/error.png) no-repeat left center;
    }
    .Validform_loading{
      padding-left:20px;
      background:url(/static/admin/img/onLoad.gif) no-repeat left center;
    }
    .Validform_error{
      background-color:#ffe7e7;
    }
    #Validform_msg{color:#7d8289; font: 12px/1.5 tahoma, arial, \5b8b\4f53, sans-serif; width:280px; -webkit-box-shadow:2px 2px 3px #aaa; -moz-box-shadow:2px 2px 3px #aaa; background:#fff; position:absolute; top:0px; right:50px; z-index:99999; display:none;filter: progid:DXImageTransform.Microsoft.Shadow(Strength=3, Direction=135, Color='#999999');}
    #Validform_msg .iframe{position:absolute; left:0px; top:-1px; z-index:-1;}
    #Validform_msg .Validform_title{line-height:25px; height:25px; text-align:left; font-weight:bold; padding:0 8px; color:#fff; position:relative; background-color:#000;}
    #Validform_msg a.Validform_close:link,#Validform_msg a.Validform_close:visited{line-height:22px; position:absolute; right:8px; top:0px; color:#fff; text-decoration:none;}
    #Validform_msg a.Validform_close:hover{color:#cc0;}
    #Validform_msg .Validform_info{padding:8px;border:1px solid #000; border-top:none; text-align:left;}
  </style>
</head>

<body class="login-layout blur-login">
<div class="main-container">
  <div class="main-content">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <div class="login-container" style="margin-top: 140px">
          <div class="center">
            <h1>
              <i class="ace-icon fa fa-leaf green"></i>
              <span class="red"><?php echo $sys['name']; ?></span>
              <span class="white" id="id-text2">后台登录</span>
            </h1>
            <h4 class="blue" id="id-company-text">&copy; 朵朵科技</h4>
          </div>

          <div class="space-6"></div>

          <div class="position-relative">
            <div id="login-box" class="login-box visible widget-box no-border">
              <div class="widget-body">
                <div class="widget-main">
                  <h4 class="header blue lighter bigger">
                    <i class="ace-icon fa fa-coffee green"></i>
                    请填写您的用户信息
                  </h4>

                  <div class="space-6"></div>

                  <form id="logoForm" method="post" action="/admin/login/check">
                    <fieldset>
                      <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input id="username" type="text" class="form-control" name="username" placeholder="请输入您的用户名" datatype="s5-16" errormsg="用户名至少5个字符,最多16个字符！"/>
															<i class="ace-icon fa fa-user"></i>
														</span>
                      </label>

                      <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input id="password" type="password" class="form-control" name="password" placeholder="请输入您的密码" datatype="s5-12" errormsg="密码至少5个字符,最多12个字符！"/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
                      </label>

                      <label class="block clearfix">
                          <span class="block input-icon input-icon-right">
                              <input type="text" name="verify" id="verify" placeholder="验证码"  class="form-control"/>
                              <i class="ace-icon fa fa-barcode blue"></i>
                          </span>
                    </label>

                     
                        
                        <!-- 验证码可根据需要调整大小 -->
                        <div class="form-group">
                            <?php echo captcha_img(); ?>
                        </div>

                      <div class="space"></div>

                      <div class="clearfix">
                        <!-- <label class="inline">
                          <input type="checkbox" class="ace" />
                          <span class="lbl"> 记住密码</span>
                        </label> -->

                        <button id="subBtn" type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                          <i class="ace-icon fa fa-key"></i>
                          <span class="bigger-110">登录</span>
                        </button>
                      </div>

                      <div class="space-4"></div>
                    </fieldset>
                  </form>

                </div>

                <div class="toolbar clearfix">
                  <!-- <div>
                    <a href="#" data-target="#forgot-box" class="forgot-password-link">
                      <i class="ace-icon fa fa-arrow-left"></i> 密码找回
                    </a>
                  </div>
 -->
                  <!--<div>
                    <a href="#" data-target="#signup-box" class="user-signup-link">
                      注册帐号
                      <i class="ace-icon fa fa-arrow-right"></i>
                    </a>
                  </div>-->
                </div>
              </div>
            </div>

            <div id="forgot-box" class="forgot-box widget-box no-border">
              <div class="widget-body">
                <div class="widget-main">
                  <h4 class="header red lighter bigger">
                    <i class="ace-icon fa fa-key"></i>
                    找回密码
                  </h4>

                  <div class="space-6"></div>
                  <p>
                    输入您的电子邮件并验证
                  </p>

                  <form>
                    <fieldset>
                      <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="邮箱" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
                      </label>

                      <div class="clearfix">
                        <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                          <i class="ace-icon fa fa-lightbulb-o"></i>
                          <span class="bigger-110">发送!</span>
                        </button>
                      </div>
                    </fieldset>
                  </form>
                </div>
                <!-- /.widget-main -->

                <div class="toolbar center">
                  <a href="#" data-target="#login-box" class="back-to-login-link">
                    返回登录
                    <i class="ace-icon fa fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>

           
          </div>

          <div class="navbar-fixed-top align-right">
            <br /> &nbsp;
            <a id="btn-login-dark" href="#">黑暗</a>
            &nbsp;
            <span class="blue">/</span> &nbsp;
            <a id="btn-login-blur" href="#">模糊</a>
            &nbsp;
            <span class="blue">/</span> &nbsp;
            <a id="btn-login-light" href="#">浅色</a>
            &nbsp; &nbsp; &nbsp;
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">

$(function(){
	var img = $("#verify_img");
	var src = img.attr("src")+"?";
	img.click(function(){
		img.attr("src",src+Math.random());
	});
});

  jQuery(function($) {
    $(document).on('click', '.toolbar a[data-target]', function(e) {
      e.preventDefault();
      var target = $(this).data('target');
      $('.widget-box.visible').removeClass('visible'); //hide others
      $(target).addClass('visible'); //show target
    });
  });

  jQuery(function($) {
    $('#btn-login-dark').on('click', function(e) {
      $('body').attr('class', 'login-layout');
      $('#id-text2').attr('class', 'white');
      $('#id-company-text').attr('class', 'blue');

      e.preventDefault();
    });
    $('#btn-login-light').on('click', function(e) {
      $('body').attr('class', 'login-layout light-login');
      $('#id-text2').attr('class', 'grey');
      $('#id-company-text').attr('class', 'blue');

      e.preventDefault();
    });
    $('#btn-login-blur').on('click', function(e) {
      $('body').attr('class', 'login-layout blur-login');
      $('#id-text2').attr('class', 'white');
      $('#id-company-text').attr('class', 'light-blue');

      e.preventDefault();
    });

   /*  var datas = $("#logoForm").Validform({
      tiptype: 3
    }); */
   $("#logoForm").ajaxForm({
	   success:function(res){
		   if(res.code==1){
			   
				   location.href=res.url;
			 
			   
		   }else{
			   layer.alert(res.msg,{icon:2},function(){
				   location.href=res.url;
			   })
		   }
	   } 
   });
   // $("#subBtn").on('click',function () {
    //   console.log(datas.getStatus())
    //   // $("#logoForm").ajaxSubmit({
    //   //   type: "get",
    //   //   beforeSubmit: function(){
    //   //
    //   //   },
    //   //   success: function(res) {
    //   //     console.log(res);
    //   //   }
    //   // });
    //   //
    //   // console.log(datas);
    //
    //
    //
    // })

  });

</script>
</body>

</html>