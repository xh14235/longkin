<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `lonking_enewsuserloginck`;");
E_C("CREATE TABLE `lonking_enewsuserloginck` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `andauth` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `lonking_enewsuserloginck` values('1','d036f8842e5d9d00b3d92b1e139d04b2');");

@include("../../inc/footer.php");
?>