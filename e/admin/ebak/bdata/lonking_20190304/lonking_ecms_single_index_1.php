<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `lonking_ecms_single_index`;");
E_C("CREATE TABLE `lonking_ecms_single_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `lonking_ecms_single_index` values('1','17','1','1546613559','1546613636','1546958851','1');");
E_D("replace into `lonking_ecms_single_index` values('2','17','1','1546959071','1546959157','1547038264','1');");

@include("../../inc/footer.php");
?>