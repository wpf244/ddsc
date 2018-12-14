<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:72:"D:\www\12_03_ddsc\public/../application/admin\view\goods\goods_type.html";i:1544435023;s:59:"D:\www\12_03_ddsc\application\admin\view\public\header.html";i:1544085067;s:56:"D:\www\12_03_ddsc\application\admin\view\public\nav.html";i:1544670797;s:57:"D:\www\12_03_ddsc\application\admin\view\public\left.html";i:1544670709;s:56:"D:\www\12_03_ddsc\application\admin\view\public\set.html";i:1531125003;s:59:"D:\www\12_03_ddsc\application\admin\view\public\footer.html";i:1535074403;}*/ ?>
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
<style>
.addRow,.open{
  cursor: pointer;
}
</style>
<style>
 
.add-child i{
	font-style: normal;
	display: none;
}
.add-child:hover i{
	display: inline-block;
}
    </style>
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
									<?php echo $admin['username']; ?>
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
 <?php if(is_array($controls) || $controls instanceof \think\Collection || $controls instanceof \think\Paginator): $i = 0; $__LIST__ = $controls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;if(CONTROLLER_NAME == $c['c_modul']): ?><li class="open"><?php else: ?><li class=""><?php endif; ?>
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa <?php echo $c['c_icon']; ?>"></i>
        <span class="menu-text"> <?php echo $c['c_name']; ?> </span>

        <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>
      <ul class="submenu">
       <?php if(is_array($c['ways']) || $c['ways'] instanceof \think\Collection || $c['ways'] instanceof \think\Paginator): $i = 0; $__LIST__ = $c['ways'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$w): $mod = ($i % 2 );++$i;if(ACTION_NAME == $w['c_modul']): ?><li class="active"><?php else: ?><li class=""><?php endif;  $url = $c['c_modul'].'/'.$w['c_modul']; ?>
          <a href="<?php echo url($url); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            <?php echo $w['c_name']; ?>
          </a>

          <b class="arrow"></b>
        </li>
      <?php endforeach; endif; else: echo "" ;endif; ?>
       
      </ul>
    </li>
