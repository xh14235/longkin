<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `lonking_ecms_news_index`;");
E_C("CREATE TABLE `lonking_ecms_news_index` (
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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8");
E_D("replace into `lonking_ecms_news_index` values('1','13','1','1547136000','1546680296','1550306454','1');");
E_D("replace into `lonking_ecms_news_index` values('2','15','1','1550304885','1550304951','1550305217','1');");
E_D("replace into `lonking_ecms_news_index` values('3','15','1','1550305382','1550305409','1550305409','1');");
E_D("replace into `lonking_ecms_news_index` values('4','15','1','1550305411','1550305597','1550305597','1');");
E_D("replace into `lonking_ecms_news_index` values('5','13','1','1550306463','1550306504','1550306504','1');");
E_D("replace into `lonking_ecms_news_index` values('6','13','1','1550306586','1550306608','1550306608','1');");
E_D("replace into `lonking_ecms_news_index` values('7','13','1','1550306611','1550306630','1550306630','1');");
E_D("replace into `lonking_ecms_news_index` values('8','13','1','1550306632','1550306685','1550306685','1');");
E_D("replace into `lonking_ecms_news_index` values('9','13','1','1550306687','1550306703','1550306703','1');");
E_D("replace into `lonking_ecms_news_index` values('10','13','1','1550306706','1550306723','1550306723','1');");
E_D("replace into `lonking_ecms_news_index` values('11','13','1','1550306726','1550306753','1550306753','1');");
E_D("replace into `lonking_ecms_news_index` values('12','13','1','1550306756','1550306778','1550306778','1');");
E_D("replace into `lonking_ecms_news_index` values('13','13','1','1550306781','1550306815','1550306815','1');");
E_D("replace into `lonking_ecms_news_index` values('14','13','1','1550306817','1550306833','1550306833','1');");
E_D("replace into `lonking_ecms_news_index` values('15','14','1','1550306907','1550306911','1550306911','1');");
E_D("replace into `lonking_ecms_news_index` values('16','14','1','1550306914','1550306925','1550306925','1');");
E_D("replace into `lonking_ecms_news_index` values('17','14','1','1550306927','1550306936','1550306936','1');");
E_D("replace into `lonking_ecms_news_index` values('18','14','1','1550306939','1550306948','1550306948','1');");
E_D("replace into `lonking_ecms_news_index` values('19','14','1','1550306950','1550306961','1550306961','1');");

@include("../../inc/footer.php");
?>