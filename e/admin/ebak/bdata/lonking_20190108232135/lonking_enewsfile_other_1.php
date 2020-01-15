<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `lonking_enewsfile_other`;");
E_C("CREATE TABLE `lonking_enewsfile_other` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` tinyint(1) NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` tinyint(1) NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `modtype` (`modtype`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `lonking_enewsfile_other` values('1','0','d9ddb87fa2dd72952e3dbf8ffe4adc7e.jpg','72538','','admin','1546674504','0','video.jpg','1','0','5','0','2','1');");
E_D("replace into `lonking_enewsfile_other` values('2','0','27c7d211de1ce6f33bb8c0a72807f254.jpg','56328','','admin','1546674887','0','pro-img.jpg','1','0','5','0','2','1');");
E_D("replace into `lonking_enewsfile_other` values('3','0','small27c7d211de1ce6f33bb8c0a72807f254.jpg','3787','','admin','1546674887','0','[s]pro-img.jpg','1','0','5','0','2','1');");

@include("../../inc/footer.php");
?>