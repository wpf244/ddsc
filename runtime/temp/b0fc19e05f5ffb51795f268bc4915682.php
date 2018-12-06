<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:67:"D:\www\12_03_ddsc\public/../application/admin\view\index\index.html";i:1544077238;s:59:"D:\www\12_03_ddsc\application\admin\view\public\header.html";i:1536572465;s:56:"D:\www\12_03_ddsc\application\admin\view\public\nav.html";i:1534735680;s:57:"D:\www\12_03_ddsc\application\admin\view\public\left.html";i:1543885361;s:56:"D:\www\12_03_ddsc\application\admin\view\public\set.html";i:1531125003;s:59:"D:\www\12_03_ddsc\application\admin\view\public\footer.html";i:1535074403;}*/ ?>
<!DOCTYPE html>
<html>
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

<body class="no-skin">
  <!--头部-->
  <div id="navbar" class="navbar navbar-default          ace-save-state">
  <div class="navbar-container ace-save-state" id="navbar-container">
    <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
      <span class="sr-only">Toggle sidebar</span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>
    </button>

    <div class="navbar-header pull-left">
      <a href="<?php echo url('Index/index'); ?>" class="navbar-brand">
        <small>
          <i class="fa fa-leaf"></i>
          <?php echo $sys['name']; ?>CMS
        </small>
      </a>
    </div>

    <div class="navbar-buttons navbar-header pull-right" role="navigation">
      <ul class="nav ace-nav">
        
        <li class="light-blue dropdown-modal">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">
            <img class="nav-user-photo" src="/static/admin/assets/images/avatars/user.png" alt="Jason's Photo" />
            <span class="user-info">
									<small>欢迎登录</small>
									Admin
								</span>

            <i class="ace-icon fa fa-caret-down"></i>
          </a>

          <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
            <li>
						<a href="<?php echo url('Login/modify'); ?>">
							<i class="ace-icon fa fa-user"></i> 修改密码
						</a>
					</li>
            <li>
              <a id="power-off" href="javascript:;">
                <i class="ace-icon fa fa-power-off"></i>
                退出
              </a>
            </li>
          <script> 
             //退出系统
  $("#power-off").on(ace.click_event,function(){
    layer.confirm('是否退出系统?',{icon: 3},function (index) {
      location.href = "<?php echo url('Login/logout'); ?>";
      layer.close(index);
    });
  })
  </script>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
  <div class="main-container ace-save-state" id="main-container">
    <!--菜单-->
    <script type="text/javascript">
      try { ace.settings.loadState('main-container') } catch (e) { }
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
  <script type="text/javascript">
    try{ace.settings.loadState('sidebar')}catch(e){}
  </script>

  <div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
      <a  class="btn btn-success" href="<?php echo url('Index/index/index'); ?>" target="_blank" title="前台首页">
        <i class="ace-icon fa fa-globe"></i>
      </a>

      <a class="btn btn-info" href="javascript:;" data-rel="tooltip" data-placement="bottom" title="添加文章">
        <i class="ace-icon fa fa-pencil"></i>
      </a>

      <a class="btn btn-warning" href="<?php echo url('Sys/seo'); ?>" data-rel="tooltip" data-placement="bottom" title="网站优化">
        <i class="ace-icon fa fa-wrench"></i>
      </a>

      <button class="btn btn-danger tooltip-error" id="cache" data-rel="tooltip" data-placement="bottom" title="清除缓存">
        <i class="ace-icon fa fa-refresh"></i>
      </button>
    </div>
<script>
$(function(){
	$("#cache").on(ace.click_event,function(){
	    layer.confirm('确认要清除缓存?',{icon: 3},function (index) {
	    	$.post("<?php echo url('Index/clearruntime'); ?>",{user:1},function(data){
	    		layer.alert("缓存清理成功");
	    		});
	      layer.close(index);
	    });
	  })
	
	});
