<!doctype html>
<html class="no-js" lang="">
  <head>
  	<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>菲力兒童文教機構 | FILEXKIDS EDUCATION INSTITUTE.</title> -->
	<title><?php echo the_title();?> 🌵菲力兒童文教機構 | FILEXKIDS EDUCATION INSTITUTE.</title>
	<!-- 標題為頁面標題加網站標題 -->
	<meta name="description" content="<?php echo get_bloginfo('description'); ?>">
	<meta name="title" content="<?php echo the_title();?>">
	<!-- 網頁關鍵字為文章的標籤 -->
	<meta name="keywords" content="<?php $posttags = get_the_tags();if ($posttags) {foreach($posttags as $tag) {echo $tag->name . ','; }}?>">
	<!--FACEBOOK OG TAG-->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo get_permalink();?>">
	<meta property="og:site_name" content="<?php echo home_url(); ?>">
	<meta property="og:description" content="<?php echo get_bloginfo('description'); ?>">
	<!-- <meta property="og:image" content="<?php ?>"> -->

    <!-- Place favicon.ico in the root directory -->
    
    <link rel="apple-touch-icon" href="<?php echo $path?>img/nav/favi.png">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $path?>img/nav/favi.png">


    <link rel="stylesheet" href="<?php echo $path?>css/vendor.css">

    <link rel="stylesheet" href="<?php echo $path?>css/main.css">
    
    <script src="<?php echo $path?>js/mdzr.js"></script>
  </head>
  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <header>
      <nav class="fore">
        <section class="container">
          <section class="row">
            <ul class="col-lg-6">
              <li>
                <a target="_blank" href="tel:+886229396258">
                  <img class="svg" src="<?php echo $path?>img/nav/phone.svg">+886 2-2939-6258
                </a>
              </li>
              <li>
                <a target="_blank" href="https://goo.gl/maps/ABba6RTbuVH2">
                  <img class="svg" src="<?php echo $path?>img/nav/pin.svg">台北市文山區樟新街70號
                </a>
              </li>
            </ul>
            <ul class="pull-right col-lg-6 text-right">
              <li>
                <a href="javascript:">
                  <img class="svg" src="<?php echo $path?>img/nav/avatar.svg">家長登入
                </a>
              </li>
            </ul>
          </section>
        </section>
      </nav>
      <section class="container">
        <section class="row">
          <nav id="menu" class="col-lg-12">
            <h1 class="text-left"><a href="<?php echo get_site_url(); ?>">菲力兒童文教機構 | FILEXKIDS EDUCATION INSTITUTE.<img src="<?php echo $path?>img/nav/logo.png"></a></h1>
			<?php html5blank_nav(); ?>
            <ul class="hidden-lg hidden-md ">
              <li>
                <a href="javascript:"><img src="<?php echo $path?>img/nav/fb.svg"></a>
              </li>
              <li>
                <a href="javascript:"><img src="<?php echo $path?>img/nav/gp.svg"></a>
              </li>
              <li>
                <a href="javascript:"><img src="<?php echo $path?>img/nav/line.svg"></a>
              </li>
              <li>
                <a href="javascript:"><img src="<?php echo $path?>img/nav/yt.svg"></a>
              </li>
              <li>
                <a href="javascript:"><img src="<?php echo $path?>img/nav/wx.svg"></a>
              </li>
            </ul>
          </nav>
        </section>
      </section>
      <section class="mobile-menu col-md-12">
        <a href="./"><img class="logo" src="<?php echo $path?>img/nav/logo-m.png"></a>
        <ul class="locale fontsize-20">
          <li><a href="javascript:">簡</a></li>
          <li class="active"><a href="javascript:">繁</a></li>
        </ul>
        <a id="slidedown-menu">
          <img src="<?php echo $path?>img/nav/open-menu.png">
        </a>
      </section>
    </header>