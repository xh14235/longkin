<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
  <title>工程案例</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="content-type" content="txt/html; charset=utf-8" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="/skin/default/css/common.css">
  <link rel="stylesheet" href="/skin/default/css/project.css">
</head>
<body>
  <!-- 头部 -->
<div class="head">
    <div class="container clear">
      <div class="logo">
        <div class="logo-box">
          <a href="/">
            <img src="/skin/default/images/logo.png" alt="">
          </a>
        </div>
        <div class="slogan">
          <p class="slogan1">美控专注过程自动行业12年</p>
          <p class="slogan2">为您提供更好的产品和更贴心的服务</p>
        </div>
      </div>
      <div class="head-right">
        <div class="some">
          <a href="/about/contact.html">自动化解决方案热线</a> | <a href="/">琅琨仪器</a> | <span>以客户为中心</span>
        </div>
        <div class="hot">
          <img src="/skin/default/images/tel.gif" alt=""> <span>24小时服务热线：</span><span class="hot-tel">400-118-3608</span>
        </div>
      </div>
    </div>
  </div>
  <!-- 手机端导航 -->
  <div class="tel">
    <div class="tog"></div>
    <div class="tel-list">
      <a href="/">网站首页</a>
      <a href="/chanpinzhongxin/">产品中心</a>
      <a href="/about/intro.html">琅琨简介</a>
      <a href="/xinwenzhongxin/">新闻中心</a>
      <a href="/about/contact.html">联系琅琨</a>
    </div>
  </div>
  <!-- 导航 -->
  <div class="nav">
    <div class="container">
      <ul class="nav-out">
        <li><a href="/">网站首页</a></li>
        <li>
          <a href="/chanpinzhongxin/chaoshengbo/">超声波流量计</a>
          <div class="nav-in">
            <div class="container">
              <div class="nav-list clear">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(5,5,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <div class="nav-box">
                  <a href="<?=$bqsr['titleurl']?>">
                    <img src="<?=$bqsr['titlepic']?>" alt="">
                    <p><?=$bqr['title']?></p>
                  </a>
                </div>
                <?php
}
}
?>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href="/chanpinzhongxin/dianci/">电磁流量计</a>
          <div class="nav-in">
            <div class="container">
              <div class="nav-list clear">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(6,5,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <div class="nav-box">
                  <a href="<?=$bqsr['titleurl']?>">
                    <img src="<?=$bqsr['titlepic']?>" alt="">
                    <p><?=$bqr['title']?></p>
                  </a>
                </div>
                <?php
}
}
?>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href="/chanpinzhongxin/wojie/">涡街流量计</a>
          <div class="nav-in">
            <div class="container">
              <div class="nav-list clear">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(7,5,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <div class="nav-box">
                  <a href="<?=$bqsr['titleurl']?>">
                    <img src="<?=$bqsr['titlepic']?>" alt="">
                    <p><?=$bqr['title']?></p>
                  </a>
                </div>
                <?php
}
}
?>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href="/chanpinzhongxin/qiti/">气体流量计</a>
          <div class="nav-in">
            <div class="container">
              <div class="nav-list clear">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(8,5,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <div class="nav-box">
                  <a href="<?=$bqsr['titleurl']?>">
                    <img src="<?=$bqsr['titlepic']?>" alt="">
                    <p><?=$bqr['title']?></p>
                  </a>
                </div>
                <?php
}
}
?>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href="/chanpinzhongxin/reliang/">热量计</a>
          <div class="nav-in">
            <div class="container">
              <div class="nav-list clear">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(9,5,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <div class="nav-box">
                  <a href="<?=$bqsr['titleurl']?>">
                    <img src="<?=$bqsr['titlepic']?>" alt="">
                    <p><?=$bqr['title']?></p>
                  </a>
                </div>
                <?php
}
}
?>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href="/chanpinzhongxin/yewei/">液位计</a>
          <div class="nav-in">
            <div class="container">
              <div class="nav-list clear">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(10,5,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <div class="nav-box">
                  <a href="<?=$bqsr['titleurl']?>">
                    <img src="<?=$bqsr['titlepic']?>" alt="">
                    <p><?=$bqr['title']?></p>
                  </a>
                </div>
                <?php
}
}
?>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href="/chanpinzhongxin/yali/">压力变送器</a>
          <div class="nav-in">
            <div class="container">
              <div class="nav-list clear">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(11,5,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <div class="nav-box">
                  <a href="<?=$bqsr['titleurl']?>">
                    <img src="<?=$bqsr['titlepic']?>" alt="">
                    <p><?=$bqr['title']?></p>
                  </a>
                </div>
                <?php
}
}
?>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href="/chanpinzhongxin/wendu/">温度变送器</a>
          <div class="nav-in">
            <div class="container">
              <div class="nav-list clear">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(12,5,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <div class="nav-box">
                  <a href="<?=$bqsr['titleurl']?>">
                    <img src="<?=$bqsr['titlepic']?>" alt="">
                    <p><?=$bqr['title']?></p>
                  </a>
                </div>
                <?php
}
}
?>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href="/about/intro.html">琅琨简介</a>
          <div class="nav-in">
              <div class="container">
                <div class="nav-list clear">
                  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(17,5,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                  <div class="nav-box">
                    <a href="<?=$bqsr['titleurl']?>">
                      <img src="<?=$bqsr['titlepic']?>" alt="">
                      <p><?=$bqr['title']?></p>
                    </a>
                  </div>
                  <?php
}
}
?>
                </div>
              </div>
            </div>
        </li>
        <li>
          <a href="/gongchenganli/">工程案例</a>
        </li>
        <li>
          <a href="/xinwenzhongxin/">新闻中心</a>
          <div class="nav-in">
            <div class="container">
              <div class="nav-list clear">
                <div class="nav-box">
                  <a href="/xinwenzhongxin/langkunxinwen/">
                    <img src="" alt="">
                    <p>琅琨新闻</p>
                  </a>
                </div>
                <div class="nav-box">
                  <a href="/xinwenzhongxin/hangyexinwen/">
                    <img src="" alt="">
                    <p>行业新闻</p>
                  </a>
                </div>
                <div class="nav-box">
                  <a href="/xinwenzhongxin/jiejuefangan/">
                    <img src="" alt="">
                    <p>解决方案</p>
                  </a>
                </div>
                <div class="nav-box">
                  <a href="/xinwenzhongxin/yinanjieda/">
                    <img src="" alt="">
                    <p>疑难解答</p>
                  </a>
                </div>                
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href="/about/contact.html">联系琅琨</a>
        </li>
      </ul>
    </div>
  </div>
  <!-- 静态banner -->
  <div class="calm">
    <img src="../skin/default/images/calm.jpg" alt="">
  </div>
  <!-- 面包屑导航 -->
  <div class="crumb">
    <div class="container">
      <div class="crumb-box">
          <span>您现在的位置：<a href="/">首页</a>&nbsp;>&nbsp;<a href="/gongchenganli/">工程案例</a>
      </div>
    </div>
  </div>
  <!-- 内容 -->
  <div class="product">
    <div class="container">
      <div class="project-sort">
        <p>工程案例</p>
        <div class="sort-list">
          <?php
          $bclassid=20;
          ?>
          <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid, classname, classimg, classpath from `[!db.pre!]enewsclass` where bclassid='$bclassid' order by `classid` desc ",20,24,0,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <a href="/<?=$class_r[$bqr[classid]]['classpath']?>"><?=$class_r[$bqr[classid]]['classname']?></a>
          <?php
}
}
?>
        </div>
      </div>
      <div class="example clear">
        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,classimg,classpath from lonking_enewsclass where bclassid=20",1,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <div class="example-box">
          <a href="/<?=$bqr[classpath]?>"><img src="<?=$bqr[classimg]?>" alt=""></a>
          <h4><?=$bqr[classname]?>></h4>
        </div>
        <?php
}
}
?>
      </div>
    </div>
  </div>
  <!-- 尾部 -->
