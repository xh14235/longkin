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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8");
E_D("replace into `lonking_enewsfile_other` values('15','0','8580f868d128048027870a9b60efede1.jpg','56328','','admin','1547038019','0','pro-img.jpg','1','0','5','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('16','0','c3d81a72d1b5c012f28f2d719271dae2.jpg','63884','','admin','1550303036','0','便携式超声波流量计.jpg','1','0','5','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('17','0','dec2242b32fe111f5cb5346558d11394.jpg','65161','','admin','1550303622','0','不锈钢电磁流量计（卫生型）.jpg','1','0','6','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('7','0','7f3385242d888184e22bf7e2295a3e03.jpg','265512','','admin','1547037454','0','project7.jpg','1','0','18','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('8','0','c54de212772856271a8e6708f6d83b09.jpg','56328','','admin','1547037789','0','pro-img.jpg','1','0','6','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('6','0','9715fdd53f6317af1f7f18f8566262c2.jpg','265512','','admin','1547037423','0','project7.jpg','1','0','19','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('9','0','38a18b3e284ccdb1bac00f72ad8fb47f.jpg','56328','','admin','1547037812','0','pro-img.jpg','1','0','7','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('10','0','e66f653536da5183a2aa754e6e420b0f.jpg','56328','','admin','1547037834','0','pro-img.jpg','1','0','8','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('11','0','17d834f0b6024bf3808145fe6098d664.jpg','56328','','admin','1547037852','0','pro-img.jpg','1','0','9','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('12','0','34f7a88523f3088a07f65def397e5113.jpg','56328','','admin','1547037886','0','pro-img.jpg','1','0','10','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('13','0','d41697e011978f835fc1e58a0f194506.jpg','56328','','admin','1547037906','0','pro-img.jpg','1','0','11','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('14','0','17dac3752df0c5b7ba5c98785d461e7c.jpg','56328','','admin','1547037924','0','pro-img.jpg','1','0','12','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('18','0','7a3bbb10f7017e49162a838184f71c3b.jpg','65304','','admin','1550303669','0','涡轮流量计.jpg','1','0','7','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('19','0','550d8a68e3b6e9f4ba7870d799e5dc23.jpg','65304','','admin','1550303678','0','涡轮流量计.jpg','1','0','7','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('20','0','d4c9bf37b6af20cc2169a7f3a5414a5a.jpg','54948','','admin','1550303946','0','LKRD802.jpg','1','0','10','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('21','0','dc7a7d521a9a92d58d88d45b9a22c126.jpg','68955','','admin','1550304027','0','LKRD803.jpg','1','0','8','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('22','0','d6d7f4c11973aafdd24dec2e16be2979.jpg','61099','','admin','1550304045','0','LKRD804.jpg','1','0','9','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('23','0','907f9790c485fdfbd2ef31260da38d83.jpg','61099','','admin','1550304067','0','LKRD804.jpg','1','0','11','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('24','0','9471c661bb4c76b9202f6cf7ceb56527.jpg','88308','','admin','1550304107','0','插入式超声波流量计副本.jpg','1','0','12','0','1','1');");
E_D("replace into `lonking_enewsfile_other` values('25','0','350103a27b2a3fce3b9aa57c7c2709f2.jpg','265512','','admin','1550305706','0','project7.jpg','1','0','23','0','1','1');");

@include("../../inc/footer.php");
?>