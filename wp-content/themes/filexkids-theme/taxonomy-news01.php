<?php get_header(); ?>

<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>


    <section id="kv">
      <figure>
        <section class="container">
          <figcaption>
            <h2 class="fontsize-30"><span>學校新聞</span><span>SCHOOL NEWS</span></h2>
            <sub class="fontsize-14">孩子在菲力的生活是豐富而開心的，我們帶領孩子成長學習的腳步從未停歇相片能真實呈現生活成長的軌跡；藉著相片，與菲力家長分享孩子生活的甜蜜點滴</sub>
          </figcaption>
        </section>
        <?php the_post_thumbnail(); ?>
      </figure>
    </section>
    <section class="page news">
      <!--breadcrumbs-->
      <section class="hidden-md hidden-xs hidden-sm breadcrumbs">
        <section class="container fontsize-13">
          <?php instant_breadcrumb(); ?> 
        </section>
      </section>
      <!-- end breadcrumbs -->
      <div class="filter-dropdown newsgreen">
        <div class="container">
          <div class="row">
            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="dropdown fontsize-14">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  中興愛兒
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
                  <li class="active"><a href="#">中興愛兒</a></li>
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
          <?php 
          // the query
          $args = array(
            'post_type' => array( 'news01', 'news02' , 'news03' , 'news04' , 'news05' , 'news06' , 'news07' , 'news08', 'news09' ),
            'posts_per_page' => 12
          );
          $wp_query = new WP_Query( $args ); 
          if (have_posts()): ?>
          <div class="col-lg-9">
            <ul class="row box-list">
              <?php  while (have_posts()) : the_post(); ?>
              <?php 
                $ty = get_post_type();
                global $wp_post_types;
                $ty_name = $wp_post_types[$ty]->labels->name; 
                switch ( $ty ){
                  case 'news01':
                    $color = 'yellow';
                    break;
                  case 'news02':
                  case 'news03':
                  case 'news04':
                  case 'news05':
                    $color = 'green';
                    break;
                  case 'news06':
                  case 'news07':
                  case 'news08':
                  case 'news09':
                    $color = 'blue';
                    break;
                }
                $summary = types_render_field("summary");
                if($summary == null || $summary == ""){
                  $summary = get_the_content();
                }
                if(strlen($summary) > 42){                  
                  $summary = wp_trim_words( get_the_content(), 41 );
                }
              ?>
              <li class="<?php echo $color?> col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="<?php the_permalink()?>" class="box">
                  <figure>
                    <img src="<?php echo $path?>img/home/news-1-1.png">
                  </figure>
                  <p class="category"><?php echo $ty_name;?><img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                  <p class="fontsize-13 date"><img src="<?php echo $path?>img/home/news.svg"> <?php the_time('Y/m/d') ?> </p>
                  <h4 class="fontsize-20"><?php echo wp_trim_words( the_title(false), 30 )?></h4>
                  <p class="fontsize-15 visible-lg"><?php echo $summary?></p>
                </a>
              </li>
              <?php endwhile; ?>
            </ul>
          </div>
          <?php else: ?>
          <section>
            <h3><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h3>
          </section>
          <?php endif; ?>
          <!-- end left content -->
          <!--sidebar-->
          <div class="col-lg-3 sidebar hidden-md hidden-sm hidden-xs">
            <aside class="title newsgreen">
              <h3 class="fontsize-20">CALENDAR</h3>
            </aside>
            <figure class="calendar">
              <img src="<?php echo $path?>img/news/calendar.png">
            </figure>
            <aside class="title newsgreen">
              <h3 class="fontsize-20">Recent Posts</h3>
            </aside>
            <ul class="recent-posts fontsize-reset newsgreen">
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
            <aside class="title newsgreen">
              <h3 class="fontsize-20">FACEBOOK FAN PAGE</h3>
            </aside>
            <div class="fb-page" data-href="https://www.facebook.com/filexkids" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/filexkids"><a href="https://www.facebook.com/filexkids">菲力兒童文教機構 | Filexkids</a></blockquote></div></div>
          </div>
          <!-- end sidebar -->
        </section>
        <!--pagination-->
        <section class="pagination newsgreen">
          <?php get_template_part('pagination'); ?>
        </section>
        <!--end pagination-->
      </div>
    </section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