<div class="foot">
    <div class="container">
      <div class="nav2 clear">
        <a href="/">网站首页</a>
        <a href="/chanpinzhongxin/chaoshengbo/">超声波流量计</a>
        <a href="/chanpinzhongxin/dianci/">电磁流量计</a>
        <a href="/chanpinzhongxin/wojie/">涡街流量计</a>
        <a href="/chanpinzhongxin/qiti/">气体流量计</a>
        <a href="/chanpinzhongxin/reliang/">热量计</a>
        <a href="/chanpinzhongxin/yewei/">液位计</a>
        <a href="/chanpinzhongxin/yali/">压力变送器</a>
        <a href="/chanpinzhongxin/wendu/">温度变送器</a>
        <a href="/about/intro.html">琅琨简介</a>
        <a href="/xinwenzhongxin/">新闻中心</a>
        <a href="/gongchenganli/">工程案例</a>
        <a href="/about/contact.html">联系琅琨</a>
      </div>
      <div class="other clear">
        <div class="logo2">
          <img src="/skin/default/images/logo.png" alt="">
          <p>美控专注过程自动行业12年</p>
          <p>为您提供更好的产品和更贴心的服务</p>
        </div>
        <div class="foot-right">
          <p>Copyright © 2015 版权所有 琅琨仪器仪表有限公司官网 <a href="">www.meacon.com.cn</a></p>
          <p>产品推荐：<b>智能温度记录仪</b>，<b>智能温度记录仪</b>，<b>智能温度记录仪</b>，<b>智能温度记录仪</b>，<b>智能温度记录仪</b></p>
          <p>地址： 杭州经济技术开发区科技园路2号4幢 邮编： 310018</p>
          <p>总机： 0571-86472681 24小时服务热线： 400-8928-118 传真：0571-86472680</p>
          <p>浙ICP备07001561号 浙公网安备 33011802001415号 </p>
        </div>
      </div>
    </div>
  </div>

  <script src="/skin/default/js/jquery.3.3.1.min.js" type="text/javascript"></script>
  <script src="/skin/default/js/swiper.min.js" type="text/javascript"></script>
  <script src="/skin/default/js/common.js" type="text/javascript"></script>
</body>
</html>