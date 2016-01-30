<!doctype html>
<html class="no-js" lang="">
  <head>
  	<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="fb:app_id" content="XXXXXXXXXXXXXXX">
    

    <!--單篇文章-->
    <?php if(is_single()){?>
      
      <!-- 標題為頁面標題加網站標題 -->
      <meta name="description" content="<?php echo get_the_title().' - '.get_bloginfo('name')?>">
      <meta property="og:description" content="<?php echo get_the_title().' - '.get_bloginfo('name')?>">

      <!-- 網頁關鍵字為文章的標籤 -->
      <meta name="keywords" content="<?php echo types_render_field("keywords",array("raw"=>"true"))?>,<?php $posttags = get_the_tags();if ($posttags) {foreach($posttags as $tag) {echo $tag->name . ','; }}?>">
      <title><?php echo get_the_title(); ?> - <?php echo get_bloginfo('name'); ?></title>
      <!--FACEBOOK OG TAG-->
      <meta property="og:type" content="article">
      <meta property="og:url" content="<?php echo get_permalink();?>">
      <meta property="og:title" content="<?php echo the_title();?>">
    <!--網站首頁-->
    <?php }else if(is_home() || is_front_page()){?>
      <title><?php echo get_bloginfo('name'); ?></title>
      <!--FACEBOOK OG TAG-->
      <meta property="og:type" content="website">
      <meta property="og:site_name" content="<?php echo home_url(); ?>">
      <meta property="og:image" content="<?php echo $path?>img/common/share-img.jpg">
      <meta property="og:title" content="<?php echo get_bloginfo('name'); ?>">
      <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>">
      <!-- 標題為頁面標題加網站標題 -->
      <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
      <!-- 網頁關鍵字為文章的標籤 -->
      <meta name="keywords" content="">
    <!--列表頁-->
    <?php }else{?>
      <title><?php echo get_the_title(); ?> - <?php echo get_bloginfo('name'); ?></title>
      <!--FACEBOOK OG TAG-->
      <meta property="og:type" content="object">
      <meta property="og:url" content="<?php echo get_permalink();?>">
      <meta property="og:image" content="<?php echo $path?>img/common/share-img.jpg">
      <meta property="og:title" content="<?php echo get_bloginfo('name'); ?>">
      <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>">
      <!-- 標題為頁面標題加網站標題 -->
      <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
      <!-- 網頁關鍵字為文章的標籤 -->
      <meta name="keywords" content="">
  	<?php }?>



    <!-- Place favicon.ico in the root directory -->
    
    <link rel="apple-touch-icon" href="<?php echo $path?>img/nav/favi.png">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $path?>img/nav/favi.png">


    <link rel="stylesheet" href="<?php echo $path?>css/vendor.css">

    <link rel="stylesheet" href="<?php echo $path?>css/main.css">
    
    <script src="<?php echo $path?>js/mdzr.js"></script>


  </head>
  <body data-archive-post-type="<?php echo (($_GET['post_type'] != '' && $_GET['post_type'] != null) ? $_GET['post_type'] : get_query_var('post_type') )?>" data-archive-pagename="<?php echo get_query_var('pagename') ?>">
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
 <!-- GTranslate: http://gtranslate.net/ -->
<style type="text/css">
<!--
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>

<div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'zh-TW',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(sel[i].className=='goog-te-combo')teCombo=sel[i];if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
/* ]]> */
</script>

    
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
                <a target="_blank" href="http://220.132.86.58/filex_parent/parents_login.aspx">
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
                <a target="_blank" href="https://www.facebook.com/filexkids"><img src="<?php echo $path?>img/nav/fb.svg"></a>
              </li>
              <li>
                <a href="javascript:window.open('https://plus.google.com/share?url='+encodeURIComponent('<?php the_permalink(); ?>')+'&amp;title='+encodeURIComponent('<?php the_title(); ?>'));void(0);"><img src="<?php echo $path?>img/nav/gp.svg"></a>
              </li>
              <li>
                <a href="javascript:window.open('http://line.me/R/msg/text/?'+encodeURIComponent('<?php the_permalink(); ?>\r\n<?php the_title()?>'));void(0);"><img src="<?php echo $path?>img/nav/line.svg"></a>
              </li>
              <li>
                <a target="_blank" href="https://www.youtube.com/user/filexkids"><img src="<?php echo $path?>img/nav/yt.svg"></a>
              </li>
              <li>
                <a href="javascript:window.open('http://share.baidu.com/s?type=text&amp;searchPic=1&amp;sign=on&amp;to=tsina&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;key=595885820');void(0);"><img src="<?php echo $path?>img/nav/wx.svg"></a>
              </li>
            </ul>
          </nav>
        </section>
      </section>
      <section class="mobile-menu col-md-12">
        <a href="<?php echo get_site_url()?>"><img class="logo" src="<?php echo $path?>img/nav/logo-m.png"></a>
        <ul class="locale fontsize-20">
          <li><a href="javascript:" onclick="doGTranslate('zh-TW|zh-CN');">簡</a></li>
          <li class="active"><a href="javascript:" onclick="doGTranslate('zh-TW|zh-TW');">繁</a></li>
        </ul>
        <a id="slidedown-menu">
          <img src="<?php echo $path?>img/nav/open-menu.png">
        </a>
      </section>
    </header>