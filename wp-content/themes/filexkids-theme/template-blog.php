<?php /* Template Name: 夢想筆記 */ get_header(); ?>

<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>

    <section id="kv">
      <figure>
        <section class="container">
          <figcaption>
            <h2 class="fontsize-30"><span>夢想筆記</span><span>BLOG</span></h2>
            <sub class="fontsize-14">有觀點，就能找到方向</sub>
          </figcaption>
        </section>
        <?php the_post_thumbnail(); ?>
      </figure>
    </section>
    <section class="page blog">
      <!--breadcrumbs-->
      <section class="hidden-md hidden-xs hidden-sm breadcrumbs">
        <section class="container fontsize-13">
          <?php instant_breadcrumb(); ?> 
        </section>
      </section>
      <!-- end breadcrumbs -->
      <div class="filter-dropdown orange">
        <div class="container">
          <div class="row">
            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="dropdown fontsize-14">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  分校選擇
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="#">全部分校</a></li>
                  <li><a href="#">大豐安親</a></li>
                  <li><a href="#">中正安親</a></li>
                  <li><a href="#">北新安親</a></li>
                  <li><a href="#">大豐安親</a></li>
                  <li><a href="#">安華幼園</a></li>
                  <li><a href="#">中興幼園</a></li>
                  <li><a href="#">復興幼園</a></li>
                  <li><a href="#">安康幼園</a></li>
                  <li><a href="#">中興愛兒</a></li>
                </ul>
              </div>
            </aside>
            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  年份選擇
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="#">全部年份</a></li>
                  <li><a href="#">2015</a></li>
                  <li><a href="#">2014</a></li>
                  <li><a href="#">2013</a></li>
                  <li><a href="#">2012</a></li>
                </ul>
              </div>
            </aside>
          </div>
        </div>
      </div>
      <div class="container">
        <section class="row">
          <!--left content-->
          <div class="col-lg-9">
            <ul class="row box-list">
              <li class="yellow col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="blog-article.html" class="box">
                  <figure>
                    <img src="<?php echo $path?>img/home/news-1-1.png">
                  </figure>
                  <p class="category">中興愛兒<img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                  <figure class="author">
                    <img src="<?php echo $path?>img/blog/author.png">
                  </figure>
                  <p class="author-title">配乾主任</p>
                  <p class="fontsize-13 date">2015/09/30</p>
                  <h4 class="fontsize-20">平時防災做得好│災害來了沒煩惱</h4>
                  <p class="fontsize-15 visible-lg">上個月有機會觀賞了一部動畫片，故事以大腦與情緒的交互作用為藍...</p>
                </a>
              </li>
              <li class="green col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="blog-article.html" class="box">
                  <figure>
                    <img src="<?php echo $path?>img/home/news-1-1.png">
                  </figure>
                  <p class="category">中興幼園<img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                  <figure class="author">
                    <img src="<?php echo $path?>img/blog/author.png">
                  </figure>
                  <p class="author-title">配乾主任</p>
                  <p class="fontsize-13 date">2015/09/30</p>
                  <h4 class="fontsize-20">我真的被欺負了嗎 ?</h4>
                  <p class="fontsize-15 visible-lg">上個月有機會觀賞了一部動畫片，故事以大腦與情緒的交互作用為藍...</p>
                </a>
              </li>
              <li class="blue col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="blog-article.html" class="box">
                  <figure>
                    <img src="<?php echo $path?>img/home/news-2-1.png">
                  </figure>
                  <p class="category">北新安校<img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                  <figure class="author">
                    <img src="<?php echo $path?>img/blog/author.png">
                  </figure>
                  <p class="author-title">配乾主任</p>
                  <p class="fontsize-13 date">2015/09/30</p>
                  <h4 class="fontsize-20">成長的過程、跌撞中學習、成長的過程、跌撞中學習</h4>
                  <p class="fontsize-15 visible-lg">上個月有機會觀賞了一部動畫片，故事以大腦與情緒的交互作用為藍...</p>
                </a>
              </li>
              <li class="yellow col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="blog-article.html" class="box">
                  <figure>
                    <img src="<?php echo $path?>img/home/news-1-1.png">
                  </figure>
                  <p class="category">中興愛兒<img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                  <figure class="author">
                    <img src="<?php echo $path?>img/blog/author.png">
                  </figure>
                  <p class="author-title">配乾主任</p>
                  <p class="fontsize-13 date">2015/09/30</p>
                  <h4 class="fontsize-20">平時防災做得好│災害來了沒煩惱</h4>
                  <p class="fontsize-15 visible-lg">上個月有機會觀賞了一部動畫片，故事以大腦與情緒的交互作用為藍...</p>
                </a>
              </li>
              <li class="green col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="blog-article.html" class="box">
                  <figure>
                    <img src="<?php echo $path?>img/home/news-1-1.png">
                  </figure>
                  <p class="category">中興幼園<img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                  <figure class="author">
                    <img src="<?php echo $path?>img/blog/author.png">
                  </figure>
                  <p class="author-title">配乾主任</p>
                  <p class="fontsize-13 date">2015/09/30</p>
                  <h4 class="fontsize-20">我真的被欺負了嗎 ?</h4>
                  <p class="fontsize-15 visible-lg">上個月有機會觀賞了一部動畫片，故事以大腦與情緒的交互作用為藍...</p>
                </a>
              </li>
              <li class="blue col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="blog-article.html" class="box">
                  <figure>
                    <img src="<?php echo $path?>img/home/news-2-1.png">
                  </figure>
                  <p class="category">北新安校<img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                  <figure class="author">
                    <img src="<?php echo $path?>img/blog/author.png">
                  </figure>
                  <p class="author-title">配乾主任</p>
                  <p class="fontsize-13 date">2015/09/30</p>
                  <h4 class="fontsize-20">成長的過程、跌撞中學習、成長的過程、跌撞中學習</h4>
                  <p class="fontsize-15 visible-lg">上個月有機會觀賞了一部動畫片，故事以大腦與情緒的交互作用為藍...</p>
                </a>
              </li>
              <li class="yellow col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="blog-article.html" class="box">
                  <figure>
                    <img src="<?php echo $path?>img/home/news-1-1.png">
                  </figure>
                  <p class="category">中興愛兒<img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                  <figure class="author">
                    <img src="<?php echo $path?>img/blog/author.png">
                  </figure>
                  <p class="author-title">配乾主任</p>
                  <p class="fontsize-13 date">2015/09/30</p>
                  <h4 class="fontsize-20">平時防災做得好│災害來了沒煩惱</h4>
                  <p class="fontsize-15 visible-lg">上個月有機會觀賞了一部動畫片，故事以大腦與情緒的交互作用為藍...</p>
                </a>
              </li>
              <li class="green col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="blog-article.html" class="box">
                  <figure>
                    <img src="<?php echo $path?>img/home/news-1-1.png">
                  </figure>
                  <p class="category">中興幼園<img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                  <figure class="author">
                    <img src="<?php echo $path?>img/blog/author.png">
                  </figure>
                  <p class="author-title">配乾主任</p>
                  <p class="fontsize-13 date">2015/09/30</p>
                  <h4 class="fontsize-20">我真的被欺負了嗎 ?</h4>
                  <p class="fontsize-15 visible-lg">上個月有機會觀賞了一部動畫片，故事以大腦與情緒的交互作用為藍...</p>
                </a>
              </li>
              <li class="blue col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="blog-article.html" class="box">
                  <figure>
                    <img src="<?php echo $path?>img/home/news-2-1.png">
                  </figure>
                  <p class="category">北新安校<img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                  <figure class="author">
                    <img src="<?php echo $path?>img/blog/author.png">
                  </figure>
                  <p class="author-title">配乾主任</p>
                  <p class="fontsize-13 date">2015/09/30</p>
                  <h4 class="fontsize-20">成長的過程、跌撞中學習、成長的過程、跌撞中學習</h4>
                  <p class="fontsize-15 visible-lg">上個月有機會觀賞了一部動畫片，故事以大腦與情緒的交互作用為藍...</p>
                </a>
              </li>
              <li class="yellow col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="blog-article.html" class="box">
                  <figure>
                    <img src="<?php echo $path?>img/home/news-1-1.png">
                  </figure>
                  <p class="category">中興愛兒<img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                  <figure class="author">
                    <img src="<?php echo $path?>img/blog/author.png">
                  </figure>
                  <p class="author-title">配乾主任</p>
                  <p class="fontsize-13 date">2015/09/30</p>
                  <h4 class="fontsize-20">平時防災做得好│災害來了沒煩惱</h4>
                  <p class="fontsize-15 visible-lg">上個月有機會觀賞了一部動畫片，故事以大腦與情緒的交互作用為藍...</p>
                </a>
              </li>
              <li class="green col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="blog-article.html" class="box">
                  <figure>
                    <img src="<?php echo $path?>img/home/news-1-1.png">
                  </figure>
                  <p class="category">中興幼園<img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                  <figure class="author">
                    <img src="<?php echo $path?>img/blog/author.png">
                  </figure>
                  <p class="author-title">配乾主任</p>
                  <p class="fontsize-13 date">2015/09/30</p>
                  <h4 class="fontsize-20">我真的被欺負了嗎 ?</h4>
                  <p class="fontsize-15 visible-lg">上個月有機會觀賞了一部動畫片，故事以大腦與情緒的交互作用為藍...</p>
                </a>
              </li>
              <li class="blue col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="blog-article.html" class="box">
                  <figure>
                    <img src="<?php echo $path?>img/home/news-2-1.png">
                  </figure>
                  <p class="category">北新安校<img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                  <figure class="author">
                    <img src="<?php echo $path?>img/blog/author.png">
                  </figure>
                  <p class="author-title">配乾主任</p>
                  <p class="fontsize-13 date">2015/09/30</p>
                  <h4 class="fontsize-20">成長的過程、跌撞中學習、成長的過程、跌撞中學習</h4>
                  <p class="fontsize-15 visible-lg">上個月有機會觀賞了一部動畫片，故事以大腦與情緒的交互作用為藍...</p>
                </a>
              </li>
            </ul>
          </div>
          <!-- end left content -->
          <!--sidebar-->
          <div class="col-lg-3 sidebar hidden-md hidden-sm hidden-xs">
            <aside class="title orange">
              <h3 class="fontsize-20">CALENDAR</h3>
            </aside>
            <figure class="calendar">
              <img src="<?php echo $path?>img/gallery/calendar.png">
            </figure>
            <aside class="title orange">
              <h3 class="fontsize-20">Recent Posts</h3>
            </aside>
            <ul class="recent-posts orange">
              <li>
                <h4 class="row fontsize-reset">
                  <span class="date fontsize-15 col-lg-4">2015/10/05</span>
                  <a class="col-lg-8 fontsize-16" href="javascript:">平時防災做得好│災害來沒煩惱</a>
                </h4>
              </li>
              <li>
                <h4 class="row fontsize-reset">
                  <span class="date fontsize-15 col-lg-4">2015/10/05</span>
                  <a class="col-lg-8 fontsize-16" href="javascript:">教學觀摩家長日│寶貝帶著爸爸媽媽去上學</a>
                </h4>
              </li>
              <li>
                <h4 class="row fontsize-reset">
                  <span class="date fontsize-15 col-lg-4">2015/10/05</span>
                  <a class="col-lg-8 fontsize-16" href="javascript:">平時防災做得好│災害來沒煩惱</a>
                </h4>
              </li>
              <li>
                <h4 class="row fontsize-reset">
                  <span class="date fontsize-15 col-lg-4">2015/10/05</span>
                  <a class="col-lg-8 fontsize-16" href="javascript:">Open House誰來當老師│歡樂飛盤逍遙遊</a>
                </h4>
              </li>
              <li>
                <h4 class="row fontsize-reset">
                  <span class="date fontsize-15 col-lg-4">2015/10/05</span>
                  <a class="col-lg-8 fontsize-16" href="javascript:">教學觀摩家長日│寶貝帶著爸爸媽媽去上學</a>
                </h4>
              </li>
            </ul>
            <aside class="title orange">
              <h3 class="fontsize-20">FACEBOOK FAN PAGE</h3>
            </aside>
            <div class="fb-page" data-href="https://www.facebook.com/filexkids" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/filexkids"><a href="https://www.facebook.com/filexkids">菲力兒童文教機構 | Filexkids</a></blockquote></div></div>
          </div>
          <!-- end sidebar -->
        </section>
        <!--pagination-->
        <section class="pagination orange">
          <a class="prev" href="javascript:">&lt;Prev</a>
          <ul>
            <li><a href="javascript:">1</a></li>
            <li><a href="javascript:">2</a></li>
            <li><a href="javascript:">3</a></li>
            <li><a href="javascript:">4</a></li>
            <li><a href="javascript:">...</a></li>
            <li><a href="javascript:">10</a></li>
          </ul>
          <a class="next" href="javascript:">Next&gt;</a>
        </section>
        <!--end pagination-->
      </div>
    </section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