<?php endforeach; endif; else: echo "" ;endif; ?>
    <!-- <?php if(CONTROLLER_NAME == 'Lb'): ?><li class="open"><?php else: ?><li class=""><?php endif; ?>
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

    <?php if(CONTROLLER_NAME == 'Carte'): ?><li class="open"><?php else: ?><li class=""><?php endif; ?>
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-reorder"></i>
        <span class="menu-text"> 菜单管理 </span>

        <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>

      <ul class="submenu">
        <?php if(ACTION_NAME == 'lister'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
          <a href="<?php echo url('Carte/lister'); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            后台模块
          </a>

          <b class="arrow"></b>
        </li>
    
     
      </ul>

    </li>
    
    <?php if(CONTROLLER_NAME == 'User'): ?><li class="open"><?php else: ?><li class=""><?php endif; ?>
        <a href="#" class="dropdown-toggle">
          <i class="menu-icon fa fa-reorder"></i>
          <span class="menu-text"> 管理员管理 </span>
  
          <b class="arrow fa fa-angle-down"></b>
        </a>
  
        <b class="arrow"></b>
  
        <ul class="submenu">
          <?php if(ACTION_NAME == 'lister'): ?><li class="active"><?php else: ?><li class=""><?php endif; ?>
            <a href="<?php echo url('User/lister'); ?>">
              <i class="menu-icon fa fa-caret-right"></i>
              管理员列表
            </a>
  
            <b class="arrow"></b>
          </li>
      
       
        </ul>
  
      </li> -->
  
  

  
    
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
                <a class="btn btn-success btn-white btn-bold" href="<?php echo url('Goods/add_type'); ?>">
                  <i class="ace-icon fa fa-plus icon-only"></i>
                  添加
                </a>
               <button id="change" class="btn btn-warning btn-white btn-bold">
                  <i class="fa fa-exchange"></i>
                  排序
                </button>
                <button id="save" class="btn btn-info btn-white btn-bold hidden">
                  <i class="fa fa-save"></i>
                  保存
                </button>
              </div>
              <table class="table table-bordered table-hover">
                  <thead>
                      <tr align="center">
                        <th></th>
                        <th align="left">分类名称</th>
                        <!-- <th align="left">商品分类简称</th>
                        <th align="left">关联类型</th> -->
                        <th>是否显示</th>
                        <th>排序</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(is_array($list_one) || $list_one instanceof \think\Collection || $list_one instanceof \think\Paginator): if( count($list_one)==0 ) : echo "" ;else: foreach($list_one as $key=>$v1): ?>
                      <tr class="pid_0" style="height: 30px;" data-category-id="<?php echo $v1['type_id']; ?>" data-pid="<?php echo $v1['pid']; ?>" data-level="<?php echo $v1['level']; ?>">
                        <td>
                          <?php if($v1['list_two'] != array()): ?>
                          <a href="javascript:;" onclick="tab_switch(<?php echo $v1['type_id']; ?>)" class="tab_jia_<?php echo $v1['type_id']; ?>" style="display: block;">[+]</a>
                          <a href="javascript:;" onclick="tab_switch(<?php echo $v1['type_id']; ?>)" class="tab_jian_<?php echo $v1['type_id']; ?>" style="display: none;">[-]</a>
                          <?php endif; ?>
                        </td>
                        
                        <td>
                          <input class="input-common middle" type="text" fieldid="<?php echo $v1['type_id']; ?>" fieldname="type_name" value="<?php echo $v1['type_name']; ?>" style="width: 150px;">
                          <a href="javascript:;" onclick="addChildGoodsCategory(this, 2, <?php echo $v1['type_id']; ?>);">
                          <span class="add-child"><span class="badge badge-danger addRow">+</span><i>添加子分类</i></span>
                          </a>
                        </td>
                        <!-- <td><input class="input-common middle" type="text" fieldid="<?php echo $v1['type_id']; ?>" fieldname="short_name" value="<?php echo $v1['type_name']; ?>" style="width: 150px;"></td>
                        <td><?php echo $v1['type_name']; ?></td> -->
                        <td style="text-align: center;"><?php if($v1['status'] == 1): ?>是 <?php else: ?>否<?php endif; ?></td>
                        <td style="text-align: center;"><input type="number" class="sort input-common input-common-sort" fieldid="<?php echo $v1['type_id']; ?>" fieldname="type_sort" value="<?php echo $v1['type_sort']; ?>" size="1"></td>
                        <td style="text-align: center;">
                            <a class="btn btn-xs btn-info" href="<?php echo url('Goods/modifys',array('type_id'=>$v1['type_id'])); ?>">
                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" type="button" onclick="dels(<?php echo $v1['type_id']; ?>)">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                        </td>
                      </tr>
                      
                        <?php if(is_array($v1['list_two']) || $v1['list_two'] instanceof \think\Collection || $v1['list_two'] instanceof \think\Paginator): if( count($v1['list_two'])==0 ) : echo "" ;else: foreach($v1['list_two'] as $key=>$v2): ?>
                        <tr class="pid_<?php echo $v1['type_id']; ?>" style="height: 30px;display:none;" data-category-id="<?php echo $v2['type_id']; ?>" data-pid="<?php echo $v2['pid']; ?>" data-level="<?php echo $v2['level']; ?>">
                          <td>
                            <?php if($v2['list_three'] != array()): ?>
                            <a href="javascript:;" onclick="tab_switch(<?php echo $v2['type_id']; ?>)" class="tab_jian_<?php echo $v2['type_id']; ?>" style="display: block;">[-]</a>
                            <a href="javascript:;" onclick="tab_switch(<?php echo $v2['type_id']; ?>)" class="tab_jia_<?php echo $v2['type_id']; ?>" style="display: none;">[+]</a>
                            <?php endif; ?>
                          </td>
                          
                          <td><span style="color:#ccc;">|——</span> <input type="text" class="input-common middle" fieldid="<?php echo $v2['type_id']; ?>" fieldname="type_name" value="<?php echo $v2['type_name']; ?>" style="width: 150px;">
                            <a href="javascript:;" onclick="addChildGoodsCategory(this, 3, <?php echo $v2['type_id']; ?>);">
                              <span class="add-child"><span class="badge badge-danger addRow">+</span><i>添加子分类</i></span>
                            </a>
                          </td>
                          <!-- <td><input type="text" class="input-common middle" fieldid="<?php echo $v2['type_id']; ?>" fieldname="short_name" value="<?php echo $v2['type_name']; ?>" style="width: 150px;"></td>
                          <td><?php echo $v2['type_name']; ?></td> -->
                          <td style="text-align: center;"><?php if($v2['status'] == 1): ?>是 <?php else: ?>否<?php endif; ?></td>
                          <td style="text-align: center;"><input type="number" class="sort input-common input-common-sort" fieldid="<?php echo $v2['type_id']; ?>" fieldname="type_sort"  value="<?php echo $v2['type_sort']; ?>" size="1"></td>
                          <td style="text-align: center;">
                              <a class="btn btn-xs btn-info" href="<?php echo url('Goods/modifys',array('type_id'=>$v2['type_id'])); ?>">
                                  <i class="ace-icon fa fa-pencil bigger-120"></i>
                              </a>
                              <button class="btn btn-xs btn-danger" type="button" onclick="dels(<?php echo $v2['type_id']; ?>)">
                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                              </button>
                          </td>
                        </tr>
                        
                          <?php if(is_array($v2['list_three']) || $v2['list_three'] instanceof \think\Collection || $v2['list_three'] instanceof \think\Paginator): if( count($v2['list_three'])==0 ) : echo "" ;else: foreach($v2['list_three'] as $key=>$v3): ?>
                          <tr class="pid_<?php echo $v2['type_id']; ?> pid_<?php echo $v1['type_id']; ?>" style="height: 30px;display:none;" data-category-id="<?php echo $v3['type_id']; ?>" data-pid="<?php echo $v3['pid']; ?>" data-level="<?php echo $v3['level']; ?>">
                            <td></td>
                            
                            <td><span style="color:#ccc;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|——</span> <input class="input-common middle" type="text" fieldid="<?php echo $v3['type_id']; ?>" fieldname="type_name" value="<?php echo $v3['type_name']; ?>" style="width: 150px;"></td>
                            <!-- <td><input type="text" class="input-common middle" fieldid="<?php echo $v3['type_id']; ?>" fieldname="short_name" value="<?php echo $v3['type_name']; ?>" style="width: 150px;"></td>
                            <td><?php echo $v3['type_name']; ?></td> -->
                            <td style="text-align: center;"><?php if($v2['status'] == 1): ?>是 <?php else: ?>否<?php endif; ?></td>
                            <td style="text-align: center;"><input type="number" class="sort input-common input-common-sort" fieldid="<?php echo $v3['type_id']; ?>" fieldname="type_sort"  value="<?php echo $v3['type_sort']; ?>" size="1"></td>
                            <td style="text-align: center;">
                                <a class="btn btn-xs btn-info" href="<?php echo url('Goods/modifys',array('type_id'=>$v3['type_id'])); ?>">
                                    <i class="ace-icon fa fa-pencil bigger-120"></i>
                                </a>
                                <button class="btn btn-xs btn-danger" type="button" onclick="dels(<?php echo $v3['type_id']; ?>)">
                                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                </button>
                            </td>
                          </tr>
                          <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                  </table>
                  
                  
                  <div class="options-btn" id="saveNewAddedCategory" style="display: none;">
                    <button class="btn btn-info btn-white btn-bold">保存</button>
                  </div>
                  
              </table>
              <div class="text-center">
              </div>
            </div>
            <!-- PAGE CONTENT BEGINS -->

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

$(".table-hover tr[data-category-id] input").change(function(){
	var fieldid = $(this).attr('fieldid');
	var fieldname = $(this).attr('fieldname');
	var fieldvalue = $(this).val();
	if(fieldvalue == ''){
		layer.msg("不能为空");return false;
	}else{
		$.ajax({
			type:"post",
			url:"<?php echo url('Goods/usave_types'); ?>",
			data:{'fieldid':fieldid,'fieldname':fieldname,'fieldvalue':fieldvalue},
			success: function (data) {
				if(data.code>0){
					layer.msg("修改成功");
				}else{
					layer.msg("修改失败");
				}
			}
		});
	}
});

  function addChildGoodsCategory(obj, level, pid){
	html = '<tr class="new-added pid_'+pid+'" data-level="'+level+'" data-pid="'+pid+'">';
		html += '<td></td>';
		
		if(level == 1){
			//分类名称
			html += '<td style="text-align: left;">';
			html += '<input class="input-common middle" type="text"  value="" name="categoryName"></td>';
			//分类简称
			// html += '<td style="text-align: left;">';
			// 	html += '<input class="input-common middle" type="text" name="categoryShortName"  value="" >';
			// html += '</td>';
		}else if(level == 2){
			//分类名称
			html += '<td style="text-align: left;">';
			html += '<span style="color:#ccc;">|——</span> <input class="input-common middle" type="text" name="categoryName"  value=""></td>';
			// //分类简称
			// html += '<td style="text-align: left;">';
			// 	html += '<input class="input-common middle" type="text"  value="" name="categoryShortName">';
			// html += '</td>';
		}else if(level == 3){
			//分类名称
			html += '<td style="text-align: left;">';
			html += '<span style="color:#ccc;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|——</span><input class="input-common middle" type="text"  value="" name="categoryName">';
			html += '</td>';
			//分类名称
			// html += '<td style="text-align: left;">';
			// 	html += '<input class="input-common middle" type="text"  value="" name="categoryShortName">';
			// html += '</td>';
		}
	//	html += '<td style="text-align: center;"></td>';
		html += '<td style="text-align: center;">是</td>';
		html += '<td style="text-align: center;">';
			html += '<input type="number" class="sort input-common input-common-sort" name="categorySort" value="50" >';
		html += '</td>';
		html += '<td style="text-align: center;"><a href="javascript:void(0);" onclick="delNewAddedCategory(this)">删除</a></td>';
	html += '</tr>';

	$(obj).parents("tr").after(html);

	$("#saveNewAddedCategory").show();
}



function tab_switch(module_id){
	if($(".pid_"+module_id).css('display') != 'none'){
		$(".tab_jian_"+module_id).hide();
		$(".tab_jia_"+module_id).show();
		$(".pid_"+module_id).hide(300);
	}else{
		$(".tab_jian_"+module_id).show();
		$(".tab_jia_"+module_id).hide();
		$(".pid_"+module_id).show(500);
	}
}

//删除新增分类
function delNewAddedCategory(event){
	$(event).parents("tr").remove();
}

var is_sub = false;
$("body").on('click', '#saveNewAddedCategory button',function(event) {
	var content = new Array();
	$(".new-added").each(function(i, e) {
		var sort = $(e).find("input[name='categorySort']").val();
			sort = sort.length == 0 ? 0 : sort;
		var categoryName = $(e).find("input[name='categoryName']").val();
		var categoryShortName = $(e).find("input[name='categoryShortName']").val();
		var level = $(e).attr("data-level");
		var pid = $(e).attr("data-pid");
		if(categoryName != ""){
			var category_info_arr = new Object();
				category_info_arr.sort = sort;
				category_info_arr.categoryName = categoryName;
				category_info_arr.categoryShortName = categoryShortName;
				category_info_arr.level = level;
				category_info_arr.pid = pid;
				category_info_str = JSON.stringify(category_info_arr);
			content.push(category_info_str);
		}
	});
	content = JSON.stringify(content);

	if(content.length == 2){
		return;
	}
	
	if(is_sub) return;
	is_sub = true;
	$.ajax({
		type : "post",
		url : "<?php echo url('Goods/save_types'); ?>",
		data : { "content" : content },
		success : function(data){
			if(data["code"] > 0){
				layer.msg("添加成功");
				location.href = "<?php echo url('Goods/goods_type'); ?>";
			}else{
				layer.msg("添加失败");
				location.href = "<?php echo url('Goods/goods_type'); ?>";
			}
		}
	})
});

var is_click = false;
function save(){
	var category_name = $("#category_name").val();
	var pid = $("#goods_category_pid").val();
	var sort = $("#sort").val();
	var short_name = $("#short_name").val();
	if(verify( category_name,short_name, sort)){
		if(is_click){
			return false;
		}
		is_click = true;
		$.ajax({
			type : "post",
			url : "<?php echo url('ADMIN_MAIN/goods/addgoodscategory'); ?>",
			data : {
				'category_name' : category_name,
				'pid' : pid,
				'keywords' : "",
				'sort' : sort,
				'description' : "",
				'is_visible' : 1,
				"category_pic" : "",
				"short_name" : short_name,
				"attr_id" : "",
				"attr_name" : ""
			},
			success : function(data) {
				
				var parent = $(".table-class tbody tr[data-category-id='" + pid + "']");
				var level = parseInt(parent.attr("data-level")) + 1;
				
				if (data["code"] > 0) {
					
					var parent_html = '';//父级展开合起开关
					var select_html = '';//商品分类下拉框
					
					var pid_class = 'pid_' + pid;
					if(level == 2){
						//如果当前添加的是二级分类，则要更新商品分类下拉框列表
						select_html = '<option value="' + data.code + '">&nbsp;&nbsp;&nbsp;&nbsp;' + category_name + '</option>';
					}else if(level == 3){
						pid_class = "pid_" + pid + " pid_" + parent.attr("data-pid");
					}
					
					var html = '<tr class="' + pid_class + '" style="height: 30px;" data-category-id="' + data.code + '" data-pid="' + pid + '" data-level="' + level + '">';
					
							html += '<td></td>';
								parent_html += '<a href="javascript:;" onclick="tab_switch(' + pid + ')" class="tab_jia_' + pid + '" style="display: block;"><i class="fa fa-plus-circle"></i></a>';
								parent_html += '<a href="javascript:;" onclick="tab_switch(' + pid + ')" class="tab_jian_' + pid + '" style="display: none;"><i class="fa fa-minus-circle"></i></a>';
							
							html += '<td style="text-align: center;"><input type="number" class="sort input-common input-common-sort" fieldid="' + data.code + '" fieldname="sort" value="' + sort + '" size="1"></td>';

							html += '<td>';
								if(level == 2){
									html += '<span style="color:#ccc;">|——</span>';
								}else if(level == 3){
									html += '<span style="color:#ccc;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|——</span>';
								}
								html += '<input class="input-common" type="text" fieldid="' + data.code + '" fieldname="category_name" value="' + category_name + '" style="width: 150px;">';
								
								if(level == 2){
									html += '<a href="javascript:;" onclick="addChildGoodsCategory(' + data.code + ');">添加子分类</a>';
								}
							html += '</td>';
							
							html += '<td><input class="input-common" type="text" fieldid="' + data.code + '" fieldname="short_name" value="' + short_name + ' " style="width: 150px;"></td>';
							
							html += '<td></td>';
							
							html += '<td style="text-align: center;">是</td>';
							
							html += '<td style="text-align: center;">';
								html += '<a href="' + ("/goods/updategoodscategory?category_id=" + data.code) + '">修改</a>';
									html += '<a href="javascript:void(0);" onclick="delCategory(' + data.code + ')">删除</a>';
							html += '</td>';
						html += '</tr>';
				
					if($(".pid_" + pid).length == 0){
						$(".table-class tbody tr[data-category-id='" + pid+ "']").after(html);
					}else{
						var last_pid = ".pid_" + pid + ":last";
						$(last_pid).after(html);
					}
					
					parent.find("td:first").html(parent_html);

					$(".tab_jian_" + pid).show();
					$(".tab_jia_" + pid).hide();
					$(".pid_" + pid).show(500);

					$("#goods_category_pid").append(select_html);
					$("#addChildGoodsCategory").modal("hide");
					
					$("#category_name").val("");
					$("#short_name").val("");
					$("#sort").val(0);
					showTip(data['message'],"success");
				}else{
					showTip(data['message'],"error");
				}
				is_click = false;
			}
		});
	}
}

function closeAddGoodsCategory(){
	is_click = false;
	$("#addChildGoodsCategory").modal("hide");
}

$("body").on("click",".modal-backdrop",function(){
	closeAddGoodsCategory();
});

</script>

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
			layer.confirm('你确定删除吗', {icon: 3}, function(index){
		    layer.close(index);
		      $.ajax({
            type:"post",
            url:"<?php echo url('Goods/delete_types'); ?>",
            data:{'type_id':id},
            success: function (data) {
              // if(data.code>0){
              //   layer.msg("删除成功");
              // }else{
              //   layer.msg("删除失败");
              // }
            }
          });
		  //  window.location.href="/admin/goods/delete_type/id/"+id;
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
