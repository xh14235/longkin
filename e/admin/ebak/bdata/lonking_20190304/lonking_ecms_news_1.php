<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `lonking_ecms_news`;");
E_C("CREATE TABLE `lonking_ecms_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` varchar(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` varchar(14) NOT NULL DEFAULT '',
  `titleurl` varchar(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` varchar(80) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` varchar(120) NOT NULL DEFAULT '',
  `intro` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8");
E_D("replace into `lonking_ecms_news` values('1','13','0','0','0','0','2019-01-05','1','1','admin','0','0','1','0','0','0','0','1546680296','1550306454','1','0','0','','/xinwenzhongxin/langkunxinwen/2019-01-05/1.html','1','1','1','','美控“新跨越”年终盛典精彩回顾','1547136000','/skin/default/images/pro-img.jpg','美控“新跨越”年终盛典精彩回顾');");
E_D("replace into `lonking_ecms_news` values('2','15','0','0','0','0','2019-02-16','2','1','admin','0','0','1','0','0','0','0','1550304951','1550305217','1','0','0','','/xinwenzhongxin/jiejuefangan/2019-02-16/2.html','1','1','1','','印染污水溶氧量监测就服“它”！','1550304885','/d/file/p/c0ac38666e26a5cba1f2c3a0f877b506.jpg','印染污水溶氧量监测就服“它”！');");
E_D("replace into `lonking_ecms_news` values('3','15','0','0','0','0','2019-02-16','3','1','admin','0','0','1','0','0','0','0','1550305409','1550305409','1','0','0','','/xinwenzhongxin/jiejuefangan/2019-02-16/3.html','1','1','1','','空调制冷供暖的背后还是“流量管控”！','1550305382','/d/file/p/5edd0894d966d8ac9716a07a3efe4911.jpg','空调制冷供暖的背后还是“流量管控”！');");
E_D("replace into `lonking_ecms_news` values('4','15','0','0','0','0','2019-02-16','4','1','admin','0','0','1','0','0','0','0','1550305597','1550305597','1','0','0','','/xinwenzhongxin/jiejuefangan/2019-02-16/4.html','1','1','1','','美丽仪表为食品“添”美味！','1550305411','/d/file/p/bcb6544b64ba1c38b5b30f6f5cf78a56.jpg','美丽仪表为食品“添”美味！');");
E_D("replace into `lonking_ecms_news` values('5','13','0','0','0','0','2019-02-16','5','1','admin','0','0','1','0','0','0','0','1550306504','1550306504','1','0','0','','/xinwenzhongxin/langkunxinwen/2019-02-16/5.html','1','1','1','','美控“新跨越”年终盛典精彩回顾','1550306463','/d/file/p/f183a321f03d67ce076961731496a33f.jpg','美控“新跨越”年终盛典精彩回顾');");
E_D("replace into `lonking_ecms_news` values('6','13','0','0','0','0','2019-02-16','6','1','admin','0','0','1','0','0','0','0','1550306608','1550306608','1','0','0','','/xinwenzhongxin/langkunxinwen/2019-02-16/6.html','1','1','1','','欢度元旦，喜迎2019','1550306586','/d/file/p/4ba431949492a86d6985ff18c5ce00c6.jpg','欢度元旦，喜迎2019');");
E_D("replace into `lonking_ecms_news` values('7','13','0','0','0','0','2019-02-16','7','1','admin','0','0','1','0','0','0','0','1550306630','1550306630','1','0','0','','/xinwenzhongxin/langkunxinwen/2019-02-16/7.html','1','1','1','','印染污水溶氧量监测就服“它”！','1550306611','/d/file/p/3903c6cf3d2ec477f69af1fe60b303fd.jpg','印染污水溶氧量监测就服“它”！');");
E_D("replace into `lonking_ecms_news` values('8','13','0','0','0','0','2019-02-16','8','1','admin','0','0','1','0','0','0','0','1550306685','1550306685','1','0','0','','/xinwenzhongxin/langkunxinwen/2019-02-16/8.html','1','1','1','','空调制冷供暖的背后还是“流量管控”！','1550306632','/d/file/p/b933e519da5297a363be20d6efb04e93.jpg','空调制冷供暖的背后还是“流量管控”！');");
E_D("replace into `lonking_ecms_news` values('9','13','0','0','0','0','2019-02-16','9','1','admin','0','0','1','0','0','0','0','1550306703','1550306703','1','0','0','','/xinwenzhongxin/langkunxinwen/2019-02-16/9.html','1','1','1','','电磁流量计在电镀废水处理上的应用','1550306687','/d/file/p/6594623bde2f58a40af7d47d2aab150f.jpg','电磁流量计在电镀废水处理上的应用');");
E_D("replace into `lonking_ecms_news` values('10','13','0','0','0','0','2019-02-16','10','1','admin','0','0','1','0','0','0','0','1550306723','1550306723','1','0','0','','/xinwenzhongxin/langkunxinwen/2019-02-16/10.html','1','1','1','','踏青出游！美控与春天的“约会”','1550306706','/d/file/p/4858519491c701bc7e56881b6b71bd9f.jpg','踏青出游！美控与春天的“约会”');");
E_D("replace into `lonking_ecms_news` values('11','13','0','0','0','0','2019-02-16','11','1','admin','0','0','1','0','0','0','0','1550306753','1550306753','1','0','0','','/xinwenzhongxin/langkunxinwen/2019-02-16/11.html','1','1','1','','清明节调休通知','1550306726','/d/file/p/693309167f7409d07015296bf2dd32ff.jpg','清明节调休通知');");
E_D("replace into `lonking_ecms_news` values('12','13','0','0','0','0','2019-02-16','12','1','admin','0','0','1','0','0','0','0','1550306778','1550306778','1','0','0','','/xinwenzhongxin/langkunxinwen/2019-02-16/12.html','1','1','1','','感动常在！美控服务昆山四海','1550306756','/d/file/p/cd1265cf1ac57b696ac5fcd97a398d37.jpg','感动常在！美控服务昆山四海');");
E_D("replace into `lonking_ecms_news` values('13','13','0','0','0','0','2019-02-16','13','1','admin','0','0','1','0','0','0','0','1550306815','1550306815','1','0','0','','/xinwenzhongxin/langkunxinwen/2019-02-16/13.html','1','1','1','','俄罗斯客人18日到访','1550306781','/d/file/p/b17fe551e7db025112def019d728298c.jpg','俄罗斯客人18日到访');");
E_D("replace into `lonking_ecms_news` values('14','13','0','0','0','0','2019-02-16','14','1','admin','0','0','1','0','0','0','0','1550306833','1550306833','1','0','0','','/xinwenzhongxin/langkunxinwen/2019-02-16/14.html','1','1','1','','全面迈进 “精品仪表4.0时代”','1550306817','/d/file/p/84b41d59c62c66c0e77f6cdd0b88a7f0.jpg','全面迈进 “精品仪表4.0时代”');");
E_D("replace into `lonking_ecms_news` values('15','14','0','0','0','0','2019-02-16','15','1','admin','0','0','0','0','0','0','0','1550306911','1550306911','1','0','0','','/xinwenzhongxin/hangyexinwen/2019-02-16/15.html','1','1','1','','有纸记录仪在14年春季全国制药机械展中展出','1550306907','','有纸记录仪在14年春季全国制药机械展中展出');");
E_D("replace into `lonking_ecms_news` values('16','14','0','0','0','0','2019-02-16','16','1','admin','0','0','0','0','0','0','0','1550306925','1550306925','1','0','0','','/xinwenzhongxin/hangyexinwen/2019-02-16/16.html','1','1','1','','感恩回馈，只因一路有你','1550306914','','感恩回馈，只因一路有你');");
E_D("replace into `lonking_ecms_news` values('17','14','0','0','0','0','2019-02-16','17','1','admin','0','0','0','0','0','0','0','1550306936','1550306936','1','0','0','','/xinwenzhongxin/hangyexinwen/2019-02-16/17.html','1','1','1','','夏季运动会圆满落幕','1550306927','','夏季运动会圆满落幕');");
E_D("replace into `lonking_ecms_news` values('18','14','0','0','0','0','2019-02-16','18','1','admin','0','0','0','0','0','0','0','1550306948','1550306948','1','0','0','','/xinwenzhongxin/hangyexinwen/2019-02-16/18.html','1','1','1','','春季运动会圆满落幕','1550306939','','春季运动会圆满落幕');");
E_D("replace into `lonking_ecms_news` values('19','14','0','0','0','0','2019-02-16','19','1','admin','0','0','0','0','0','0','0','1550306961','1550306961','1','0','0','','/xinwenzhongxin/hangyexinwen/2019-02-16/19.html','1','1','1','','压力变送器使用时的注意事项','1550306950','','压力变送器使用时的注意事项');");

@include("../../inc/footer.php");
?>