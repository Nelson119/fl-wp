<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>
    <footer>
      <section class="link hidden-md hidden-sm hidden-xs">
        <section class="container">
          <ul class="row">
            <li class="col-lg-3">
              <a href="javascript:"><img src="<?php echo $path?>img/footer/link-1.png"></a>
            </li>
            <li class="col-lg-3">
              <a href="javascript:"><img src="<?php echo $path?>img/footer/link-2.png"></a>
            </li>
            <li class="col-lg-3">
              <a href="javascript:"><img src="<?php echo $path?>img/footer/link-3.png"></a>
            </li>
            <li class="col-lg-3">
              <a href="javascript:"><img src="<?php echo $path?>img/footer/link-4.png"></a>
            </li>
          </ul>
        </section>
      </section>
      <section class="menu">
        <section class="container">
          <nav class="main">
            <ul class="fontsize-13">
              <li>
                <a href="javascript:"><img class="svg" src="<?php echo $path?>img/nav/flag.svg">關於菲力</a>
              </li>
              <li>
                <a href="javascript:"><img class="svg" src="<?php echo $path?>img/nav/book.svg">學校體系</a>
              </li>
              <li>
                <a href="javascript:"><img class="svg" src="<?php echo $path?>img/nav/horn.svg">菲力公告</a>
              </li>
              <li>
                <a href="javascript:"><img class="svg" src="<?php echo $path?>img/nav/hearts.svg">菲力生活</a>
              </li>
              <li>
                <a href="javascript:"><img class="svg" src="<?php echo $path?>img/nav/mail.svg">分校&amp;聯絡</a>
              </li>
            </ul>
          </nav>
          <nav class="social">
            <h3 class="fontsize-32 hidden-lg">FOLLOW US</h3>
            <ul class="fontsize-13">
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
      <p class="copy text-center fontsize-11">&copy;&nbsp;FILEXKIDS&nbsp;EDUCATION&nbsp;INSTITUTE.&nbsp;ALL&nbsp;RIGHTS&nbsp;RESERVED</p>
      <a class="gotop" href="javascript:">
        <figure class="fly"><img src="<?php echo $path?>img/gotop/top-3.png"></figure>
        <figure><img src="<?php echo $path?>img/gotop/top-1.png"></figure>
      </a>
    </footer>
    <a class="close-menu hide">
      <img src="<?php echo $path?>img/nav/close-menu.png">
    </a>
    
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      // e.src='https://www.google-analytics.com/analytics.js';
      // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      // ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <script type="text/javascript" src="https://maps.google.com/maps/api/js"></script>
    <script src="<?php echo $path?>js/vendor.js"></script>
    
    <script src="<?php echo $path?>js/plugins.js"></script>
    
    <script src="<?php echo $path?>js/main.js"></script>
    <script>
      <?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>
    </script>
  </body>
</html>