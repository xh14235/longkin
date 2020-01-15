<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `lonking_ecms_single_data_1`;");
E_C("CREATE TABLE `lonking_ecms_single_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` char(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` char(80) NOT NULL DEFAULT '',
  `detail` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `lonking_ecms_single_data_1` values('1','17','','0','13','0','0','','<p>琅琨简介</p>\r\n<p>琅琨简介</p>\r\n<p>琅琨简介</p>\r\n<p>&nbsp;</p>\r\n<p>111</p>');");
E_D("replace into `lonking_ecms_single_data_1` values('2','17','','0','0','0','0','','<p>荣誉资质荣誉资质荣誉资质</p>');");

@include("../../inc/footer.php");
?>