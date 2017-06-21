/*
Navicat MySQL Data Transfer

Source Server         : weizhi
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : imooc_singcms

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2017-06-22 07:57:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cms_admin
-- ----------------------------
DROP TABLE IF EXISTS `cms_admin`;
CREATE TABLE `cms_admin` (
  `admin_id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `lastloginip` varchar(15) DEFAULT '0',
  `lastlogintime` int(10) unsigned DEFAULT '0',
  `email` varchar(40) DEFAULT '',
  `realname` varchar(50) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`admin_id`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cms_admin
-- ----------------------------
INSERT INTO `cms_admin` VALUES ('1', 'admin', 'd099d126030d3207ba102efa8e60630a', '0', '1497069815', 'tracywxh0830@126.com', 'singwa', '1');
INSERT INTO `cms_admin` VALUES ('16', 'tcl', '4892440a291b9584b10b56eec6e6c892', '0', '1496995777', '', 'tcl', '1');

-- ----------------------------
-- Table structure for cms_customer
-- ----------------------------
DROP TABLE IF EXISTS `cms_customer`;
CREATE TABLE `cms_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `customer_desc` varchar(1255) CHARACTER SET utf8 DEFAULT NULL,
  `customer_subject` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `thumb` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `create_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_customer
-- ----------------------------
INSERT INTO `cms_customer` VALUES ('3', '山东淄博', '山东淄博第一台化肥包装机测试完成，客户反馈良好。', '山东淄博第一台化肥包装机测试完成，客户反馈良好。', '/SingCms/Public/upload/server/upload\\yc1.jpg', '1496988510');
INSERT INTO `cms_customer` VALUES ('4', '山东淄博', '山东淄博第一台化肥包装机测试完成，客户反馈良好。', '山东淄博第一台化肥包装机测试完成，客户反馈良好。', '/SingCms/Public/upload/server/upload\\yc1.jpg', '1496988521');
INSERT INTO `cms_customer` VALUES ('5', '山东淄博', '山东淄博第一台化肥包装机测试完成，客户反馈良好。', '山东淄博第一台化肥包装机测试完成，客户反馈良好。', '/SingCms/Public/upload/server/upload\\yc1.jpg', '1496988535');
INSERT INTO `cms_customer` VALUES ('6', '山东淄博', '山东淄博第一台化肥包装机测试完成，客户反馈良好。', '山东淄博第一台化肥包装机测试完成，客户反馈良好。', '/SingCms/Public/upload/server/upload\\yc1.jpg', '1496988537');
INSERT INTO `cms_customer` VALUES ('7', '山东淄博', '山东淄博第一台化肥包装机测试完成，客户反馈良好。', '山东淄博第一台化肥包装机测试完成，客户反馈良好。', '/SingCms/Public/upload/server/upload\\yc1.jpg', '1496988539');
INSERT INTO `cms_customer` VALUES ('8', '山东淄博', '山东淄博第一台化肥包装机测试完成，客户反馈良好。', '山东淄博第一台化肥包装机测试完成，客户反馈良好。', '/SingCms/Public/upload/server/upload\\yc1.jpg', '1496988541');
INSERT INTO `cms_customer` VALUES ('9', '山东淄博', '山东淄博第一台化肥包装机测试完成，客户反馈良好。', '山东淄博第一台化肥包装机测试完成，客户反馈良好。', '/SingCms/Public/upload/server/upload\\yc1.jpg', '1496988543');

-- ----------------------------
-- Table structure for cms_menu
-- ----------------------------
DROP TABLE IF EXISTS `cms_menu`;
CREATE TABLE `cms_menu` (
  `menu_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL DEFAULT '',
  `parentid` smallint(6) NOT NULL DEFAULT '0',
  `m` varchar(20) NOT NULL DEFAULT '',
  `c` varchar(20) NOT NULL DEFAULT '',
  `f` varchar(20) NOT NULL DEFAULT '',
  `data` varchar(100) NOT NULL DEFAULT '',
  `listorder` smallint(6) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`menu_id`),
  KEY `listorder` (`listorder`),
  KEY `parentid` (`parentid`),
  KEY `module` (`m`,`c`,`f`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cms_menu
-- ----------------------------
INSERT INTO `cms_menu` VALUES ('1', '菜单管理', '0', 'admin', 'menu', 'index', '', '10', '1', '1');
INSERT INTO `cms_menu` VALUES ('2', '新闻管理', '0', 'admin', 'Content', 'index', '', '0', '-1', '1');
INSERT INTO `cms_menu` VALUES ('3', '本站', '0', 'home', 'cat', 'index', '', '3', '1', '0');
INSERT INTO `cms_menu` VALUES ('4', '行业', '0', 'home', 'cat ', 'index', '', '0', '1', '0');
INSERT INTO `cms_menu` VALUES ('5', '汽车', '0', 'home', 'cat', 'index', '', '0', '-1', '0');
INSERT INTO `cms_menu` VALUES ('6', '新闻管理', '0', 'admin', 'content', 'index', '', '9', '1', '1');
INSERT INTO `cms_menu` VALUES ('7', '用户管理', '0', 'admin', 'user', 'index', '', '0', '-1', '1');
INSERT INTO `cms_menu` VALUES ('8', '科技', '0', 'home', 'cat', 'index', '', '0', '-1', '0');
INSERT INTO `cms_menu` VALUES ('11', '基本管理', '0', 'admin', 'basic', 'index', '', '0', '-1', '1');
INSERT INTO `cms_menu` VALUES ('12', '新闻', '0', 'home', 'cat', 'index', '', '0', '-1', '0');
INSERT INTO `cms_menu` VALUES ('13', '用户管理', '0', 'admin', 'admin', 'index', '', '0', '1', '1');
INSERT INTO `cms_menu` VALUES ('14', '产品管理', '0', 'admin', 'product', 'index', '', '0', '1', '1');
INSERT INTO `cms_menu` VALUES ('17', '客户管理', '0', 'admin', 'customer', 'index', '', '0', '1', '1');

-- ----------------------------
-- Table structure for cms_news
-- ----------------------------
DROP TABLE IF EXISTS `cms_news`;
CREATE TABLE `cms_news` (
  `news_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '新闻所属栏目',
  `title` varchar(80) NOT NULL DEFAULT '',
  `thumb` varchar(255) DEFAULT NULL COMMENT '封面图',
  `subject` varchar(200) NOT NULL DEFAULT '' COMMENT '摘要',
  `description` varchar(1250) NOT NULL COMMENT '文章描述',
  `posids` varchar(250) NOT NULL DEFAULT '',
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `username` char(20) NOT NULL,
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0',
  `count` int(10) unsigned NOT NULL DEFAULT '0',
  `from` varchar(10) DEFAULT NULL COMMENT '新闻来源(行业还是本站)',
  PRIMARY KEY (`news_id`),
  KEY `status` (`status`,`listorder`,`news_id`),
  KEY `listorder` (`catid`,`status`,`listorder`,`news_id`),
  KEY `catid` (`catid`,`status`,`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cms_news
-- ----------------------------
INSERT INTO `cms_news` VALUES ('49', '3', '水溶肥包装机第一台上线', '/SingCms/Public/upload/server/upload\\p2.jpg', '水溶肥包装机第一台上线', '水溶肥包装机第一台上线', '', '0', '1', 'admin', '1496578185', '0', '0', null);
INSERT INTO `cms_news` VALUES ('48', '3', '化肥包装机第一次上线', '/SingCms/Public/upload/server/upload\\p1.jpg', '化肥包装机第一次上线(摘要)', '化肥包装机第一次上线', '', '0', '1', 'admin', '1496578131', '0', '0', null);
INSERT INTO `cms_news` VALUES ('50', '3', '面粉包装机第一台上线', '/SingCms/Public/upload/server/upload\\p1.jpg', '面粉包装机第一台上线', '面粉包装机第一台上线', '', '0', '1', 'admin', '1496578217', '0', '0', null);
INSERT INTO `cms_news` VALUES ('51', '3', '条状袋包装机第一台上线', '/SingCms/Public/upload/server/upload\\p4.png', '条状袋包装机第一台上线', '条状袋包装机第一台上线', '', '0', '1', 'admin', '1496578864', '0', '0', null);
INSERT INTO `cms_news` VALUES ('52', '4', '化肥包装机第一次上线', '/SingCms/Public/upload/server/upload\\p1.jpg', '化肥包装机第一次上线，此次订单是为西安客户私家定制的，客户反', '化肥包装机第一次上线，此次订单是为西安客户私家定制的，客户反馈良好', '', '0', '1', 'admin', '1496579355', '0', '0', null);
INSERT INTO `cms_news` VALUES ('53', '4', '水溶肥包装机第一台上线', '/SingCms/Public/upload/server/upload\\p2.jpg', '水溶肥包装机第一台上线，客户反馈良好', '水溶肥包装机第一台上线，客户反馈良好', '', '0', '1', 'admin', '1496579408', '0', '0', null);
INSERT INTO `cms_news` VALUES ('54', '4', '面粉包装机第一台上线', '/SingCms/Public/upload/server/upload\\p2.jpg', '面粉包装机第一台上线，客户反馈良好', '面粉包装机第一台上线，客户反馈良好', '', '0', '1', 'admin', '1496579426', '0', '0', null);
INSERT INTO `cms_news` VALUES ('55', '4', '条状袋包装机第一台上线', '/SingCms/Public/upload/server/upload\\p2.jpg', '条状袋包装机第一台上线，客户反馈良好', '条状袋包装机第一台上线，客户反馈良好', '', '0', '1', 'admin', '1496579968', '0', '0', null);
INSERT INTO `cms_news` VALUES ('56', '4', '化肥包装机第一次上线', '/SingCms/Public/upload/server/upload\\p4.png', '化肥包装机第一次上线，此次订单是为西安客户私家定制的，客户反', '化肥包装机第一次上线，此次订单是为西安客户私家定制的，客户反', '', '0', '1', 'admin', '1496580013', '0', '0', null);
INSERT INTO `cms_news` VALUES ('57', '4', '面粉包装机第一次上线', '/SingCms/Public/upload/server/upload\\p4.png', '面粉包装机第一次上线，此次订单是为西安客户私家定制的，客户反', '面粉包装机第一次上线，此次订单是为西安客户私家定制的，客户反', '', '0', '1', 'admin', '1496580024', '0', '0', null);
INSERT INTO `cms_news` VALUES ('58', '4', '化肥包装机第一次上线', '/SingCms/Public/upload/server/upload\\p4.png', '化肥包装机第一次上线，此次订单是为西安客户私家定制的，客户反', '化肥包装机第一次上线，此次订单是为西安客户私家定制的，客户反', '', '0', '1', 'admin', '1496580034', '0', '0', null);
INSERT INTO `cms_news` VALUES ('59', '4', '面粉包装机第一次上线', '/SingCms/Public/upload/server/upload\\p4.png', '面粉包装机第一次上线，此次订单是为西安客户私家定制的，客户反', '面粉包装机第一次上线，此次订单是为西安客户私家定制的，客户反', '', '0', '1', 'admin', '1496580046', '0', '0', null);
INSERT INTO `cms_news` VALUES ('60', '4', '化肥包装机第一次上线', '/SingCms/Public/upload/server/upload\\p4.png', '化肥包装机第一次上线，此次订单是为西安客户私家定制的，客户反', '化肥包装机第一次上线，此次订单是为西安客户私家定制的，客户反', '', '0', '1', 'admin', '1496580062', '0', '0', null);
INSERT INTO `cms_news` VALUES ('61', '4', '面粉包装机第一次上线', '/SingCms/Public/upload/server/upload\\p4.png', '面粉包装机第一次上线，此次订单是为西安客户私家定制的，客户反', '面粉包装机第一次上线，此次订单是为西安客户私家定制的，客户反', '', '0', '1', 'admin', '1496580073', '0', '0', null);
INSERT INTO `cms_news` VALUES ('65', '3', '化肥包装机测试3', '/SingCms/Public/upload/server/upload\\yc1.jpg', '化肥包装机测试3', '化肥包装机测试3', '', '0', '1', 'admin', '1496987924', '0', '0', null);
INSERT INTO `cms_news` VALUES ('66', '3', '化肥包装机测试3', '/SingCms/Public/upload/server/upload\\yc1.jpg', '化肥包装机测试3', '化肥包装机测试3', '', '0', '-1', 'admin', '1496987956', '0', '0', null);
INSERT INTO `cms_news` VALUES ('67', '4', '中国包装机械参加德国包装展取得圆满成功', '/SingCms/Public/upload/server/upload\\yc1.jpg', '中国包装机械参加德国包装展取得圆满成功', '中国包装机械参加德国包装展取得圆满成功', '', '0', '1', 'admin', '1496991539', '0', '0', null);

-- ----------------------------
-- Table structure for cms_news_content
-- ----------------------------
DROP TABLE IF EXISTS `cms_news_content`;
CREATE TABLE `cms_news_content` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `news_id` mediumint(8) unsigned NOT NULL,
  `content` mediumtext NOT NULL,
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `news_id` (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cms_news_content
-- ----------------------------
INSERT INTO `cms_news_content` VALUES ('7', '17', '&lt;p&gt;\r\n	gsdggsgsgsgsg\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	sgsg\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	gsdgsg \r\n&lt;/p&gt;\r\n&lt;p style=&quot;text-align:center;&quot;&gt;\r\n	       ggg\r\n&lt;/p&gt;', '1455756856', '0');
INSERT INTO `cms_news_content` VALUES ('8', '18', '&lt;p&gt;\r\n	你好\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	我很好dsggfg\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	gsgfgdfgd\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	gggg\r\n&lt;/p&gt;', '1455756999', '0');
INSERT INTO `cms_news_content` VALUES ('9', '19', '111', '1456673467', '0');
INSERT INTO `cms_news_content` VALUES ('10', '20', '111', '1456674909', '0');
INSERT INTO `cms_news_content` VALUES ('11', '21', '&lt;p&gt;\r\n	&lt;span style=&quot;font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;font-size:16px;line-height:32px;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; 3月13日下午，中共中央总书记、国家主席、中央军委主席习近平出席十二届全国人大四次会议解放军代表团全体会议，并发表重要讲话。&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span style=&quot;font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;font-size:16px;line-height:32px;&quot;&gt;&lt;img src=&quot;/upload/2016/03/13/56e519acb12ee.png&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;\r\n&lt;/span&gt;\r\n&lt;/p&gt;', '1457854896', '0');
INSERT INTO `cms_news_content` VALUES ('12', '22', '&lt;p style=&quot;font-size:16px;font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;&quot;&gt;\r\n	&amp;nbsp; &amp;nbsp; “部长通道”是今年两会一大亮点，成为两会开放透明和善待媒体的一个象征。在这个通道上，以往记者拉着喊着部长接受采访的场景不见了，变为部长主动站出来回应关切，甚至变成部长排队10多分钟等着接受采访。媒体报道称，两会前李克强总理接连两次“发话”，要求各部委主要负责人“要积极回应舆论关切”。部长主动放料，使这个通道上传出了很多新闻，如交通部长对拥堵费传闻的回应，人社部部长称网传延迟退休时间表属误读等。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:16px;font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;&quot;&gt;\r\n	&amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;img src=&quot;/upload/2016/03/13/56e51b7fcd445.jpg&quot; alt=&quot;&quot; /&gt;\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:16px;font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;&quot;&gt;\r\n	&amp;nbsp; &amp;nbsp; &amp;nbsp; 记者之所以喜欢跑两会，原因之一是两会上高官云集，能“堵”到、“逮”到、“抢”到很多大新闻——现在不需要堵、逮和抢，部长们主动曝料，打通了各种阻隔，树立了开明开放的政府形象。期待“部长通道”不只在两会期间存在，最好能成为一种官媒交流、官民沟通的常态化新闻通道。\r\n&lt;/p&gt;\r\n&lt;p style=&quot;font-size:16px;font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;&quot;&gt;\r\n	&lt;span style=&quot;font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;font-size:16px;line-height:32px;&quot;&gt;部长们多面对媒体多发言，不仅能提高自身的媒介素养，也带动部门新闻发言人，更加重视与媒体沟通。部长直接面对媒体回应关切，还能直接读到民情民生民意，而不是看别人的舆情汇报。&lt;/span&gt;\r\n&lt;/p&gt;', '1457855362', '0');
INSERT INTO `cms_news_content` VALUES ('13', '23', '&lt;p&gt;\r\n	&lt;span style=&quot;color:#666666;font-family:\'Microsoft Yahei\', 微软雅黑, SimSun, 宋体, \'Arial Narrow\', serif;font-size:14px;line-height:28px;background-color:#FFFFFF;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; 2016年3月13日，2016年中超联赛第2轮：重庆力帆vs河南建业，主场美女球迷争芳斗艳。&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span style=&quot;color:#666666;font-family:\'Microsoft Yahei\', 微软雅黑, SimSun, 宋体, \'Arial Narrow\', serif;font-size:14px;line-height:28px;background-color:#FFFFFF;&quot;&gt;&lt;img src=&quot;/upload/2016/03/13/56e51cb17542e.png&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/upload/2016/03/13/56e51cb180f8a.png&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;\r\n&lt;/span&gt;\r\n&lt;/p&gt;', '1457855680', '0');
INSERT INTO `cms_news_content` VALUES ('14', '24', '<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	新浪体育讯　　北京时间2016年3月12日晚7点35分，2016年中超联赛第2轮的一场比赛在天津水滴体育场进行。由天津泰达主场对阵广州富力。上半场双方机会都不多，<strong>下半场第57分钟，常飞亚左路护住皮球回做，汪嵩迎球直接远射世界波破门。随后天津泰达尽管全力进攻，但伊万诺维奇和迪亚涅都浪费了近在咫尺的机会</strong>，最终不得不0-1主场告负。\r\n</p>\r\n<p>\r\n	<img src=\"/upload/2016/03/13/56e51f63a5742.png\" alt=\"\" width=\"474\" height=\"301\" title=\"\" align=\"\" /> \r\n</p>\r\n<p>\r\n	由于首轮中超对阵北京国安的比赛延期举行，因此本场比赛实际上是天津泰达本赛季的首次亮相。新援蒙特罗领衔锋线，两名外援中后卫均首发出场。另一方面，在首轮主场不敌中超新贵河北华夏之后，本赛季球员流失较多的广州富力也许不得不早早开始他们的保级谋划。本场陈志钊红牌停赛，澳大利亚外援吉安努顶替了上轮首发的肖智。\r\n</p>\r\n<p>\r\n	广州富力显然更快地适应了比赛节奏。第3分钟，吉安努前插领球大步杀入禁区形成单刀，回防的赞纳迪内果断放铲化解险情。第8分钟，雷纳尔迪尼奥左路踩单车过人后低平球传中，约万诺维奇伸出大长腿将球挡出底线。第14分钟，富力队左路传中到远点，聂涛头球解围险些失误，送出本场比赛第一个角球。\r\n</p>\r\n<p>\r\n	天津队中场的配合逐渐找到一些感觉。第23分钟，天津队通过一连串小配合打到左路，周海滨下底传中被挡出底线。角球被富力队顶出后天津队二次将球传到禁区前沿，蒙特罗转身后射门但软弱无力被程月磊得到。第27分钟，约万诺维奇断球后直塞蒙特罗，蒙特罗转身晃开后卫在禁区外大力轰门打高。第29分钟，瓦格纳任意球吊入禁区，程月磊出击失误没有击到球，天津队后点将球再次传中，姜至鹏在对方夹击下奋力将球顶出底线。\r\n</p>\r\n<p>\r\n	双方都没有太好的打开僵局的办法，开始陷入苦战。第33分钟，常飞亚左路晃开空档突然起脚，皮球擦着近门柱稍稍偏出底线。第43分钟，白岳峰被雷纳尔迪尼奥断球得手，后者利用速度甩开约万诺维奇，低平球传中又躲过了赞纳迪内的滑铲，但吉安努门前近在咫尺的推射被杨启鹏神奇地单腿挡出！双方半场只得0-0互交白卷。\r\n</p>\r\n<p>\r\n	中场休息双方都没有换人。第47分钟，蒙特罗前场扣过多名对方队员后将球交给周海滨，但周海滨传中时禁区内的胡人天越位在先。第51分钟，王嘉楠右路晃开聂涛下底，但传中球又高又远。第54分钟，雷纳尔迪尼奥中场拿球挑过李本舰，后者无奈将其放倒吃到黄牌。第57分钟，常飞亚左路护住皮球回做，汪嵩迎球直接远射，杨启鹏鞭长莫及，皮球呼啸着直挂远角！世界波！富力队客场1-0取得领先。\r\n</p>\r\n<p>\r\n	第62分钟，瓦格纳任意球吊到禁区，程月磊再次拿球脱手，幸亏张耀坤将球踢出了边线。天津队率先做出调整，迪亚涅和周通两名前锋登场换下郭皓和瓦格纳。第64分钟，天津队右路传中，周通禁区内甩头攻门，程月磊侧扑将球得到。富力队并未保守。第66分钟，常飞亚左路连续盘带杀入禁区，小角度射门打偏。不过一分钟，雷纳尔迪尼奥禁区右角远射，皮球在门前反弹后稍稍偏出。\r\n</p>\r\n<p>\r\n	第71分钟，吉安努禁区角上回做，常飞亚跟进远射，杨启鹏单掌将球托出。天津队马上打出反击，蒙特罗禁区内转身将球分到右路，胡人天的传中找到后排插上的周海滨，但后者的大力头球顶得太正被程月磊侯个正着。富力队肖智换下卢琳。第74分钟，迪亚涅依靠强壮的身体杀入禁区直塞，蒙特罗停球后射门被密集防守的后卫挡出。\r\n</p>\r\n<p>\r\n	于洋换下雷纳尔迪尼奥，富力队加强防守。第81分钟，天津队角球开出，迪亚涅甩头攻门顶偏。天津队连续得到角球机会。第85分钟，天津队角球二次进攻，周通传中，蒙特罗后点头球回做，约万诺维奇离门不到两米处转身扫射竟然将球踢飞！\r\n</p>\r\n<div id=\"ad_33\" class=\"otherContent_01\" style=\"margin:10px 20px 10px 0px;padding:4px;\">\r\n	<iframe width=\"300px\" height=\"250px\" frameborder=\"0\" src=\"http://img.adbox.sina.com.cn/ad/28543.html\">\r\n	</iframe>\r\n</div>\r\n<p>\r\n	天津队范柏群换下李本舰。富力队用宁安换下常飞亚。第88分钟，胡人天战术犯规吃到黄牌。天津队久攻不下，第90分钟，赞纳迪内40米开外远射打偏。第93分钟，蒙特罗左路传中，迪亚涅头球争顶下来之后顺势扫射，皮球贴着横梁高出。广州富力最终将优势保持到了终场取得三分。\r\n</p>\r\n<p>\r\n	进球信息：\r\n</p>\r\n<p>\r\n	天津泰达：无。\r\n</p>\r\n<p>\r\n	广州富力：第58分钟，卢琳左路回做，汪嵩跟上远射破网。\r\n</p>\r\n<p>\r\n	黄牌信息：\r\n</p>\r\n<p>\r\n	天津泰达：第54分钟，李本舰。第88分钟，胡人天。\r\n</p>\r\n<p>\r\n	广州富力：无。\r\n</p>\r\n<p>\r\n	红牌信息：\r\n</p>\r\n<p>\r\n	无。\r\n</p>\r\n<p>\r\n	双方出场阵容：\r\n</p>\r\n<p>\r\n	天津泰达（4-5-1）：29-杨启鹏，23-聂涛、3-赞纳迪内、5-约万诺维奇、19-白岳峰，6-周海滨、7-李本舰（86分钟，28-范柏群）、8-胡人天、11-瓦格纳（63分钟，9-迪亚涅）、22-郭皓（63分钟，33-周通），10-蒙特罗；\r\n</p>\r\n<p>\r\n	广州富力（4-5-1）：1-程月磊，11-姜至鹏、5-张耀坤、22-张贤秀、28-王嘉楠，7-斯文森、21-常飞亚（88分钟，15-宁安）、23-卢琳（73分钟，29-肖智）、31-雷纳尔迪尼奥（77分钟，3-于洋）、33-汪嵩，9-吉安努。\r\n</p>\r\n<p>\r\n	（卢小挠）\r\n</p>\r\n<div>\r\n</div>\r\n<div style=\"font-size:0px;\">\r\n</div>\r\n<p>\r\n	<br />\r\n</p>', '1457856460', '0');
INSERT INTO `cms_news_content` VALUES ('15', '25', 'fadsfasf', '1496241686', '0');
INSERT INTO `cms_news_content` VALUES ('16', '26', 'fadfafafafafweizhi', '1496299548', '0');
INSERT INTO `cms_news_content` VALUES ('17', '27', 'test1', '1496314936', '0');
INSERT INTO `cms_news_content` VALUES ('18', '28', 'test1', '1496314976', '0');
INSERT INTO `cms_news_content` VALUES ('19', '29', 'tests2', '1496315109', '0');
INSERT INTO `cms_news_content` VALUES ('20', '30', 'fdsaf', '1496326188', '0');
INSERT INTO `cms_news_content` VALUES ('21', '30', 'fdsaf', '1496326188', '0');
INSERT INTO `cms_news_content` VALUES ('22', '31', '这是一个很好的包装机这是一个很好的包装机这是一个很好的包装机这是一个很好的包装机这是一个很好的包装机这是一个很好的包装机这是一个很好的包装机这是一个很好的包装机这是一个很好的包装机这是一个很好的包装机这是一个很好的包装机这是一个很好的包装机这是一个很好的包装机这是一个很好的包装机这是一个很好的包装机这是一个很好的包装机这是一个很好的包装机', '1496371506', '0');
INSERT INTO `cms_news_content` VALUES ('23', '32', 'test', '1496373951', '0');
INSERT INTO `cms_news_content` VALUES ('24', '33', 'tgewta', '1496375743', '0');
INSERT INTO `cms_news_content` VALUES ('25', '34', 'fadsfa', '1496563536', '0');
INSERT INTO `cms_news_content` VALUES ('26', '35', 'ttes', '1496566573', '0');

-- ----------------------------
-- Table structure for cms_news_img
-- ----------------------------
DROP TABLE IF EXISTS `cms_news_img`;
CREATE TABLE `cms_news_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) DEFAULT NULL COMMENT '表示此图片属于哪个新闻',
  `imgpath` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_news_img
-- ----------------------------
INSERT INTO `cms_news_img` VALUES ('5', '46', '/SingCms/Public/upload/server/upload\\img2.jpg');
INSERT INTO `cms_news_img` VALUES ('6', '47', '/SingCms/Public/upload/server/upload\\05.jpg');
INSERT INTO `cms_news_img` VALUES ('7', '48', '/SingCms/Public/upload/server/upload\\p1.jpg');
INSERT INTO `cms_news_img` VALUES ('8', '49', '/SingCms/Public/upload/server/upload\\p2.jpg');
INSERT INTO `cms_news_img` VALUES ('9', '50', '/SingCms/Public/upload/server/upload\\p1.jpg');
INSERT INTO `cms_news_img` VALUES ('10', '51', '/SingCms/Public/upload/server/upload\\p4.png');
INSERT INTO `cms_news_img` VALUES ('11', '52', '/SingCms/Public/upload/server/upload\\p1.jpg');
INSERT INTO `cms_news_img` VALUES ('12', '53', '/SingCms/Public/upload/server/upload\\p2.jpg');
INSERT INTO `cms_news_img` VALUES ('13', '54', '/SingCms/Public/upload/server/upload\\p2.jpg');
INSERT INTO `cms_news_img` VALUES ('14', '55', '/SingCms/Public/upload/server/upload\\p2.jpg');
INSERT INTO `cms_news_img` VALUES ('15', '56', '/SingCms/Public/upload/server/upload\\p4.png');
INSERT INTO `cms_news_img` VALUES ('16', '57', '/SingCms/Public/upload/server/upload\\p4.png');
INSERT INTO `cms_news_img` VALUES ('17', '58', '/SingCms/Public/upload/server/upload\\p4.png');
INSERT INTO `cms_news_img` VALUES ('18', '59', '/SingCms/Public/upload/server/upload\\p4.png');
INSERT INTO `cms_news_img` VALUES ('19', '60', '/SingCms/Public/upload/server/upload\\p4.png');
INSERT INTO `cms_news_img` VALUES ('20', '61', '/SingCms/Public/upload/server/upload\\p4.png');
INSERT INTO `cms_news_img` VALUES ('21', '62', '/SingCms/Public/upload/server/upload\\p1.jpg');
INSERT INTO `cms_news_img` VALUES ('22', '63', '/SingCms/Public/upload/server/upload\\p1.jpg');
INSERT INTO `cms_news_img` VALUES ('23', '64', '/SingCms/Public/upload/server/upload\\p1.jpg');
INSERT INTO `cms_news_img` VALUES ('24', '65', '/SingCms/Public/upload/server/upload\\yc1.jpg');
INSERT INTO `cms_news_img` VALUES ('25', '66', '/SingCms/Public/upload/server/upload\\yc1.jpg');
INSERT INTO `cms_news_img` VALUES ('26', '67', '/SingCms/Public/upload/server/upload\\yc1.jpg');

-- ----------------------------
-- Table structure for cms_position
-- ----------------------------
DROP TABLE IF EXISTS `cms_position`;
CREATE TABLE `cms_position` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `description` char(100) DEFAULT NULL,
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cms_position
-- ----------------------------
INSERT INTO `cms_position` VALUES ('1', '首页大图', '-1', '展示首页大图的推荐位1', '1455634352', '0');
INSERT INTO `cms_position` VALUES ('2', '首页大图', '1', '展示首页大图的', '1455634715', '0');
INSERT INTO `cms_position` VALUES ('3', '小图推荐', '1', '小图推荐位', '1456665873', '0');
INSERT INTO `cms_position` VALUES ('4', '首页后侧推荐位', '-1', '', '1457248469', '0');
INSERT INTO `cms_position` VALUES ('5', '右侧广告位', '1', '右侧广告位', '1457873143', '0');

-- ----------------------------
-- Table structure for cms_position_content
-- ----------------------------
DROP TABLE IF EXISTS `cms_position_content`;
CREATE TABLE `cms_position_content` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` int(5) unsigned NOT NULL,
  `title` varchar(30) NOT NULL DEFAULT '',
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(100) DEFAULT NULL,
  `news_id` mediumint(8) unsigned NOT NULL,
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cms_position_content
-- ----------------------------
INSERT INTO `cms_position_content` VALUES ('28', '2', '习近平今日下午出席解放军代表团全体会议', '/upload/2016/03/13/56e519a185c93.png', null, '21', '0', '1', '1457854896', '0');
INSERT INTO `cms_position_content` VALUES ('27', '2', '文章18测试sss', '/upload/2016/03/07/56dcc0158f70e.JPG', '', '18', '0', '-1', '1457306930', '0');
INSERT INTO `cms_position_content` VALUES ('26', '2', 'ss', '/upload/2016/03/07/56dcbce02cab9.JPG', 'http://sina.com.cn', '0', '0', '-1', '1457306890', '0');
INSERT INTO `cms_position_content` VALUES ('25', '3', 'test', '/upload/2016/03/06/56dbdc0c483af.JPG', null, '17', '0', '-1', '1455756856', '0');
INSERT INTO `cms_position_content` VALUES ('23', '2', 'test', '/upload/2016/03/06/56dbdc0c483af.JPG', null, '17', '1', '-1', '1455756856', '0');
INSERT INTO `cms_position_content` VALUES ('24', '2', '你好ssss', '/upload/2016/03/06/56dbdc015e662.JPG', null, '18', '2', '-1', '1455756999', '0');
INSERT INTO `cms_position_content` VALUES ('29', '3', '李克强让部长们当第一新闻发言人', '/upload/2016/03/13/56e51b6ac8ce2.jpg', null, '22', '12', '1', '1457855362', '0');
INSERT INTO `cms_position_content` VALUES ('30', '3', '重庆美女球迷争芳斗艳', '/upload/2016/03/13/56e51cbd34470.png', null, '23', '0', '1', '1457855680', '0');
INSERT INTO `cms_position_content` VALUES ('31', '3', '中超-汪嵩世界波制胜 富力客场1-0力擒泰达', '/upload/2016/03/13/56e51fc82b13a.png', null, '24', '0', '1', '1457856460', '0');
INSERT INTO `cms_position_content` VALUES ('32', '5', '2015劳伦斯国际体坛精彩瞬间', '/upload/2016/03/13/56e5612d525c3.png', 'http://sports.sina.com.cn/laureus/moment2015/', '0', '0', '1', '1457873220', '0');
INSERT INTO `cms_position_content` VALUES ('33', '5', 'singwa老师教您如何学PHP', '/upload/2016/03/13/56e56211c68e7.jpg', 'http://t.imooc.com/space/teacher/id/255838', '0', '0', '1', '1457873435', '0');
INSERT INTO `cms_position_content` VALUES ('34', '2', '习近平今日下午出席解放军代表团全体会议', '/upload/2016/03/13/56e519a185c93.png', null, '21', '0', '1', '1457854896', '0');
INSERT INTO `cms_position_content` VALUES ('35', '2', '中超-汪嵩世界波制胜 富力客场1-0力擒泰达', '/upload/2016/03/13/56e51fc82b13a.png', null, '24', '0', '1', '1457856460', '0');

-- ----------------------------
-- Table structure for cms_product
-- ----------------------------
DROP TABLE IF EXISTS `cms_product`;
CREATE TABLE `cms_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_classify_id` int(11) DEFAULT NULL,
  `product_subject` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `thumb` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `product_desc` varchar(1255) CHARACTER SET utf8 DEFAULT NULL,
  `create_time` int(10) DEFAULT NULL,
  `product_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_product
-- ----------------------------
INSERT INTO `cms_product` VALUES ('9', '5', '化肥包装机测试1', '/SingCms/Public/upload/server/upload\\p3.png', '化肥包装机测试1', '1496832385', '化肥包装机测试1');
INSERT INTO `cms_product` VALUES ('10', '5', '化肥包装机测试3', '/SingCms/Public/upload/server/upload\\p3.png', '化肥包装机测试3', '1496832394', '化肥包装机测试3');
INSERT INTO `cms_product` VALUES ('11', '5', '化肥包装机测试5', '/SingCms/Public/upload/server/upload\\p3.png', '化肥包装机测试5', '1496832400', '化肥包装机测试5');
INSERT INTO `cms_product` VALUES ('12', '5', '化肥包装机测试7', '/SingCms/Public/upload/server/upload\\p3.png', '化肥包装机测试7', '1496832406', '化肥包装机测试7');
INSERT INTO `cms_product` VALUES ('13', '5', '化肥包装机测试9', '/SingCms/Public/upload/server/upload\\p3.png', '化肥包装机测试9', '1496832413', '化肥包装机测试9');
INSERT INTO `cms_product` VALUES ('14', '9', '包装机测试2', '/SingCms/Public/upload/server/upload\\p3.png', '包装机测试2', '1496832491', '包装机测试2');
INSERT INTO `cms_product` VALUES ('16', '9', '化肥包装机测试', '/SingCms/Public/upload/server/upload\\p4.png', '化肥包装机测试', '1496928270', '化肥包装机测试');
INSERT INTO `cms_product` VALUES ('17', '9', '化肥包装机测试2', '/SingCms/Public/upload/server/upload\\p4.png', '化肥包装机测试2', '1496928309', '化肥包装机测试2');
INSERT INTO `cms_product` VALUES ('18', '7', '化肥包装机测试23', '/SingCms/Public/upload/server/upload\\p4.png', '化肥包装机测试23', '1496928324', '化肥包装机测试3');
INSERT INTO `cms_product` VALUES ('19', '6', '面粉包装机测试', '/SingCms/Public/upload/server/upload\\p3.png', '面粉包装机测试', '1496928509', '面粉包装机测试');
INSERT INTO `cms_product` VALUES ('20', '6', '面粉包装机测试', '/SingCms/Public/upload/server/upload\\p3.png', '面粉包装机测试', '1496928513', '面粉包装机测试');
INSERT INTO `cms_product` VALUES ('21', '6', '面粉包装机测试', '/SingCms/Public/upload/server/upload\\p3.png', '面粉包装机测试', '1496928517', '面粉包装机测试');
INSERT INTO `cms_product` VALUES ('22', '6', '面粉包装机测试', '/SingCms/Public/upload/server/upload\\p3.png', '面粉包装机测试', '1496928519', '面粉包装机测试');
INSERT INTO `cms_product` VALUES ('23', '6', '面粉包装机测试', '/SingCms/Public/upload/server/upload\\p3.png', '面粉包装机测试', '1496928521', '面粉包装机测试');
INSERT INTO `cms_product` VALUES ('24', '6', '面粉包装机测试', '/SingCms/Public/upload/server/upload\\p3.png', '面粉包装机测试', '1496928522', '面粉包装机测试');
INSERT INTO `cms_product` VALUES ('25', '6', '面粉包装机测试', '/SingCms/Public/upload/server/upload\\p3.png', '面粉包装机测试', '1496928525', '面粉包装机测试');
INSERT INTO `cms_product` VALUES ('26', '6', '面粉包装机测试', '/SingCms/Public/upload/server/upload\\p3.png', '面粉包装机测试', '1496928527', '面粉包装机测试');
INSERT INTO `cms_product` VALUES ('27', '6', '面粉包装机测试', '/SingCms/Public/upload/server/upload\\p3.png', '面粉包装机测试', '1496928530', '面粉包装机测试');
INSERT INTO `cms_product` VALUES ('28', '9', '包装机测试', '/SingCms/Public/upload/server/upload\\p6.jpg', '包装机测试', '1496932093', '包装机测试');
INSERT INTO `cms_product` VALUES ('29', '7', '包装机测试2', '/SingCms/Public/upload/server/upload\\yc1.jpg', '包装机测试2', '1496976199', '包装机测试2');
INSERT INTO `cms_product` VALUES ('30', '16', '全自动包装机测试', '/SingCms/Public/upload/server/upload\\p3.png', '全自动包装机测试', '1496995957', '全自动包装机测试');
INSERT INTO `cms_product` VALUES ('31', '16', '全自动包装机测试', '/SingCms/Public/upload/server/upload\\p3.png', '全自动包装机测试', '1496995968', '全自动包装机测试');
INSERT INTO `cms_product` VALUES ('32', '16', '全自动包装机测试', '/SingCms/Public/upload/server/upload\\p3.png', '全自动包装机测试', '1496995972', '全自动包装机测试');
INSERT INTO `cms_product` VALUES ('33', '15', '全自动包装机测试', '/SingCms/Public/upload/server/upload\\p3.png', '全自动包装机测试', '1496995975', '全自动包装机测试');
INSERT INTO `cms_product` VALUES ('34', '15', '全自动包装机测试', '/SingCms/Public/upload/server/upload\\p3.png', '全自动包装机测试', '1496995977', '全自动包装机测试');
INSERT INTO `cms_product` VALUES ('35', '15', '全自动包装机测试', '/SingCms/Public/upload/server/upload\\p3.png', '全自动包装机测试', '1496995979', '全自动包装机测试');
INSERT INTO `cms_product` VALUES ('36', '14', '智能化包装机生产线测试', '/SingCms/Public/upload/server/upload\\p7.png', '智能化包装机生产线测试', '1496996029', '智能化包装机生产线测试');
INSERT INTO `cms_product` VALUES ('37', '14', '智能化包装机生产线测试', '/SingCms/Public/upload/server/upload\\p7.png', '智能化包装机生产线测试', '1496996031', '智能化包装机生产线测试');
INSERT INTO `cms_product` VALUES ('38', '14', '智能化包装机生产线测试', '/SingCms/Public/upload/server/upload\\p7.png', '智能化包装机生产线测试', '1496996032', '智能化包装机生产线测试');
INSERT INTO `cms_product` VALUES ('39', '13', '多列式条包机测试', '/SingCms/Public/upload/server/upload\\yc1.jpg', '多列式条包机测试', '1496996068', '多列式条包机测试');
INSERT INTO `cms_product` VALUES ('40', '13', '多列式条包机测试', '/SingCms/Public/upload/server/upload\\yc1.jpg', '多列式条包机测试', '1496996071', '多列式条包机测试');
INSERT INTO `cms_product` VALUES ('41', '13', '多列式条包机测试', '/SingCms/Public/upload/server/upload\\yc1.jpg', '多列式条包机测试', '1496996073', '多列式条包机测试');
INSERT INTO `cms_product` VALUES ('42', '16', '全自动水溶肥包装机测试', '/SingCms/Public/upload/server/upload\\p6.jpg', '全自动水溶肥包装机测试', '1497069955', '全自动水溶肥包装机测试');

-- ----------------------------
-- Table structure for cms_product_classify
-- ----------------------------
DROP TABLE IF EXISTS `cms_product_classify`;
CREATE TABLE `cms_product_classify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_classify_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_product_classify
-- ----------------------------
INSERT INTO `cms_product_classify` VALUES ('5', '化肥包装机');
INSERT INTO `cms_product_classify` VALUES ('6', '面粉包装机');
INSERT INTO `cms_product_classify` VALUES ('7', '全自动装盒包装机械');
INSERT INTO `cms_product_classify` VALUES ('8', '立式制袋称量包装机');
INSERT INTO `cms_product_classify` VALUES ('9', '重膜包装机');
INSERT INTO `cms_product_classify` VALUES ('11', ' 阀口袋包装机');
INSERT INTO `cms_product_classify` VALUES ('12', '超大型立式包装机');
INSERT INTO `cms_product_classify` VALUES ('13', '多列式条包机');
INSERT INTO `cms_product_classify` VALUES ('14', '智能化包装生产线');
INSERT INTO `cms_product_classify` VALUES ('15', '茶叶包装机');
INSERT INTO `cms_product_classify` VALUES ('16', '全自动包装机组');
