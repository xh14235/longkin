<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `lonking_enewsclassadd`;");
E_C("CREATE TABLE `lonking_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `lonking_enewsclassadd` values('9','','');");
E_D("replace into `lonking_enewsclassadd` values('8','','');");
E_D("replace into `lonking_enewsclassadd` values('7','','');");
E_D("replace into `lonking_enewsclassadd` values('6','','');");
E_D("replace into `lonking_enewsclassadd` values('5','','');");
E_D("replace into `lonking_enewsclassadd` values('10','','');");
E_D("replace into `lonking_enewsclassadd` values('11','','');");
E_D("replace into `lonking_enewsclassadd` values('12','','');");
E_D("replace into `lonking_enewsclassadd` values('13','','');");
E_D("replace into `lonking_enewsclassadd` values('14','','');");
E_D("replace into `lonking_enewsclassadd` values('15','','');");
E_D("replace into `lonking_enewsclassadd` values('16','','');");
E_D("replace into `lonking_enewsclassadd` values('17','','');");
E_D("replace into `lonking_enewsclassadd` values('18','','');");
E_D("replace into `lonking_enewsclassadd` values('19','','');");
E_D("replace into `lonking_enewsclassadd` values('20','','');");
E_D("replace into `lonking_enewsclassadd` values('21','','');");
E_D("replace into `lonking_enewsclassadd` values('22','','');");
E_D("replace into `lonking_enewsclassadd` values('23','','');");

@include("../../inc/footer.php");
?>