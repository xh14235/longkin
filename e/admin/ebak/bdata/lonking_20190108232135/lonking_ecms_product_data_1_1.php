<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `lonking_ecms_product_data_1`;");
E_C("CREATE TABLE `lonking_ecms_product_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `tec` mediumtext NOT NULL,
  `detail` mediumtext NOT NULL,
  `typical` mediumtext NOT NULL,
  `saled` mediumtext NOT NULL,
  `share` mediumtext NOT NULL,
  `download` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `lonking_ecms_product_data_1` values('1','5','','0','0','0','0','','<p>&nbsp;2222</p>','<p>&nbsp;11111</p>','','<p>&nbsp;大声道</p>','','');");

@include("../../inc/footer.php");
?>