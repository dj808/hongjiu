<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:57:"D:\lp\WWW\jingguan/application/index\view\neiye\kcss.html";i:1547193192;s:60:"D:\lp\WWW\jingguan/application/index\view\public\footer.html";i:1547171540;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>课程建设与改革</title>
<link rel="stylesheet" href="__STATIC__/css/bootstrap.min.css"/>
<link rel="stylesheet" href="__STATIC__/css/animate.css"/><!--页面块特效css-->
<link rel="stylesheet" href="__STATIC__/css/swiper.min.css" />
<link rel="stylesheet" href="__STATIC__/css/bxyindex.css"/>
<link rel="stylesheet" href="__STATIC__/css/head.css"/>
<script src="__STATIC__/js/jquery.min.js"></script>
<script src="__STATIC__/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__STATIC__/js/swiper.min.js"></script>
<script src="__STATIC__/js/jquery.singlePageNav.min.js"></script><!--页面上拉下拉慢镜头-->
<script src="__STATIC__/js/wow.min.js"></script><!--页面块特效js-->
<script type="text/javascript" src="__STATIC__/js/script.js"></script>
<script>
    /*运用页面块特效*/
	if(!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
		new WOW().init();
	};
</script>
<!--[if lt IE 9]>
<script src="__STATIC__/js/html5.js"  type="text/javascript"></script>
<![endif]-->
</head>

<body>

<!--header开始--> 

<header class="header">

  <div class="topWrap">
    <div class="top">
      <img src="__STATIC__/images/head1.png" class="img1 img-responsive">
      <img src="__STATIC__/images/jingcha.png"  class="img3 img-responsive">
      <img src="__STATIC__/images/head2.png" class="img2 img-responsive">
    </div>
  </div>
  <div class="nav-wrapper">
    <div class="logo"><a href="<?php echo Url('index/index2'); ?>"><img src="__STATIC__/images/logo.png" alt="" style="width:100%;max-width:100%;width:auto\9;-ms-interpolation-mode: bicubic;"></a></div>
    <div class="nav" id="nav">
      <ul class="nav_lf">
          <li><a  href="<?php echo url('neiye/sqs'); ?>">申报材料</a></li>
          <li><a href="<?php echo url('neiye/zysz'); ?>">专业建设与人才培养</a></li>
          <li><a href="<?php echo url('neiye/dwjg'); ?>">师资结构与素质</a></li>
          <li><a href="<?php echo url('neiye/jxzy'); ?>">教学条件与投入</a></li>
      </ul>
      <ul class="nav_rt">
        <<li><a  class="bxyact" href="<?php echo url('neiye/kcsj'); ?>">课程建设与改革</a></li>
          <li><a href="<?php echo url('neiye/zljk'); ?>">教育质量与服务能力</a></li>
          <li><a   href="<?php echo url('neiye/jxgl'); ?>">教学管理与优势特色</a></li>
      </ul>
    </div>
  </div>
  <span class="black_bg01"></span> 
  <!-- 移动端主导航--> 
  <section class="mobile">
    <div class="mobile-inner-header">
      <div class="mobile-inner-header-icon mobile-inner-header-icon-out"> <span class="mobile_home">导航</span></div>
    </div>
    <div class="mobile-inner-nav">
      <ul>
          <li><a href="<?php echo url('neiye/sqs'); ?>">申报材料</a></li>
          <li><a href="<?php echo url('neiye/zysz'); ?>">专业建设与人才培养</a></li>
          <li><a href="<?php echo url('neiye/dwjg'); ?>">师资结构与素质</a></li>
          <li><a href="<?php echo url('neiye/jxzy'); ?>">教学条件与投入</a></li>
          <li><a href="<?php echo url('neiye/kcsj'); ?>">课程建设与改革</a></li>
          <li><a href="<?php echo url('neiye/zljk'); ?>">教育质量与服务能力</a></li>
          <li><a href="<?php echo url('neiye/jxgl'); ?>">教学管理与优势特色</a></li>
      </ul>
    </div>
  </section>
</header>
<!--header结束--> 


<section>
    <img src="__STATIC__/images/neiye.jpg" class="img-responsive">
</section>


<div style="width:100%; overflow:hidden; background:#eaf3fd; padding-top:60px; padding-bottom:120px;">


<div class="container">
    <div class="row">
        <div class="col-md-3  wow fadeInLeft" data-wow-delay="0.2s">
          <dl class="bxye">
           <dt>课程建设与改革</dt>
           <dd><a href="<?php echo url('neiye/kcsj'); ?>">课程设计</a></dd>
           <dd class="curr"><a href="<?php echo url('neiye/kcss'); ?>">课程实施</a></dd>
		   <dd><a href="<?php echo url('neiye/kcgg'); ?>">课程改革</a></dd>
		   
          </dl>
        </div>
        <div class="col-md-9  wow fadeInRight" data-wow-delay="0.2s">
         <div class="bxyf"><i>专业设置</i><ul><li>您当前的位置：</li><li><a href="<?php echo url('neiye/index'); ?>">首页</a></li><li>>></li><li><a href="">课程建设与改革</a></li><li>>></li><li><a href="">课程实施</a></li></ul></div>
         <div class="bxyg">
            <div class="zyjsbox" style="height:500px;">
                <?php echo $about['editorValue']; ?>
            </div>
         </div>
        </div>
    </div>
</div>



</div>



<!-- FlexSlider --> 
<script type="text/javascript">
$(function() {
    Nav('#nav')//导航
    mobideMenu()// 移动端主导航
	 $(".banner .flexslider").flexslider({
		animation:'fade',
		slideshowSpeed: 6000, //展示时间间隔ms
		animationSpeed: 1000, //滚动时间ms
		touch: true //是否支持触屏滑动
	});
}); 
</script> 



<!--footer-->
<footer class="bxyfoot">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p><?php echo $data['copyright']; ?></p>
                <p><?php echo $data['support']; ?>  <?php echo $data['tel']; ?></p>
            </div>
        </div>
    </div>
</footer>
<!--footer-->


</body>
</html>
