# Host: localhost  (Version: 5.5.53)
# Date: 2018-12-29 14:14:33
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "ddsc_admin"
#

DROP TABLE IF EXISTS `ddsc_admin`;
CREATE TABLE `ddsc_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `pretime` datetime DEFAULT NULL,
  `curtime` datetime DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL COMMENT '登录IP',
  `level` int(11) NOT NULL DEFAULT '0' COMMENT '管理员类型 0超级管理员 1普通管理员',
  `control` text COMMENT '控制器权限',
  `way` text COMMENT '方法',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "ddsc_admin"
#

/*!40000 ALTER TABLE `ddsc_admin` DISABLE KEYS */;
INSERT INTO `ddsc_admin` VALUES (1,'admin','8a30ec6807f71bc69d096d8e4d501ade','2018-12-13 11:00:21','2018-12-14 08:54:17','0.0.0.0',0,NULL,NULL),(4,'王鹏飞','e10adc3949ba59abbe56e057f20f883e',NULL,NULL,NULL,1,'1,4','2,3,5,6');
/*!40000 ALTER TABLE `ddsc_admin` ENABLE KEYS */;

#
# Structure for table "ddsc_carte"
#

DROP TABLE IF EXISTS `ddsc_carte`;
CREATE TABLE `ddsc_carte` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) DEFAULT NULL COMMENT '模块名称',
  `c_modul` varchar(255) DEFAULT NULL COMMENT '控制器',
  `c_icon` varchar(255) DEFAULT NULL COMMENT '图标',
  `pid` int(11) DEFAULT NULL COMMENT '上级id',
  `c_sort` int(11) NOT NULL DEFAULT '50' COMMENT '排序',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

#
# Data for table "ddsc_carte"
#

/*!40000 ALTER TABLE `ddsc_carte` DISABLE KEYS */;
INSERT INTO `ddsc_carte` VALUES (1,'网站设置','Sys','fa-desktop',0,1),(2,'基本信息','seting','',1,50),(3,'网站优化','seo','',1,50),(4,'广告图管理','Lb','fa-picture-o',0,2),(5,'图片列表','lister','',4,50),(6,'广告位','place','',4,50),(7,'店铺管理','Shops','fa-balance-scale',0,4),(8,'店铺列表','lister','',7,50),(9,'添加店铺','add','',7,50),(10,'商品管理','Goods','fa-paper-plane',0,5),(11,'商品列表','lister','',10,50),(12,'商品分类','goods_type','',10,50),(13,'菜单管理','Carte','fa-reorder',0,2),(14,'后台模板','lister','',13,50),(15,'数据库管理','Sql','fa-file-text-o',0,50),(16,'管理员管理','User','fa-user',0,3),(17,'管理员列表','lister','',16,50),(18,'备份列表','lister','',15,50);
/*!40000 ALTER TABLE `ddsc_carte` ENABLE KEYS */;

#
# Structure for table "ddsc_goods"
#

DROP TABLE IF EXISTS `ddsc_goods`;
CREATE TABLE `ddsc_goods` (
  `gid` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `g_name` varchar(255) DEFAULT NULL COMMENT '商品名称',
  `g_yprice` float(16,2) NOT NULL DEFAULT '0.00' COMMENT '商品原价',
  `g_xprice` float(16,2) NOT NULL DEFAULT '0.00' COMMENT '商品现价',
  `g_sales` int(11) NOT NULL DEFAULT '0' COMMENT '销量',
  `g_kc` int(11) DEFAULT NULL COMMENT '库存',
  `g_content` text COMMENT '商品详情',
  `g_up` tinyint(1) NOT NULL DEFAULT '0' COMMENT '商品状态 0下架 1上架',
  `g_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '首页显示 0否 1是',
  `g_sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `g_image` varchar(255) DEFAULT NULL COMMENT '商品图片',
  `fid` int(11) DEFAULT NULL COMMENT '所属分类id',
  `g_te` int(11) NOT NULL DEFAULT '0' COMMENT '节日专区',
  `g_hot` tinyint(1) NOT NULL DEFAULT '0' COMMENT '宴会专区',
  `spec` text COMMENT '商品规格',
  `key` varchar(255) DEFAULT NULL COMMENT '关键词',
  `advert` varchar(255) DEFAULT NULL COMMENT '广告词',
  `g_skill` tinyint(3) NOT NULL DEFAULT '0' COMMENT '限时秒杀',
  `num` int(11) NOT NULL DEFAULT '0' COMMENT '起卖件数',
  `nums` int(11) NOT NULL DEFAULT '0' COMMENT '每件几瓶',
  `g_images` varchar(255) DEFAULT NULL COMMENT '首页推荐图',
  `g_imagej` varchar(255) DEFAULT NULL COMMENT '节日专区图',
  `g_imagey` varchar(255) DEFAULT NULL COMMENT '宴会专区图',
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "ddsc_goods"
#

/*!40000 ALTER TABLE `ddsc_goods` DISABLE KEYS */;
/*!40000 ALTER TABLE `ddsc_goods` ENABLE KEYS */;

#
# Structure for table "ddsc_lb"
#

DROP TABLE IF EXISTS `ddsc_lb`;
CREATE TABLE `ddsc_lb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(11) DEFAULT NULL COMMENT '父类id',
  `name` varchar(255) DEFAULT NULL COMMENT '名称',
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态0关闭 1开启',
  `url` varchar(255) DEFAULT NULL,
  `desc` text COMMENT '简介',
  `image` varchar(255) DEFAULT NULL COMMENT '图片',
  `thumb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='广告列表';

#
# Data for table "ddsc_lb"
#

/*!40000 ALTER TABLE `ddsc_lb` DISABLE KEYS */;
INSERT INTO `ddsc_lb` VALUES (16,1,'测试',50,1,'','','/uploads/20181213/da04ad298ea97397fc62846de906b4d3.jpg','uploads/thumb/5c122b1d8e3bd.jpg');
/*!40000 ALTER TABLE `ddsc_lb` ENABLE KEYS */;

#
# Structure for table "ddsc_lb_place"
#

DROP TABLE IF EXISTS `ddsc_lb_place`;
CREATE TABLE `ddsc_lb_place` (
  `pl_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '轮播id',
  `pl_name` varchar(255) DEFAULT NULL COMMENT '位置名称',
  PRIMARY KEY (`pl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='广告位';

#
# Data for table "ddsc_lb_place"
#

/*!40000 ALTER TABLE `ddsc_lb_place` DISABLE KEYS */;
INSERT INTO `ddsc_lb_place` VALUES (1,'测试');
/*!40000 ALTER TABLE `ddsc_lb_place` ENABLE KEYS */;

#
# Structure for table "ddsc_seo"
#

DROP TABLE IF EXISTS `ddsc_seo`;
CREATE TABLE `ddsc_seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '首页标题',
  `keywords` varchar(255) DEFAULT NULL COMMENT 'seo关键词',
  `description` text COMMENT 'seo描述',
  `copy` text COMMENT '版权信息',
  `code` text COMMENT '统计代码',
  `support` varchar(255) DEFAULT NULL COMMENT '技术支持',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='网站优化';

#
# Data for table "ddsc_seo"
#

/*!40000 ALTER TABLE `ddsc_seo` DISABLE KEYS */;
INSERT INTO `ddsc_seo` VALUES (1,'测试8','','','','','');
/*!40000 ALTER TABLE `ddsc_seo` ENABLE KEYS */;

#
# Structure for table "ddsc_shop"
#

DROP TABLE IF EXISTS `ddsc_shop`;
CREATE TABLE `ddsc_shop` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(255) DEFAULT NULL,
  `shop_logo_index` varchar(255) DEFAULT NULL COMMENT '首页logo',
  `shop_logo` varchar(255) DEFAULT NULL COMMENT '主页logo',
  `shop_image` varchar(255) DEFAULT NULL COMMENT 'banner图',
  `shop_status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '店铺状态 0关闭 1开启',
  `shop_groom` tinyint(3) NOT NULL DEFAULT '0' COMMENT '是否推荐 0否 1是',
  `shop_time` char(20) DEFAULT NULL COMMENT '添加时间',
  `shop_sort` int(11) DEFAULT NULL COMMENT '排序',
  `shop_content` text COMMENT '店铺详情',
  PRIMARY KEY (`shop_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='店铺列表';

#
# Data for table "ddsc_shop"
#

/*!40000 ALTER TABLE `ddsc_shop` DISABLE KEYS */;
INSERT INTO `ddsc_shop` VALUES (1,'朵朵科技','/uploads/20181130/b53da7b193d58dc67a529c6d7f6f69e1.png','/uploads/20181130/9cd880810207e4d4c17678e2c37e7b6c.jpg','/uploads/20181130/6ef2183fe2a279b4da32eb7afcfa6ab7.jpg',1,1,'1543569719',50,''),(2,'ECSHOP111','/uploads/20181130/fe67e31b3aaac404689e8185fed020b5.jpg','/uploads/20181130/fb2342ffef5eed41e64a916a24ddbd54.jpg','/uploads/20181130/42065fb9a7b2fa057aeae38bbe9f8690.jpg',1,0,'1543570304',1,'<p>fdfgfd</p>');
/*!40000 ALTER TABLE `ddsc_shop` ENABLE KEYS */;

#
# Structure for table "ddsc_sql"
#

DROP TABLE IF EXISTS `ddsc_sql`;
CREATE TABLE `ddsc_sql` (
  `sql_id` int(11) NOT NULL AUTO_INCREMENT,
  `sql_name` varchar(255) DEFAULT NULL,
  `create_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sql_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='数据库备份';

#
# Data for table "ddsc_sql"
#

/*!40000 ALTER TABLE `ddsc_sql` DISABLE KEYS */;
/*!40000 ALTER TABLE `ddsc_sql` ENABLE KEYS */;

#
# Structure for table "ddsc_sys"
#

DROP TABLE IF EXISTS `ddsc_sys`;
CREATE TABLE `ddsc_sys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '公司名称',
  `username` varchar(255) DEFAULT NULL COMMENT '负责人',
  `url` varchar(255) DEFAULT NULL COMMENT '网站域名',
  `qq` char(20) DEFAULT NULL COMMENT '客服QQ',
  `icp` varchar(255) DEFAULT NULL COMMENT 'icp备案号',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `tel` varchar(255) DEFAULT NULL COMMENT '固定电话',
  `phone` char(11) DEFAULT NULL COMMENT '手机号码',
  `longs` varchar(255) DEFAULT NULL COMMENT '经度',
  `lats` varchar(255) DEFAULT NULL COMMENT '纬度',
  `addr` varchar(255) DEFAULT NULL COMMENT '公司地址',
  `content` text COMMENT '公司简介',
  `pclogo` varchar(255) DEFAULT NULL COMMENT '电脑端logo',
  `waplogo` varchar(255) DEFAULT NULL COMMENT '手机端logo',
  `qrcode` varchar(255) DEFAULT NULL COMMENT '微信二维码',
  `wx` varchar(255) DEFAULT NULL COMMENT '微信公众号',
  `fax` varchar(255) DEFAULT NULL COMMENT '公司传真',
  `telphone` varchar(255) DEFAULT NULL COMMENT '400电话',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='网站基本信息';

#
# Data for table "ddsc_sys"
#

/*!40000 ALTER TABLE `ddsc_sys` DISABLE KEYS */;
INSERT INTO `ddsc_sys` VALUES (1,'朵朵商城','admin','','','','','','','','','','',NULL,NULL,NULL,NULL,'','');
/*!40000 ALTER TABLE `ddsc_sys` ENABLE KEYS */;

#
# Structure for table "ddsc_sys_log"
#

DROP TABLE IF EXISTS `ddsc_sys_log`;
CREATE TABLE `ddsc_sys_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL COMMENT '类型',
  `time` datetime DEFAULT NULL COMMENT '操作时间',
  `admin` varchar(255) DEFAULT NULL COMMENT '操作账号',
  `ip` varchar(255) DEFAULT NULL COMMENT 'IP地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COMMENT='系统日志';

#
# Data for table "ddsc_sys_log"
#

/*!40000 ALTER TABLE `ddsc_sys_log` DISABLE KEYS */;
INSERT INTO `ddsc_sys_log` VALUES (1,'后台登录','2018-11-28 18:01:28','admin','127.0.0.1'),(2,'后台登录','2018-11-29 08:54:20','admin','0.0.0.0'),(3,'后台登录','2018-11-29 09:26:17','admin','0.0.0.0'),(4,'后台登录','2018-11-30 14:04:09','admin','0.0.0.0'),(5,'后台登录','2018-11-30 14:55:34','admin','0.0.0.0'),(6,'后台登录','2018-11-30 15:13:35','admin','0.0.0.0'),(9,'添加店铺','2018-11-30 16:23:01','admin','0.0.0.0'),(10,'添加店铺','2018-11-30 16:24:23','admin','0.0.0.0'),(11,'添加店铺','2018-11-30 16:34:47','admin','0.0.0.0'),(12,'添加店铺','2018-11-30 17:21:59','admin','0.0.0.0'),(13,'添加店铺','2018-11-30 17:31:44','admin','0.0.0.0'),(14,'后台登录','2018-12-03 08:53:45','admin','0.0.0.0'),(15,'后台登录','2018-12-05 09:26:53','admin','0.0.0.0'),(16,'后台登录','2018-12-06 10:24:36','admin','0.0.0.0'),(17,'后台登录','2018-12-06 16:36:20','admin','0.0.0.0'),(18,'后台登录','2018-12-08 10:00:30','admin','0.0.0.0'),(19,'后台登录','2018-12-10 09:22:04','admin','0.0.0.0'),(20,'后台登录','2018-12-10 18:05:06','admin','0.0.0.0'),(21,'后台登录','2018-12-11 11:37:45','admin','0.0.0.0'),(22,'后台登录','2018-12-11 11:46:40','admin','0.0.0.0'),(23,'后台登录','2018-12-11 11:58:25','admin','0.0.0.0'),(24,'后台登录','2018-12-12 10:32:58','admin','0.0.0.0'),(25,'后台登录','2018-12-13 08:53:34','admin','0.0.0.0'),(26,'后台登录','2018-12-13 11:00:21','王鹏飞','0.0.0.0'),(27,'后台登录','2018-12-14 08:54:17','admin','0.0.0.0');
/*!40000 ALTER TABLE `ddsc_sys_log` ENABLE KEYS */;

#
# Structure for table "ddsc_type"
#

DROP TABLE IF EXISTS `ddsc_type`;
CREATE TABLE `ddsc_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) DEFAULT NULL COMMENT '分类名称',
  `type_image` varchar(255) DEFAULT NULL COMMENT '分类图标',
  `type_sort` int(11) NOT NULL DEFAULT '50',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '上级分类id 0为一级分类',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '是否可见 0否 1是',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='商品分类';

#
# Data for table "ddsc_type"
#

/*!40000 ALTER TABLE `ddsc_type` DISABLE KEYS */;
INSERT INTO `ddsc_type` VALUES (1,'测试121','/uploads/20181203/86cedac2bbd051c979671ff8dedd3e30.jpg',7,0,1),(2,'测试1','/uploads/20181210/170a324870739d78339612323e65c893.jpg',50,1,1),(3,'测试2','/uploads/20181210/cb04a6473390fbf2c137411840c31ba4.jpg',50,2,1),(4,'测试3','/uploads/20181210/c556f43b43c28193f5c7fc29dead5cea.jpg',50,2,0),(5,'111',NULL,50,1,1),(6,'2222',NULL,50,1,1),(7,'111222',NULL,50,5,1),(8,'1111',NULL,50,6,1),(9,'3333',NULL,50,1,1),(10,'4444',NULL,50,1,1),(11,'565',NULL,50,1,1);
/*!40000 ALTER TABLE `ddsc_type` ENABLE KEYS */;
