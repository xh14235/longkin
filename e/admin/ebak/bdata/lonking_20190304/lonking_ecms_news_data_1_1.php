<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `lonking_ecms_news_data_1`;");
E_C("CREATE TABLE `lonking_ecms_news_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `detail` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `lonking_ecms_news_data_1` values('1','13','','0','0','0','0','','<h1 class=\\\\\"lansebi\\\\\" style=\\\\\"margin: 20px 0px 10px; padding: 0px; font-size: 16px; color: rgb(220, 31, 37); text-align: center; font-family: simsum;\\\\\">美控&ldquo;新跨越&rdquo;年终盛典精彩回顾</h1>');");
E_D("replace into `lonking_ecms_news_data_1` values('2','15','','0','0','0','0','','<p>水电费谁知道手动阀手动阀</p>');");
E_D("replace into `lonking_ecms_news_data_1` values('3','15','','0','0','0','0','','<p>斯大林看风景收到垃圾费阿世盗名，拉三等奖福利卡上电脑卡</p>');");
E_D("replace into `lonking_ecms_news_data_1` values('4','15','','0','0','0','0','','<p>美丽仪表为食品&ldquo;添&rdquo;美味！</p>');");
E_D("replace into `lonking_ecms_news_data_1` values('5','13','','0','0','0','0','','<p>&nbsp;手动阀啊啊手动阀阿斯蒂芬阿斯顿发斯蒂芬</p>');");
E_D("replace into `lonking_ecms_news_data_1` values('6','13','','0','0','0','0','','<h1 class=\\\\\"lansebi\\\\\" style=\\\\\"margin: 20px 0px 10px; padding: 0px; font-size: 16px; color: rgb(220, 31, 37); text-align: center; font-family: simsum;\\\\\">欢度元旦，喜迎2019</h1>');");
E_D("replace into `lonking_ecms_news_data_1` values('7','13','','0','0','0','0','','<h1 class=\\\\\"lansebi\\\\\" style=\\\\\"margin: 20px 0px 10px; padding: 0px; font-size: 16px; color: rgb(220, 31, 37); text-align: center; font-family: simsum;\\\\\">印染污水溶氧量监测就服&ldquo;它&rdquo;！</h1>');");
E_D("replace into `lonking_ecms_news_data_1` values('8','13','','0','0','0','0','','<h1 class=\\\\\"lansebi\\\\\" style=\\\\\"margin: 20px 0px 10px; padding: 0px; font-size: 16px; color: rgb(220, 31, 37); text-align: center; font-family: simsum;\\\\\">空调制冷供暖的背后还是&ldquo;流量管控&rdquo;！</h1>');");
E_D("replace into `lonking_ecms_news_data_1` values('9','13','','0','0','0','0','','<h1 class=\\\\\"lansebi\\\\\" style=\\\\\"margin: 20px 0px 10px; padding: 0px; font-size: 16px; color: rgb(220, 31, 37); text-align: center; font-family: simsum;\\\\\">电磁流量计在电镀废水处理上的应用</h1>');");
E_D("replace into `lonking_ecms_news_data_1` values('10','13','','0','0','0','0','','<h1 class=\\\\\"lansebi\\\\\" style=\\\\\"margin: 20px 0px 10px; padding: 0px; font-size: 16px; color: rgb(220, 31, 37); text-align: center; font-family: simsum;\\\\\">踏青出游！美控与春天的&ldquo;约会&rdquo;</h1>');");
E_D("replace into `lonking_ecms_news_data_1` values('11','13','','0','0','0','0','','<h1 class=\\\\\"lansebi\\\\\" style=\\\\\"margin: 20px 0px 10px; padding: 0px; font-size: 16px; color: rgb(220, 31, 37); text-align: center; font-family: simsum;\\\\\">清明节调休通知</h1>');");
E_D("replace into `lonking_ecms_news_data_1` values('12','13','','0','0','0','0','','<h1 class=\\\\\"lansebi\\\\\" style=\\\\\"margin: 20px 0px 10px; padding: 0px; font-size: 16px; color: rgb(220, 31, 37); text-align: center; font-family: simsum;\\\\\">感动常在！美控服务昆山四海</h1>');");
E_D("replace into `lonking_ecms_news_data_1` values('13','13','','0','0','0','0','','<h1 class=\\\\\"lansebi\\\\\" style=\\\\\"margin: 20px 0px 10px; padding: 0px; font-size: 16px; color: rgb(220, 31, 37); text-align: center; font-family: simsum;\\\\\">俄罗斯客人18日到访</h1>');");
E_D("replace into `lonking_ecms_news_data_1` values('14','13','','0','0','0','0','','<h1 class=\\\\\"lansebi\\\\\" style=\\\\\"margin: 20px 0px 10px; padding: 0px; font-size: 16px; color: rgb(220, 31, 37); text-align: center; font-family: simsum;\\\\\">全面迈进 &ldquo;精品仪表4.0时代&rdquo;</h1>');");
E_D("replace into `lonking_ecms_news_data_1` values('15','14','','0','0','0','0','','<h1 class=\\\\\"lansebi\\\\\" style=\\\\\"margin: 20px 0px 10px; padding: 0px; font-size: 16px; color: rgb(220, 31, 37); text-align: center; font-family: simsum;\\\\\">有纸记录仪在14年春季全国制药机械展中展出</h1>');");
E_D("replace into `lonking_ecms_news_data_1` values('16','14','','0','0','0','0','','<h1 class=\\\\\"lansebi\\\\\" style=\\\\\"margin: 20px 0px 10px; padding: 0px; font-size: 16px; color: rgb(220, 31, 37); text-align: center; font-family: simsum;\\\\\">感恩回馈，只因一路有你</h1>');");
E_D("replace into `lonking_ecms_news_data_1` values('17','14','','0','0','0','0','','<h1 class=\\\\\"lansebi\\\\\" style=\\\\\"margin: 20px 0px 10px; padding: 0px; font-size: 16px; color: rgb(220, 31, 37); text-align: center; font-family: simsum;\\\\\">夏季运动会圆满落幕</h1>');");
E_D("replace into `lonking_ecms_news_data_1` values('18','14','','0','0','0','0','','<h1 class=\\\\\"lansebi\\\\\" style=\\\\\"margin: 20px 0px 10px; padding: 0px; font-size: 16px; color: rgb(220, 31, 37); text-align: center; font-family: simsum;\\\\\">春季运动会圆满落幕</h1>');");
E_D("replace into `lonking_ecms_news_data_1` values('19','14','','0','0','0','0','','<h1 class=\\\\\"lansebi\\\\\" style=\\\\\"margin: 20px 0px 10px; padding: 0px; font-size: 16px; color: rgb(220, 31, 37); text-align: center; font-family: simsum;\\\\\">压力变送器使用时的注意事项</h1>');");

@include("../../inc/footer.php");
?>