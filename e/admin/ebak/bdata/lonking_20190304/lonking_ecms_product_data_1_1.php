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
E_D("replace into `lonking_ecms_product_data_1` values('1','5','','0','0','0','0','','','<p>LKUF-B型型便携式超声波流量计2008年由10版机芯更换为13版机芯，适用于各种工业现场中液体流量的在线标定和巡检测量。具有测量精度高、一致性好、电池供电时间长、操作简单、内置热敏一体式打印机等特点，该款产品已广泛应用于石油化工、冶金、电力、自来水、水利、能源监测等行业，受到广大用户的一致认可。</p>\r\n<p>技术参数：</p>\r\n<p>测量精度：优于1%</p>\r\n<p>*&nbsp; 重 复 性：优于0.2%</p>\r\n<p>*&nbsp; 工作电源：220VAC(标配)或110VAC(选配)</p>\r\n<p>*&nbsp; 测量周期：500ms (每秒2次，每个周期采集128组数据)&nbsp;</p>\r\n<p>*&nbsp; 电&nbsp; &nbsp; 池：内置镍氢充电电池可连续工作24小时</p>\r\n<p>*&nbsp; 安装方式：外敷式安装，操作简单、方便</p>\r\n<p>*&nbsp; 显&nbsp; &nbsp; 示：2行汉字同屏显示瞬时流量、累积流量、信号状态等</p>\r\n<p>*&nbsp; 信号输出：隔离RS485</p>\r\n<p>*&nbsp; 通讯协议：MODBUS协议，兼容国内其它厂家同类产品通讯协议</p>\r\n<p>*&nbsp; 打印输出：内置热敏一体式打印机，实现及时或定时打印</p>\r\n<p>*&nbsp; 其它功能：自诊断，提示当前工作状态是否正常</p>\r\n<div>\r\n<div>标准配置：</div>\r\n<div>&nbsp;</div>\r\n<div>1.主机&nbsp; &nbsp;2.标准中型传感器&nbsp; 3.信号电缆5米*2&nbsp; 4.铝合金保护箱</div>\r\n</div>\r\n<p>&nbsp;</p>','','','','');");
E_D("replace into `lonking_ecms_product_data_1` values('2','5','','0','0','0','0','','','<p>LKUF-B型型便携式超声波流量计2008年由10版机芯更换为13版机芯，适用于各种工业现场中液体流量的在线标定和巡检测量。具有测量精度高、一致性好、电池供电时间长、操作简单、内置热敏一体式打印机等特点，该款产品已广泛应用于石油化工、冶金、电力、自来水、水利、能源监测等行业，受到广大用户的一致认可。</p>\r\n<p>技术参数：</p>\r\n<p>测量精度：优于1%</p>\r\n<p>*&nbsp; 重 复 性：优于0.2%</p>\r\n<p>*&nbsp; 工作电源：220VAC(标配)或110VAC(选配)</p>\r\n<p>*&nbsp; 测量周期：500ms (每秒2次，每个周期采集128组数据)&nbsp;</p>\r\n<p>*&nbsp; 电&nbsp; &nbsp; 池：内置镍氢充电电池可连续工作24小时</p>\r\n<p>*&nbsp; 安装方式：外敷式安装，操作简单、方便</p>\r\n<p>*&nbsp; 显&nbsp; &nbsp; 示：2行汉字同屏显示瞬时流量、累积流量、信号状态等</p>\r\n<p>*&nbsp; 信号输出：隔离RS485</p>\r\n<p>*&nbsp; 通讯协议：MODBUS协议，兼容国内其它厂家同类产品通讯协议</p>\r\n<p>*&nbsp; 打印输出：内置热敏一体式打印机，实现及时或定时打印</p>\r\n<p>*&nbsp; 其它功能：自诊断，提示当前工作状态是否正常</p>\r\n<div>\r\n<div>标准配置：</div>\r\n<div>&nbsp;</div>\r\n<div>1.主机&nbsp; &nbsp;2.标准中型传感器&nbsp; 3.信号电缆5米*2&nbsp; 4.铝合金保护箱</div>\r\n</div>\r\n<p>&nbsp;</p>','','','','');");

@include("../../inc/footer.php");
?>