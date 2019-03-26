<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"D:\lp\WWW\jingguan\public/../application/index\view\index\index2.html";i:1547187109;s:70:"D:\lp\WWW\jingguan\public/../application/index\view\public\footer.html";i:1547171540;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>江苏警官学院首页2</title>
<link rel="stylesheet" href="__STATIC__/css/bootstrap.min.css"/>
<link rel="stylesheet" href="__STATIC__/css/animate.css"/><!--页面块特效css-->
<link rel="stylesheet" href="__STATIC__/css/swiper.min.css" />
<link rel="stylesheet" href="__STATIC__/css/bxyindex.css"/>
<link rel="stylesheet" href="__STATIC__/css/head.css"/>
<script src="__STATIC__/js/jquery.min.js"></script>
<!--<script src="__STATIC__/js/jquery.SuperSlide.2.1.1.js"></script> -->
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
    <div class="logo"><img src="__STATIC__/images/logo.png" alt="" style="width:100%;max-width:100%;width:auto\9;-ms-interpolation-mode: bicubic;"></div>
    <div class="nav" id="nav">
      <ul class="nav_lf">
        <li><a href="<?php echo url('neiye/sqs'); ?>">申报材料</a></li>
        <li><a href="<?php echo url('neiye/zysz'); ?>">专业建设与人才培养</a></li>
        <li><a href="<?php echo url('neiye/dwjg'); ?>">师资结构与素质</a></li>
        <li><a href="<?php echo url('neiye/jxzy'); ?>">教学条件与投入</a></li>
      </ul>
      <ul class="nav_rt">
        <li><a href="<?php echo url('neiye/kcsj'); ?>">课程建设与改革</a></li>
        <li><a href="<?php echo url('neiye/zljk'); ?>">教育质量与服务能力</a></li>
        <li><a href="<?php echo url('neiye/jxgl'); ?>">教学管理与优势特色</a></li>
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




<div class="bxyh">
    <div class="container">
      <span>专业介绍</span>
    </div>
</div>



<div class="bxyi">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12 wow fadeInLeft"  data-wow-delay="0.2s"><img src="<?php echo $zyjs['img']; ?>" class="img-responsive"></div>
            <div class="col-md-7 col-xs-12 wow fadeInRight"  data-wow-delay="0.2s"><p><?php echo $zyjs['editorValue']; ?></p></div>
        </div>
    </div>
</div>



<div class="bxyj">
    <div class="bxyj1"><div class="container"><span>申报条件</span></div></div>
    <div class="container wow fadeInUp" data-wow-delay="0.2s" ><a href="<?php echo url('tiaojian/bxnl'); ?>"><img src="__STATIC__/images/bxyj1.png" class="img-responsive"></a></div>
</div>



<div class="bxyh">
    <div class="container">
      <span>专业负责人</span>
    </div>
</div>



<div class="bxyk">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12  wow fadeInLeft" data-wow-delay="0.2s" ><p><?php echo $zyfzr['editorValue']; ?></p></div>
            <div class="col-md-5 col-xs-12  wow fadeInRight" data-wow-delay="0.2s"><img src="<?php echo $zyfzr['img']; ?>" class="img-responsive"></div>
        </div>
    </div>
</div>



<!--PC-->
<div class="bxylpc">
    <div class="bxylpc1"><div class="container"><span>专业团队</span></div></div>
    <div class="container  wow fadeInUp" data-wow-delay="0.2s" >
        <div class="slider autoplay1 bxyx">
            <?php if(is_array($zytd) || $zytd instanceof \think\Collection || $zytd instanceof \think\Paginator): $i = 0; $__LIST__ = $zytd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div><a href="javascript:;"><img src="<?php echo $vo['img']; ?>"><p><span><?php echo $vo['name']; ?></span><?php echo $vo['job']; ?></p></a></div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
<!--PC-->
<!--yidong-->
<div class="bxylyd">
    <div class="bxylyd1"><div class="container"><span>专业团队</span></div></div>
    <div class="container  wow fadeInUp " data-wow-delay="0.2s">
        <div class="slider autoplay3 bxyx">
            <?php if(is_array($zytd) || $zytd instanceof \think\Collection || $zytd instanceof \think\Paginator): $i = 0; $__LIST__ = $zytd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div><a href="javascript:;"><img src="<?php echo $vo['img']; ?>"><p><span><?php echo $vo['name']; ?></span><?php echo $vo['job']; ?></p></a></div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
<!--yidong-->



<div class="bxyh">
    <div class="container">
      <span>精品课程</span>
    </div>
</div>



<div class="bxyy">
    <div class="container  wow fadeInUp " data-wow-delay="0.2s">
        <div class="row">
            <?php if(is_array($jpkc) || $jpkc instanceof \think\Collection || $jpkc instanceof \think\Paginator): $i = 0; $__LIST__ = $jpkc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="col-md-6 col-xs-12 bxyyyy"><a href=""><img src="<?php echo $vo['img']; ?>" class="img-responsive bxyyy2"><div class="bxyya"><span>公共安全管理</span><p><?php echo $vo['intro']; ?></p><img src="__STATIC__/images/bxyy3.png"  class="img-responsive bxyy1"></div></a></div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>

<div class="bxyzpc">
    <div class="bxyzpc1"><div class="container"><span>成果展示</span></div></div>
    <div class="container  wow fadeInDown" data-wow-delay="0.2s" >
        <div class="slider autoplay2 bxyzpc2">
            <?php if(is_array($cgzs) || $cgzs instanceof \think\Collection || $cgzs instanceof \think\Paginator): $i = 0; $__LIST__ = $cgzs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div><a href="javascript:;"><img src="<?php echo $vo['img']; ?>"></a><p><a href="javascript:;" title="<?php echo $vo['name']; ?>"><?php echo $vo['name']; ?></a></p></div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
