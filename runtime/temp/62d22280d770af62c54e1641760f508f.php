<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"D:\lp\WWW\jingguan\public/../application/index\view\index\index.html";i:1547192827;s:70:"D:\lp\WWW\jingguan\public/../application/index\view\public\footer.html";i:1547171540;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>江苏警官学院首页1</title>
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
      <img src="__STATIC__/images/jingcha.png" class="img3 img-responsive">
      <img src="__STATIC__/images/head2.png" class="img2 img-responsive">
    </div>
  </div>
  <div class="nav-wrapper nav-wrapper_index">
    <div class="logo"><a href="<?php echo Url('index/index2'); ?>"><img src="__STATIC__/images/logo.png" alt="" style="width:100%;max-width:100%;width:auto\9;-ms-interpolation-mode: bicubic;"></a></div>
    <div class="nav" id="nav">
      
    </div>
  </div>
  <span class="black_bg01"></span> 
  <!-- 移动端主导航--> 

</header>
<!--header结束--> 


<!--banner-->
<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class="swiper-slide"><img src="<?php echo $vo['logo']; ?>"></div>
        <?php endforeach; endif; else: echo "" ;endif; ?>

    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<script>
	var swiper = new Swiper('.swiper-container', {
	pagination: '.swiper-pagination',
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	paginationClickable: true,
	spaceBetween: 30,
	centeredSlides: true,
	autoplay: 2500,
	loop:true,
	autoplayDisableOnInteraction: false
	});
</script>
<!--banner-->



<div class="container">
    <div class="row">
        <div class="bxya">
           <div class="col-md-12"><span>学院简介</span></div>
        </div>
    </div>
</div>



<section class="bxyb">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-10 col-xs-push-1 bxyb1  wow fadeInLeft " data-wow-delay="0.2s"><p><?php echo $data['editorValue']; ?></p></div>
            <div class="col-md-3 col-xs-8 col-sm-pull-1 bxyb2  wow fadeInRight" data-wow-delay="0.2s"><img src="<?php echo $data['logo']; ?>" class="img-responsive"></div>
        </div>
    </div>
</section>



<section class="bxyc">
    <a href="<?php echo url('index/index2'); ?>"><img src="__STATIC__/images/bxyc.jpg" class="img-responsive"></a>
</section>





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
