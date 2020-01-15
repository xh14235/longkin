<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `lonking_enewsclass`;");
E_C("CREATE TABLE `lonking_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8");
E_D("replace into `lonking_enewsclass` values('9','21','热量计','','0','25','10','10','0','9','|21|','1','chanpinzhongxin/reliang','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','热量计','0','0','1','product','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1546610847');");
E_D("replace into `lonking_enewsclass` values('7','21','涡街流量计','','0','25','10','10','0','9','|21|','1','chanpinzhongxin/wojie','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','涡街流量计','0','0','1','product','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1546610764');");
E_D("replace into `lonking_enewsclass` values('6','21','电磁流量计','','0','25','10','10','0','9','|21|','1','chanpinzhongxin/dianci','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','电磁流量计','0','0','1','product','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1546610743');");
E_D("replace into `lonking_enewsclass` values('8','21','气体流量计','','0','25','10','10','0','9','|21|','1','chanpinzhongxin/qiti','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','气体流量计','0','0','1','product','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1546610786');");
E_D("replace into `lonking_enewsclass` values('5','21','超声波流量计','','0','25','10','10','0','9','|21|','1','chanpinzhongxin/chaoshengbo','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','超声波流量计','0','0','1','product','0','0','2','2','newstime DESC','newstime DESC','','/skin/default/images/pro-img.jpg','1','0','0','0','0','0','0','','0','0','0','','9','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1546610517');");
E_D("replace into `lonking_enewsclass` values('10','21','液位计','','0','25','10','10','0','9','|21|','1','chanpinzhongxin/yewei','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','液位计','0','0','1','product','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1546610863');");
E_D("replace into `lonking_enewsclass` values('11','21','压力变送器','','0','25','10','10','0','9','|21|','1','chanpinzhongxin/yali','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','压力变送器','0','0','1','product','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1546610882');");
E_D("replace into `lonking_enewsclass` values('12','21','温度变送器','','0','25','10','10','0','9','|21|','1','chanpinzhongxin/wendu','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','温度变送器','0','0','1','product','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1546610898');");
E_D("replace into `lonking_enewsclass` values('13','22','琅琨新闻','','0','25','10','11','0','10','|22|','1','xinwenzhongxin/langkunxinwen','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','2','1','10','琅琨新闻','0','0','2','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','10','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1546610956');");
E_D("replace into `lonking_enewsclass` values('14','22','行业新闻','','0','25','10','11','0','10','|22|','1','xinwenzhongxin/hangyexinwen','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','2','1','10','行业新闻','0','0','2','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','10','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1546611052');");
E_D("replace into `lonking_enewsclass` values('15','22','解决方案','','0','25','10','11','0','10','|22|','1','xinwenzhongxin/jiejuefangan','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','2','1','10','解决方案','0','0','2','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','10','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1546611115');");
E_D("replace into `lonking_enewsclass` values('16','22','疑难解答','','0','25','10','11','0','10','|22|','1','xinwenzhongxin/yinanjieda','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','2','1','10','疑难解答','0','0','2','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','10','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1546611132');");
E_D("replace into `lonking_enewsclass` values('17','0','关于琅琨','','0','25','10','13','0','12','','1','about','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','4','1','10','关于琅琨','0','0','4','single','0','0','2','2','newstime DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','12','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','2','1546611607');");
E_D("replace into `lonking_enewsclass` values('18','20','一级污水处理','','0','25','10','12','0','11','|20|','1','gongchenganli/yijiwushui','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','3','1','10','一级污水处理','0','0','3','project','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','11','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1546611693');");
E_D("replace into `lonking_enewsclass` values('19','20','二级污水处理','','0','25','10','12','0','11','|20|','1','gongchenganli/erjiwushui','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','3','1','10','二级污水处理','0','0','3','project','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','11','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1546611717');");
E_D("replace into `lonking_enewsclass` values('20','0','工程案例','|18|19|','0','25','10','0','0','0','','0','gongchenganli','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','3','1','10','工程案例','0','0','3','project','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','4','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1546670771');");
E_D("replace into `lonking_enewsclass` values('21','0','产品中心','|5|6|7|8|9|10|11|12|','0','25','10','0','0','0','','0','chanpinzhongxin','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','产品中心','0','0','1','product','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1546670821');");
E_D("replace into `lonking_enewsclass` values('22','0','新闻中心','|13|14|15|16|','0','25','10','0','0','0','','0','xinwenzhongxin','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','2','1','10','新闻中心','0','0','2','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','5','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1546671162');");

@include("../../inc/footer.php");
?>