</script>
    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
      <span class="btn btn-success"></span>

      <span class="btn btn-info"></span>

      <span class="btn btn-warning"></span>

      <span class="btn btn-danger"></span>
    </div>
  </div><!-- /.sidebar-shortcuts -->

  <ul class="nav nav-list">
    <?php if(CONTROLLER_NAME == 'Index'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
      <a href="<?php echo url('Index/index'); ?>">
        <i class="menu-icon fa fa-tachometer"></i>
        <span class="menu-text"> 控制台 </span>
      </a>

      <b class="arrow"></b>
    </li>

    <?php if(CONTROLLER_NAME == 'Sys'): ?><li class="open"><?php else: ?><li class=""><?php endif; ?>
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-desktop"></i>
        <span class="menu-text"> 网站设置 </span>

        <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>
      <ul class="submenu">
        <?php if(ACTION_NAME == 'seting'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
          <a href="<?php echo url('Sys/seting'); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            基本信息
          </a>

          <b class="arrow"></b>
        </li>

        <?php if(ACTION_NAME == 'seo'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
          <a href="<?php echo url('Sys/seo'); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            网站优化
          </a>

          <b class="arrow"></b>
        </li>
      </ul>
    </li>

    <?php if(CONTROLLER_NAME == 'Lb'): ?><li class="open"><?php else: ?><li class=""><?php endif; ?>
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-picture-o"></i>
        <span class="menu-text"> 广告图管理 </span>
        <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>
      <ul class="submenu">
       <?php if(ACTION_NAME == 'lister'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
          <a href="<?php echo url('Lb/lister'); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            图片列表
          </a>

          <b class="arrow"></b>
        </li>

        <?php if(ACTION_NAME == 'place'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
          <a href="<?php echo url('Lb/place'); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            广告位
          </a>

          <b class="arrow"></b>
        </li>
      </ul>
    </li>
    
    <?php if(CONTROLLER_NAME == 'Shops'): ?><li class="open"><?php else: ?><li class=""><?php endif; ?>
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-balance-scale"></i>
        <span class="menu-text"> 店铺管理 </span>
        <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>
      <ul class="submenu">
       <?php if(ACTION_NAME == 'lister'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
          <a href="<?php echo url('Shops/lister'); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            店铺列表
          </a>

          <b class="arrow"></b>
        </li>
        
         <?php if(ACTION_NAME == 'add'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
          <a href="<?php echo url('Shops/add'); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            添加店铺
          </a>

          <b class="arrow"></b>
        </li>

      </ul>
    </li>

       <?php if(CONTROLLER_NAME == 'Goods'): ?><li class="open"><?php else: ?><li class=""><?php endif; ?>
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-paper-plane"></i>
        <span class="menu-text"> 商品管理 </span>

        <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>

      <ul class="submenu">
        <?php if(ACTION_NAME == 'lister'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
          <a href="<?php echo url('Goods/lister'); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            商品列表
          </a>

          <b class="arrow"></b>
        </li>
     <?php if(ACTION_NAME == 'type'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
          <a href="<?php echo url('Goods/goods_type'); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            商品分类
          </a>

          <b class="arrow"></b>
        </li>
     
      </ul>

    </li>
    
     
  
  

  
    
  </ul><!-- /.nav-list -->

  <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
  </div>
</div>
    <div class="main-content">
      <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
          <ul class="breadcrumb">
            <li>网站名称：<span><?php echo $sys['name']; ?></span></li>
            <li>最后登录时间：<span><?php echo $admin['curtime']; ?></span></li>
            <li>最后登录IP：<span><?php echo $admin['ip']; ?></span></li>
          </ul>

        </div>

        <div class="page-content">
           <div class="ace-settings-container" id="ace-settings-container">
  <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
    <i class="ace-icon fa fa-cog bigger-130"></i>
  </div>

  <div class="ace-settings-box clearfix" id="ace-settings-box">
    <div class="pull-left width-50">
      <div class="ace-settings-item">
        <div class="pull-left">
          <select id="skin-colorpicker" class="hide">
            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
          </select>
        </div>
        <span>&nbsp; 换肤</span>
      </div>

      <div class="ace-settings-item">
        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
        <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
      </div>

      <div class="ace-settings-item">
        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="on" />
        <label class="lbl" for="ace-settings-sidebar"> 固定侧边栏</label>
      </div>

      <div class="ace-settings-item">
        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
        <label class="lbl" for="ace-settings-breadcrumbs"> 固定面包屑导航</label>
      </div>

      <div class="ace-settings-item">
        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
        <label class="lbl" for="ace-settings-rtl"> 侧边栏从左到右 (rtl)</label>
      </div>

      <div class="ace-settings-item">
        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
        <label class="lbl" for="ace-settings-add-container">
          内部
          <b>居中</b>
        </label>
      </div>
    </div><!-- /.pull-left -->

    <div class="pull-left width-50">
      <div class="ace-settings-item">
        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
        <label class="lbl" for="ace-settings-hover"> 鼠标经过展开子菜单</label>
      </div>

      <div class="ace-settings-item">
        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
        <label class="lbl" for="ace-settings-compact"> 紧凑型侧边栏</label>
      </div>

      <div class="ace-settings-item">
        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
        <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
      </div>
    </div><!-- /.pull-left -->
  </div><!-- /.ace-settings-box -->
</div><!-- /.ace-settings-container -->


          <div class="row">
            <div class="col-xs-12">
              <!-- PAGE CONTENT BEGINS -->
              <div class="alert alert-block alert-success">
                <button type="button" class="close" data-dismiss="alert">
                  <i class="ace-icon fa fa-times"></i>
                </button>

                <i class="ace-icon fa fa-check green"></i>

                欢迎使用
                <strong class="green">
                  <a href="http://www.dd371.com" target="_blank">朵朵科技</a>后台管理系统
                  <small>(v1.1)</small>
                </strong>,
                轻量级好用的后台管理系统
              </div>

              <div class="row">

                <div class="col-xs-12">
                  <div class="infobox infobox-green">
                    <div class="infobox-icon">
                      <i class="ace-icon fa fa-cny"></i>
                    </div>
                    <div class="infobox-data">
                      <span class="infobox-data-number">32</span>
                      <div class="infobox-content">今日订单总金额（元）</div>
                    </div>
                  </div>

                  <div class="infobox infobox-blue">
                    <div class="infobox-icon">
                      <i class="ace-icon fa fa-twitter"></i>
                    </div>
                    <div class="infobox-data">
                      <span class="infobox-data-number">11</span>
                      <div class="infobox-content">新增会员（个）</div>
                    </div> 
                  </div>

                  <div class="infobox infobox-pink">
                    <div class="infobox-icon">
                      <i class="ace-icon fa fa-shopping-cart"></i>
                    </div>
                    <div class="infobox-data">
                      <span class="infobox-data-number">8</span>
                      <div class="infobox-content">商品发布(个)</div>
                    </div>
                  </div>

                  <div class="infobox infobox-red">
                    <div class="infobox-icon">
                      <i class="ace-icon fa fa-flask"></i>
                    </div>
                    <div class="infobox-data">
                      <span class="infobox-data-number">7</span>
                      <div class="infobox-content">订单总数(笔)</div>
                    </div>
                  </div>

                  <div class="infobox infobox-orange2">
                    <div class="infobox-icon">
                      <i class="ace-icon fa fa-flask"></i>
                    </div>
                    <div class="infobox-data">
                      <span class="infobox-data-number">6,251</span>
                      <div class="infobox-content">本月销量(笔)</div>
                    </div>

                  </div>

                  <div class="infobox infobox-blue2">
                    <div class="infobox-icon">
                      <i class="ace-icon fa fa-flask"></i>
                    </div>

                    <div class="infobox-data">
                      <span class="infobox-text">0</span>
                      <div class="infobox-content">
                        <span class="bigger-110">已完成交易(笔)</span>

                      </div>
                    </div>
                  </div>
                
                </div>

                <div class="col-sm-8">
                  <div class="widget-box widget-color-dark transparent">
                    <div class="widget-header widget-header-flat">
                      <h4 class="widget-title smaller">
                        技术支持
                      </h4>
                    </div>

                    <div class="widget-body">
                      <div class="widget-main">
                        <div class="alert alert-info">
                          "创新"是朵朵的生存之本，"诚信"是朵朵的一贯宗旨。优质服务、塑造互联网领域的品牌是我们的 前进目标。在朵朵科技
                          ，我们坚信，只有提供一流的服务，才能赢得用户长久的信任，热诚希望与您的合作能够成功!
                          <br>
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <blockquote class="pull-right">
                              <p class="lighter line-height-125">优质服务、塑造互联网领域的品牌是我们的 前进目标。</p>

                              <small>
                                朵朵科技</small>
                            </blockquote>
                          </div>
                        </div>

                        <hr>
                        <address>
                          <strong>联系我们</strong>

                          <br>
                          郑州市金水区花园路国基路
                          <br>
                          恒华大厦806室
                          <br>
                          <i class="ace-icon fa fa-phone"></i>
                          <a href="tel:0371-56776661">(0371) 56776661</a>
                        </address>

                        <address>
                          <strong>E-mail</strong>

                          <br>
                          <a href="mailto:279585301@qq.com">279585301@qq.com</a>
                        </address>
                      </div>
                    </div>
                  </div>
                </div><!-- /.col -->

                
                <div class="col-xs-12 col-sm-6 widget-container-col ui-sortable" id="widget-container-col-2">
                  <div class="widget-box widget-color-blue" id="widget-box-2">
                    <div class="widget-header">
                      <h5 class="widget-title bigger lighter">
                        <i class="ace-icon fa fa-table"></i>
                        服务器信息
                      </h5>
                     
                    </div>
                    <div class="widget-body">
                      <div class="widget-main no-padding">
                        <table class="table table-striped table-bordered table-hover">
                         
                          <tbody>
                            <tr>
                              <td class="">服务器操作系统</td>
                              <td>
                                <a href="javascipr:;"><?php echo $system_config['os']; ?></a>
                              </td>
                           
                            </tr>
                            <tr>
                              <td class="">服务器域名</td>
                              <td>
                                <a href="javascipr:;"><?php echo $system_config['dns']; ?>:<?php echo $system_config['port']; ?></a>
                              </td>
                            
                            </tr>
                         
                            <tr>
                              <td class="">服务器环境</td>
                              <td>
                                <a href="javascipr:;"><?php echo $system_config['server_software']; ?></a>
                              </td>
                            
                            </tr>
                            <tr>
                              <td class="">PHP版本</td>
                              <td>
                                <a href="javascipr:;"><?php echo $system_config['php_version']; ?></a>
                              </td>
                            
                            </tr>
                            <tr>
                              <td class="">文件上传限制</td>
                              <td>
                                <a href="javascipr:;"><?php echo $system_config['upload_max_filesize']; ?></a>
                              </td>
                            
                            </tr>
                            <tr>
                              <td class="">curl支持</td>
                              <td>
                                <a href="javascipr:;"><?php if($system_config['curl'] == true): ?>支持<?php else: ?><span style="color:red;">不支持，微信和支付宝等功能将无法正常使用</span><?php endif; ?></a>
                              </td>
                            
                            </tr>

                            <tr>
                              <td class="">openssl支持</td>
                              <td>
                                <a href="javascipr:;"><?php if($system_config['openssl'] == true): ?>已开启<?php else: ?><span style="color:red;">未开启，不支持https</span><?php endif; ?></a>
                              </td>
                            
                            </tr>
                            <tr>
                              <td class="">uploads目录权限</td>
                              <td>
                                <a href="javascipr:;"><?php if($system_config['upload_dir_jurisdiction'] == 1): ?>可读可写<?php else: ?><span style="color:red;">不可读不可写，会造成图片无法上传和访问</span><?php endif; ?></a>
                              </td>
                            
                            </tr>
                            <tr>
                              <td class="">runtime目录权限</td>
                              <td>
                                <a href="javascipr:;"><?php if($system_config['runtime_dir_jurisdiction'] == 1): ?>可读可写<?php else: ?><span style="color:red;">不可读不可写，会造成编译文件缓存文件无法生成读取，是网站访问出错</span><?php endif; ?></a>
                              </td>
                            
                            </tr>

                         
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>


              </div><!-- /.row -->
              <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.page-content -->
      </div>
    </div><!-- /.main-content -->

      <div class="footer">
  <div class="footer-inner">
    <div class="footer-content">
						<span class="bigger-110">
							<span class="blue bolder">Ace</span>
							朵朵科技CMS &copy; 2018-2020
						</span>

      &nbsp; &nbsp;
      <a href="http://www.dd371.com" target="_blank">技术支持: 朵朵科技</a>
      <!--<span class="action-buttons">-->
							<!--<a href="#">-->
								<!--<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>-->
							<!--</a>-->

							<!--<a href="#">-->
								<!--<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>-->
							<!--</a>-->

							<!--<a href="#">-->
								<!--<i class="ace-icon fa fa-rss-square orange bigger-150"></i>-->
							<!--</a>-->
						<!--</span>-->
    </div>
  </div>
</div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
      <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
  </div><!-- /.main-container -->



  <script>
    jQuery(function ($) {
      $('[data-rel=tooltip]').tooltip();

      $("#hide-option").tooltip({
        hide: {
          effect: "explode",
          delay: 250
        }
      });

    })
  </script>

</body>

</html>