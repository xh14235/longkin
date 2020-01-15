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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8");
E_D("replace into `lonking_enewsfile_1` values('1','1000040000000001','843551d22f96ca4dec81987501ee56a7.jpg','56328','2019-01-04','admin','1546613586','17','pro-img.jpg','1','0','1','0','0','0');");
E_D("replace into `lonking_enewsfile_1` values('2','1000040000000001','8ee66d279f238f37615542d5e01da19c.jpg','56328','2019-01-04','admin','1546613608','17','pro-img.jpg','1','0','1','0','0','0');");
E_D("replace into `lonking_enewsfile_1` values('11','1000010000000001','8bcaa69096860eb9c4e8b49410a1811d.jpg','63884','','admin','1550302295','5','便携式超声波流量计.jpg','1','0','1','0','1','0');");
E_D("replace into `lonking_enewsfile_1` values('12','1000010000000002','4434d4bc59e1a764900f208515ef679e.jpg','31125','','admin','1550303148','5','手持式超声波流量计副本.jpg','1','0','2','0','1','0');");
E_D("replace into `lonking_enewsfile_1` values('10','1000010000000001','aac16ca25bdb50156d2f0d8bd425a882.jpg','43928','','admin','1546959950','5','industry.jpg','1','0','1','0','1','0');");
E_D("replace into `lonking_enewsfile_1` values('13','1000020000000002','c0ac38666e26a5cba1f2c3a0f877b506.jpg','88308','','admin','1550304908','15','插入式超声波流量计副本.jpg','1','0','2','0','1','0');");
E_D("replace into `lonking_enewsfile_1` values('14','1000020000000003','5edd0894d966d8ac9716a07a3efe4911.jpg','63884','','admin','1550305406','15','便携式超声波流量计.jpg','1','0','3','0','1','0');");
E_D("replace into `lonking_enewsfile_1` values('15','1000020000000004','bcb6544b64ba1c38b5b30f6f5cf78a56.jpg','54948','','admin','1550305589','15','LKRD802.jpg','1','0','4','0','1','0');");
E_D("replace into `lonking_enewsfile_1` values('16','1000020000000005','f183a321f03d67ce076961731496a33f.jpg','43928','','admin','1550306498','13','industry.jpg','1','0','5','0','1','0');");
E_D("replace into `lonking_enewsfile_1` values('17','1000020000000006','4ba431949492a86d6985ff18c5ce00c6.jpg','112221','','admin','1550306606','13','lunbo1.jpg','1','0','6','0','1','0');");
E_D("replace into `lonking_enewsfile_1` values('18','1000020000000007','3903c6cf3d2ec477f69af1fe60b303fd.jpg','723352','','admin','1550306626','13','banner2.jpg','1','0','7','0','1','0');");
E_D("replace into `lonking_enewsfile_1` values('19','1000020000000008','b933e519da5297a363be20d6efb04e93.jpg','6991','','admin','1550306682','13','project1.jpg','1','0','8','0','1','0');");
E_D("replace into `lonking_enewsfile_1` values('20','1000020000000009','6594623bde2f58a40af7d47d2aab150f.jpg','177504','','admin','1550306701','13','news_banner.jpg','1','0','9','0','1','0');");
E_D("replace into `lonking_enewsfile_1` values('21','1000020000000010','4858519491c701bc7e56881b6b71bd9f.jpg','120219','','admin','1550306721','13','calm.jpg','1','0','10','0','1','0');");
E_D("replace into `lonking_enewsfile_1` values('22','1000020000000011','693309167f7409d07015296bf2dd32ff.jpg','11455','','admin','1550306748','13','honor.png','1','0','11','0','1','0');");
E_D("replace into `lonking_enewsfile_1` values('23','1000020000000012','cd1265cf1ac57b696ac5fcd97a398d37.jpg','11618','','admin','1550306775','13','product_contact.jpg','1','0','12','0','1','0');");
E_D("replace into `lonking_enewsfile_1` values('24','1000020000000013','b17fe551e7db025112def019d728298c.jpg','265512','','admin','1550306813','13','project7.jpg','1','0','13','0','1','0');");
E_D("replace into `lonking_enewsfile_1` values('25','1000020000000014','84b41d59c62c66c0e77f6cdd0b88a7f0.jpg','56328','','admin','1550306831','13','pro-img.jpg','1','0','14','0','1','0');");

@include("../../inc/footer.php");
?>