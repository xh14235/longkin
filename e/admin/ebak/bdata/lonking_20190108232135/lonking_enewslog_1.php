<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `lonking_enewslog`;");
E_C("CREATE TABLE `lonking_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `lonking_enewslog` values('1','admin','2018-12-16 17:30:19','127.0.0.1','1','','0','58823');");
E_D("replace into `lonking_enewslog` values('2','admin','2019-01-03 21:25:33','127.0.0.1','1','','0','54532');");
E_D("replace into `lonking_enewslog` values('3','admin','2019-01-04 20:58:51','127.0.0.1','1','','0','52886');");
E_D("replace into `lonking_enewslog` values('4','admin','2019-01-05 14:41:07','127.0.0.1','1','','0','50674');");
E_D("replace into `lonking_enewslog` values('5','admin','2019-01-08 20:23:26','127.0.0.1','1','','0','50684');");
E_D("replace into `lonking_enewslog` values('6','admin','2019-01-08 22:57:58','127.0.0.1','1','','0','55835');");

@include("../../inc/footer.php");
?>