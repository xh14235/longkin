<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `lonking_ecms_product_index`;");
E_C("CREATE TABLE `lonking_ecms_product_index` (
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
E_D("replace into `lonking_ecms_product_index` values('1','5','1','1546676120','1546676179','1550302674','1');");
E_D("replace into `lonking_ecms_product_index` values('2','5','1','1550303092','1550303192','1550303192','1');");

@include("../../inc/footer.php");
?>