<div class="bxyzyd">
    <div class="bxyzyd1"><div class="container"><span>成果展示</span></div></div>
    <div class="container  wow fadeInDown" data-wow-delay="0.2s" >
        <div class="slider autoplay4 bxyzyd2">
            <div><a href="javascript:;"><img src="__STATIC__/images/chengguo1.jpg"></a><p><a href="javascript:;" title="成果1">成果1</a></p></div>
            <div><a href="javascript:;"><img src="__STATIC__/images/chengguo2.jpg"></a><p><a href="javascript:;" title="成果2">成果2</a></p></div>
            <div><a href="javascript:;"><img src="__STATIC__/images/chengguo3.jpg"></a><p><a href="javascript:;" title="成果3">成果3</a></p></div>
            <div><a href="javascript:;"><img src="__STATIC__/images/chengguo4.jpg"></a><p><a href="javascript:;" title="成果4">成果4</a></p></div>
            <div><a href="javascript:;"><img src="__STATIC__/images/chengguo5.jpg"></a><p><a href="javascript:;" title="成果5">成果5</a></p></div>
			<div><a href="javascript:;"><img src="__STATIC__/images/chengguo6.jpg"></a><p><a href="javascript:;" title="公安实训教学设计理念与实践再探讨">公安实训教学设计理念与实践再探讨</a></p></div>
            <div><a href="javascript:;"><img src="__STATIC__/images/chengguo7.jpg"></a><p><a href="javascript:;" title="推进公安高校差异化办学的策略研究">推进公安高校差异化办学的策略研究</a></p></div>
            <div><a href="javascript:;"><img src="__STATIC__/images/chengguo8.jpg"></a><p><a href="javascript:;" title="公安院校专业课程改革的实践与思考">公安院校专业课程改革的实践与思考</a></p></div>
            <div><a href="javascript:;"><img src="__STATIC__/images/chengguo9.jpg"></a><p><a href="javascript:;" title="我国大陆警察教育训练改革之路径研究">我国大陆警察教育训练改革之路径研究</a></p></div>
            <div><a href="javascript:;"><img src="__STATIC__/images/chengguo10.jpg"></a><p><a href="javascript:;" title="对公安教育实战化要求下治安学课程整合的一些思考">对公安教育实战化要求下治安学课程整合的一些思考</a></p></div>
			<div><a href="javascript:;"><img src="__STATIC__/images/chengguo11.jpg"></a><p><a href="javascript:;" title="嵌入式”教学---犯罪学教学的新思路">“嵌入式”教学---犯罪学教学的新思路</a></p></div>
            <div><a href="javascript:;"><img src="__STATIC__/images/chengguo12.jpg"></a><p><a href="javascript:;" title="积极参与实践锻炼 促进教学科研与公安实战紧密结合">积极参与实践锻炼 促进教学科研与公安实战紧密结合</a></p></div>
            <div><a href="javascript:;"><img src="__STATIC__/images/chengguo13.jpg"></a><p><a href="javascript:;" title="从处置群体性事件看县级公安机关教育训练工作">从处置群体性事件看县级公安机关教育训练工作</a></p></div>
            <div><a href="javascript:;"><img src="__STATIC__/images/chengguo14.jpg"></a><p><a href="javascript:;" title="治安人才培养中对治安学学科建设的粗浅认识">治安人才培养中对治安学学科建设的粗浅认识</a></p></div>
			<div><a href="javascript:;"><img src="__STATIC__/images/chengguo15.jpg"></a><p><a href="javascript:;" title="治安学课程建设应当抓住的基本环节">治安学课程建设应当抓住的基本环节</a></p></div>
            <div><a href="javascript:;"><img src="__STATIC__/images/chengguo16.jpg"></a><p><a href="javascript:;" title="微课在公共安全管理教学中的应用">微课在公共安全管理教学中的应用</a></p></div>
            <div><a href="javascript:;"><img src="__STATIC__/images/chengguo17.jpg"></a><p><a href="javascript:;" title="《公安院校实践教育基地建设研究》中文核心彩色">《公安院校实践教育基地建设研究》中文核心彩色</a></p></div>
            <div><a href="javascript:;"><img src="__STATIC__/images/chengguo18.jpg"></a><p><a href="javascript:;" title="论公安教育“双师型”教师及其培养">论公安教育“双师型”教师及其培养</a></p></div>
            <div><a href="javascript:;"><img src="__STATIC__/images/chengguo19.jpg"></a><p><a href="javascript:;" title="治安管理学课程专题教学模式探析">治安管理学课程专题教学模式探析</a></p></div>
        </div>
    </div>
</div>





<link rel="stylesheet" href="__STATIC__/css/slick.css">
<script src="__STATIC__/js/slick.min.js"></script>




<script>
$(function(){
  $('.autoplay1').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  arrows:false,
  /*dots: true,*/
  autoplaySpeed: 2000,

});
});
</script>
<script>
$(function(){
  $('.autoplay2').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  arrows:false,
  dots: true,
  autoplaySpeed: 2000,

});
});
</script>
<script>
$(function(){
  $('.autoplay3').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  arrows:false,
  /*dots: true,*/
  autoplaySpeed: 2000,

});
});
</script>
<script>
$(function(){
  $('.autoplay4').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  arrows:false,
  dots: true,
  autoplaySpeed: 2000,

});
});
</script>




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
