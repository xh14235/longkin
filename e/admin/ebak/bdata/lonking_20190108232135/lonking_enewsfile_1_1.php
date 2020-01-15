<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `lonking_enewsfile_1`;");
E_C("CREATE TABLE `lonking_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `lonking_enewsfile_1` values('1','1000040000000001','843551d22f96ca4dec81987501ee56a7.jpg','56328','2019-01-04','admin','1546613586','17','pro-img.jpg','1','0','1','0','0','0');");
E_D("replace into `lonking_enewsfile_1` values('2','1000040000000001','8ee66d279f238f37615542d5e01da19c.jpg','56328','2019-01-04','admin','1546613608','17','pro-img.jpg','1','0','1','0','0','0');");
E_D("replace into `lonking_enewsfile_1` values('10','1000010000000001','aac16ca25bdb50156d2f0d8bd425a882.jpg','43928','','admin','1546959950','5','industry.jpg','1','0','1','0','1','0');");

@include("../../inc/footer.php");
?>