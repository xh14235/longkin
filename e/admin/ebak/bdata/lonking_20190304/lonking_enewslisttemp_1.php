<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `lonking_enewslisttemp`;");
E_C("CREATE TABLE `lonking_enewslisttemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `subnews` smallint(6) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `listvar` text NOT NULL,
  `rownum` smallint(6) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `showdate` varchar(50) NOT NULL DEFAULT '',
  `subtitle` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `docode` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `lonking_enewslisttemp` values('9','产品列表模板','<!DOCTYPE html>\r\n<html>\r\n<head>\r\n  <title>[!--pagetitle--]</title>\r\n  <meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\">\r\n  <meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\">\r\n  <meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width,initial-scale=1.0\\\\\">\r\n  <meta http-equiv=\\\\\"content-type\\\\\" content=\\\\\"txt/html; charset=utf-8\\\\\" />\r\n  <link rel=\\\\\"shortcut icon\\\\\" href=\\\\\"/favicon.ico\\\\\" type=\\\\\"image/x-icon\\\\\" />\r\n  <link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/skin/default/css/common.css\\\\\">\r\n  <link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/skin/default/css/product.css\\\\\">\r\n</head>\r\n<body>\r\n  [!--temp.header--]\r\n  <!-- 静态banner -->\r\n  <div class=\\\\\"calm\\\\\">\r\n    <img src=\\\\\"/skin/default/images/calm.jpg\\\\\" alt=\\\\\"\\\\\">\r\n  </div>\r\n  <!-- 面包屑导航 -->\r\n  <div class=\\\\\"crumb\\\\\">\r\n    <div class=\\\\\"container\\\\\">\r\n      <div class=\\\\\"crumb-box\\\\\">\r\n          <span>您现在的位置：[!--newsnav--]\r\n      </div>\r\n    </div>\r\n  </div>\r\n  <!-- 内容 -->\r\n  <div class=\\\\\"product\\\\\">\r\n    <div class=\\\\\"container\\\\\">\r\n      <div class=\\\\\"main clear\\\\\">\r\n        <div class=\\\\\"main-left\\\\\">\r\n          <div class=\\\\\"main-title\\\\\">[!--bclass.name--]</div>\r\n          [!--temp.product_left--]\r\n        </div>\r\n        <div class=\\\\\"main-right\\\\\">\r\n          <ul class=\\\\\"list-right clear\\\\\">\r\n            [!--empirenews.listtemp--]\r\n            <!--list.var1-->\r\n            [!--empirenews.listtemp--]\r\n          </ul>\r\n        </div>\r\n      </div>\r\n    </div>\r\n  </div>\r\n  [!--temp.footer--]\r\n</body>\r\n</html>','0','0','<li>\r\n  <a href=\\\\\"[!--titleurl--]\\\\\" target=\\\\\"_blank\\\\\">\r\n    <img src=\\\\\"[!--titlepic--]\\\\\" alt=\\\\\"\\\\\">\r\n    <p>[!--title--]</p>\r\n  </a>\r\n</li>','1','1','Y-m-d H:i:s','0','0','0');");
E_D("replace into `lonking_enewslisttemp` values('10','新闻列表模板','<!DOCTYPE html>\r\n<html>\r\n<head>\r\n  <title>[!--pagetitle--]</title>\r\n  <meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\">\r\n  <meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\">\r\n  <meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width,initial-scale=1.0\\\\\">\r\n  <meta http-equiv=\\\\\"content-type\\\\\" content=\\\\\"txt/html; charset=utf-8\\\\\" />\r\n  <link rel=\\\\\"shortcut icon\\\\\" href=\\\\\"/favicon.ico\\\\\" type=\\\\\"image/x-icon\\\\\" />\r\n  <link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/skin/default/css/common.css\\\\\">\r\n  <link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/skin/default/css/news.css\\\\\">\r\n</head>\r\n<body>\r\n  [!--temp.header--]\r\n  <!-- 静态banner -->\r\n  <div class=\\\\\"calm\\\\\">\r\n    <img src=\\\\\"/skin/default/images/calm.jpg\\\\\" alt=\\\\\"\\\\\">\r\n  </div>\r\n  <!-- 面包屑导航 -->\r\n  <div class=\\\\\"crumb\\\\\">\r\n    <div class=\\\\\"container\\\\\">\r\n      <div class=\\\\\"crumb-box\\\\\">\r\n          <span>您现在的位置：[!--newsnav--]\r\n      </div>\r\n    </div>\r\n  </div>\r\n  <!-- 内容 -->\r\n  <div class=\\\\\"product\\\\\">\r\n    <div class=\\\\\"container\\\\\">\r\n      <div class=\\\\\"main clear\\\\\">\r\n        <div class=\\\\\"main-left\\\\\">\r\n          <div class=\\\\\"main-title\\\\\">[!--bclass.name--]</div>\r\n          [!--temp.news_left--]\r\n        </div>\r\n        <div class=\\\\\"main-right\\\\\">\r\n          <div class=\\\\\"news-list\\\\\">\r\n            [!--empirenews.listtemp--]\r\n            <!--list.var1-->\r\n            [!--empirenews.listtemp--]\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n  </div>\r\n  [!--temp.footer--]\r\n</body>\r\n</html>','0','0','<div class=\\\\\"news-box\\\\\">\r\n  <a href=\\\\\"[!--titleurl--]\\\\\" class=\\\\\"news-title\\\\\" target=\\\\\"_blank\\\\\">[!--title--]</a>\r\n  <p class=\\\\\"news-desc\\\\\">[!--intro--]</p>\r\n  <a href=\\\\\"[!--titleurl--]\\\\\" class=\\\\\"news-more\\\\\" target=\\\\\"_blank\\\\\">&nbsp;>>&nbsp;查看详情</a>\r\n  <span class=\\\\\"news-time\\\\\">[!--newstime--]</span>\r\n</div>','1','2','Y-m-d H:i:s','0','0','0');");
E_D("replace into `lonking_enewslisttemp` values('11','工程列表模板','<!DOCTYPE html>\r\n<html>\r\n<head>\r\n  <title>[!--pagetitle--]</title>\r\n  <meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\">\r\n  <meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\">\r\n  <meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width,initial-scale=1.0\\\\\">\r\n  <meta http-equiv=\\\\\"content-type\\\\\" content=\\\\\"txt/html; charset=utf-8\\\\\" />\r\n  <link rel=\\\\\"shortcut icon\\\\\" href=\\\\\"/favicon.ico\\\\\" type=\\\\\"image/x-icon\\\\\" />\r\n  <link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/skin/default/css/common.css\\\\\">\r\n  <link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/skin/default/css/news.css\\\\\">\r\n</head>\r\n<body>\r\n  [!--temp.header--]\r\n  <!-- 静态banner -->\r\n  <div class=\\\\\"calm\\\\\">\r\n    <img src=\\\\\"/skin/default/images/calm.jpg\\\\\" alt=\\\\\"\\\\\">\r\n  </div>\r\n  <!-- 面包屑导航 -->\r\n  <div class=\\\\\"crumb\\\\\">\r\n    <div class=\\\\\"container\\\\\">\r\n      <div class=\\\\\"crumb-box\\\\\">\r\n          <span>您现在的位置：[!--newsnav--]\r\n      </div>\r\n    </div>\r\n  </div>\r\n  <!-- 内容 -->\r\n  <div class=\\\\\"product\\\\\">\r\n    <div class=\\\\\"container\\\\\">\r\n      <div class=\\\\\"main clear\\\\\">\r\n        <div class=\\\\\"main-left\\\\\">\r\n          <div class=\\\\\"main-title\\\\\">[!--bclass.name--]</div>\r\n          [!--temp.project_left--]\r\n        </div>\r\n        <div class=\\\\\"main-right\\\\\">\r\n          <div class=\\\\\"news-list\\\\\">\r\n            [!--empirenews.listtemp--]\r\n            <!--list.var1-->\r\n            [!--empirenews.listtemp--]\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n  </div>\r\n  [!--temp.footer--]\r\n</body>\r\n</html>','0','0','<div class=\\\\\"news-box\\\\\">\r\n    <a href=\\\\\"[!--titleurl--]\\\\\" class=\\\\\"news-title\\\\\" target=\\\\\"_blank\\\\\">[!--title--]</a>\r\n    <p class=\\\\\"news-desc\\\\\">[!--intro--]</p>\r\n    <a href=\\\\\"[!--titleurl--]\\\\\" class=\\\\\"news-more\\\\\" target=\\\\\"_blank\\\\\">&nbsp;>>&nbsp;查看详情</a>\r\n    <span class=\\\\\"news-time\\\\\">[!--newstime--]</span>\r\n  </div>','1','3','Y-m-d H:i:s','0','0','0');");
E_D("replace into `lonking_enewslisttemp` values('12','琅琨列表模板','1111','0','0','2222','0','4','Y-m-d H:i:s','0','0','0');");

@include("../../inc/footer.php");
?>