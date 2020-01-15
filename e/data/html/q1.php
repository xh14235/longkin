<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width=100% align=center cellpadding=3 cellspacing=1 bgcolor=#DBEAF5><tr><td width='16%' height=25 bgcolor='ffffff'>标题</td><td bgcolor='ffffff'><input name="title" type="text" size="42" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'title',stripSlashes($r[title]))?>"></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>特殊属性</td><td bgcolor='ffffff'><input name="keyboard" type="text" size=42 value="<?=stripSlashes($r[keyboard])?>">
<font color="#666666">(多个请用&quot;,&quot;隔开)</font></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>标题图片</td><td bgcolor='ffffff'><input type="file" name="titlepicfile" size="45"></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>发布时间</td><td bgcolor='ffffff'></td></tr></table>