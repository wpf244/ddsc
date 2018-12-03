<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:72:"D:\www\12_03_ddsc\public/../application/admin\view\goods\goods_type.html";i:1543819780;s:59:"D:\www\12_03_ddsc\application\admin\view\public\header.html";i:1536572465;s:56:"D:\www\12_03_ddsc\application\admin\view\public\nav.html";i:1534735680;s:57:"D:\www\12_03_ddsc\application\admin\view\public\left.html";i:1543820030;s:56:"D:\www\12_03_ddsc\application\admin\view\public\set.html";i:1531125003;s:59:"D:\www\12_03_ddsc\application\admin\view\public\footer.html";i:1535074403;}*/ ?>
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
  try{ace.settings.loadState('main-container')}catch(e){}
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
    
     <?php if(CONTROLLER_NAME == 'News'): ?><li class="open"><?php else: ?><li class=""><?php endif; ?>
    <a href="#" class="dropdown-toggle">
      <i class="menu-icon fa fa-share"></i>
      <span class="menu-text"> 新闻中心 </span>

      <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">
      <?php if(ACTION_NAME == 'lister'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
      <a href="<?php echo url('News/lister'); ?>">
        <i class="menu-icon fa fa-caret-right"></i>
        新闻列表
      </a>

      <b class="arrow"></b>
    </li>
    
    <?php if(ACTION_NAME == 'type'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
      <a href="<?php echo url('News/type'); ?>">
        <i class="menu-icon fa fa-caret-right"></i>
       分类列表
      </a>

      <b class="arrow"></b>
    </li>
 


    </ul>

  </li>
    
    
    <?php if(CONTROLLER_NAME == 'Culture'): ?><li class="open"><?php else: ?><li class=""><?php endif; ?>
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-paper-plane"></i>
        <span class="menu-text"> 集团文化 </span>

        <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>

      <ul class="submenu">
        <?php if(ACTION_NAME == 'index'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
          <a href="<?php echo url('Culture/index'); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            文化建设
          </a>

          <b class="arrow"></b>
        </li>
    <?php if(ACTION_NAME == 'lister'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
          <a href="<?php echo url('Culture/lister'); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            文化沙龙
          </a>

          <b class="arrow"></b>
        </li>
 
     
      </ul>

    </li>
    
     <?php if(CONTROLLER_NAME == 'Job'): ?><li class="open"><?php else: ?><li class=""><?php endif; ?>
    <a href="#" class="dropdown-toggle">
      <i class="menu-icon fa fa-user"></i>
      <span class="menu-text"> 在线招聘 </span>

      <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">
      <?php if(ACTION_NAME == 'lister'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
      <a href="<?php echo url('Job/lister'); ?>">
        <i class="menu-icon fa fa-caret-right"></i>
        招聘列表
      </a>

      <b class="arrow"></b>
    </li>

    </ul>

  </li>
    
     <?php if(CONTROLLER_NAME == 'Team'): ?><li class="open"><?php else: ?><li class=""><?php endif; ?>
    <a href="#" class="dropdown-toggle">
      <i class="menu-icon fa fa-heart"></i>
      <span class="menu-text"> 团队展示 </span>

      <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">
      <?php if(ACTION_NAME == 'lister'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
      <a href="<?php echo url('Team/lister'); ?>">
        <i class="menu-icon fa fa-caret-right"></i>
        团队列表
      </a>

      <b class="arrow"></b>
    </li>

    </ul>

  </li>



<?php if(CONTROLLER_NAME == 'Message'): ?><li class="open"><?php else: ?><li class=""><?php endif; ?>
    <a href="#" class="dropdown-toggle">
      <i class="menu-icon fa fa-bullhorn"></i>
      <span class="menu-text"> 留言列表 </span>

      <b class="arrow fa fa-angle-down"></b>
    </a>

    <b class="arrow"></b>

    <ul class="submenu">
    <?php if(ACTION_NAME == 'index'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
      <a href="<?php echo url('Message/index'); ?>">
        <i class="menu-icon fa fa-caret-right"></i>
        留言列表
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
          <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="<?php echo url('Index/index'); ?>">首页</a>
          </li>
          <li class="active">商品分类</li>
        </ul><!-- /.breadcrumb -->

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
            <div class="col-sm-10 col-sm-offset-1">
              <div class="page-header">
                <button class="btn btn-success btn-white btn-bold" data-toggle="modal" data-target="#add">
                  <i class="ace-icon fa fa-plus icon-only"></i>
                  添加
                </button>
               <button id="change" class="btn btn-warning btn-white btn-bold">
                  <i class="fa fa-exchange"></i>
                  排序
                </button>
              </div>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  
                  <th>ID</th>
                  <th class="hidden-480">排序</th>
                  <th>分类名称</th>
                  <th>分类图标</th>
                  <th style="border-right:#ddd solid 1px;">操作</th>
                </tr>
                </thead>
                <form id="sortForm" action="<?php echo url('Goods/goods_sort'); ?>" method="post">
                <tbody>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <tr>
                 
                  <td><span class="badge badge-grey"><?php echo $v['type_id']; ?></span></td>
                  <td class="hidden-480"><input class="input-small" type="number" name="<?php echo $v['type_id']; ?>" value="<?php echo $v['type_sort']; ?>"></td>
                  <td><?php echo $v['type_name']; ?></td>
                   <td class="ace-thumbnails hidden-480">
                    <li><a href="<?php echo $v['type_image']; ?>" data-rel="colorbox">
                      <img width="80" height="80" alt="150x150" src="<?php echo $v['type_image']; ?>"/>
                      <div class="text">
                        <div class="inner">点击放大</div>
                      </div>
                    </a></li>
                  </td>
                  <td>
                    <button class="btn btn-xs btn-info" type="button" onclick="ajaxQuery('modify',<?php echo $v['type_id']; ?>,readData)">
                      <i class="ace-icon fa fa-pencil bigger-120"></i>
                    </button>
                    <button class="btn btn-xs btn-danger" type="button" onclick="dels(<?php echo $v['type_id']; ?>)">
                      <i class="ace-icon fa fa-trash-o bigger-120"></i>
                    </button>
                  </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?><tr><td colspan="10" class="text-center">暂无数据</td></tr><?php endif; ?>
                </tbody>
                </form>
              </table>
              <div class="text-center">
                <?php echo $list->render();; ?>
              </div>
            </div>
            <!-- PAGE CONTENT BEGINS -->

            <!-- PAGE CONTENT ENDS -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.page-content -->
    </div>
  </div><!-- /.main-content -->
  <!-- Modal -->
  <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
          aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">添加</h4>
        </div>
        <div class="modal-body">
          <form id="modal-form" class="form-horizontal" action="<?php echo url('Goods/save_type'); ?>" method="post" enctype="multipart/form-data">
            
            <div class="form-group">
              <label class="col-sm-2 control-label no-padding-right" for="">分类名称</label>
              <div class="col-sm-8">
                <input id="name" class="form-control" type="text" name="name" required>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label no-padding-right" for="">分类图标</label>
              <div class="col-xs-8">
                <input multiple="" type="file" id="pic" name="image" />
                <img src="" id="image" class="img-responsive" />
              </div>
            </div>
            
            <input id="id" name="id" type="hidden">
            
             <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
          <button  type="submit" class="btn btn-primary">保存</button>
        </div>
          </form>
        </div>
       
      </div>
    </div>
  </div>

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
  jQuery(function($) {
    $('[data-rel=tooltip]').tooltip();

    $( "#hide-option" ).tooltip({
      hide: {
        effect: "explode",
        delay: 250
      }
    });

  })
</script>
<script>
$(function(){
	$('#modal-form').ajaxForm({
		beforeSubmit: checkForm, // 此方法主要是提交前执行的方法，根据需要设置
		success: complete, // 这是提交后的方法
		dataType: 'json'
	});
	
	function checkForm(){
	  
		
    }

	function complete(data){
		if(data.status==1){
			layer.alert(data.msg, {icon: 5}, function(index){
 			layer.close(index);
 			window.location.href=data.url;
			});
			
		}else{
			layer.alert(data.msg, {icon: 6}, function(index){
 			layer.close(index);
 			window.location.href=data.url;
			});
			
		}
	}
 
});

</script>
<script type="text/javascript">
		function dels(id){
			layer.confirm('你确定删除分类及分类下的产品吗', {icon: 3}, function(index){
		    layer.close(index);
		    window.location.href="/admin/goods/delete_type/id/"+id;
		  });
	    }
		</script>

  <script>
    /* $(function () {
      //添加-模态框
      $("#save-btn").on(ace.click_event, function () {
        //获取form表单,执行ajaxSubmit提交
    	  var name = $("#name").val();
    	  if($.trim(name) == ''){
        	  layer.alert("请输入分类名称！",{icon:5});
        	  return false;
          }
    	var id = $("#id").val();
        $("#add").ajaxSubmit({
          url: '/admin/goods/save_type',
          type: 'post',
          data:{name:name,id:id},
          datatype:"text",
          success: function(res){
            //后台返回状态,保存成功
            if(res.code == 1){
              success(res.msg);
              location.href=res.url;
            }else{
              error(res.msg);
              location.href=res.url;
            }
          }
        })
      })
    }); */

    $(function () {
      $('#pic').ace_file_input({
        style: 'well',
        btn_choose: '图片',
        btn_change: null,
        no_icon: 'ace-icon fa fa-picture-o',
        droppable: true,
        thumbnail: 'fit'//large | fit
        //,icon_remove:null//set null, to hide remove/reset button
        /**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
        /**,before_remove : function() {
						return true;
					}*/
        ,
        preview_error: function (filename, error_code) {
          //name of the file that failed
          //error_code values
          //1 = 'FILE_LOAD_FAILED',
          //2 = 'IMAGE_LOAD_FAILED',
          //3 = 'THUMBNAIL_FAILED'
          //alert(error_code);
        }

      }).on('change', function (e) {
    	  console.log(e.target.value)
        //console.log($(this).data('ace_input_files'));
        //console.log($(this).data('ace_input_method'));
      });

     
    });

    //向模态框写入数据
    function readData(data) {
      $(".modal-title").text('修改');
      $("#id").val(data.type_id);
      $("#name").val(data.type_name);
  
      $("#image").attr('src',data.type_image);
      $('#add').modal('show');
    }

    function gs() {
      console.log(1)
    }
    $("#change").click(function(){
    	$("#sortForm").submit();
    })
    
    
    //bs模态框关闭事件回调函数
    $('#add').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal-form').get(0).reset();
  $(".modal-title").text('添加');
  $("#desc").text('');
  $("#image").attr('src','');
	})
  </script>

</body>
</html>
