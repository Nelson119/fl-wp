<?php /* Template Name: 全校公告 */ get_header(); ?>

<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>

    <section id="kv">
      <figure>
        <section class="container">
          <figcaption>
            <h2 class="fontsize-30"><span>全校公告</span><span>ANNOUNCEMENT</span></h2>
            <sub class="fontsize-14">全校公告全校公告全校公告</sub>
          </figcaption>
        </section>
        <?php the_post_thumbnail(); ?>
      </figure>
    </section>
    <section class="page anouncement">
      <!--breadcrumbs-->
      <section class="hidden-md hidden-xs hidden-sm breadcrumbs">
        <section class="container fontsize-13">
          <?php instant_breadcrumb(); ?> 
        </section>
      </section>
      <!-- end breadcrumbs -->


      <?php 
      // the query
      $args = array(
          'posts_per_page' => 12,
          'paged' => $page
      );
      $wp_query = new WP_Query( $args ); ?>
      <div class="container">
        <section class="row">
          <!--left content-->
          <?php if ($wp_query->have_posts()): ?>
          <div class="col-lg-9">
            <ul class="row box-list">
              <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
              <?php 
                $summary = types_render_field("summary");
                if($summary == null || $summary == ""){
                  $summary = get_the_content();
                }
                if(strlen($summary) > 45){                  
                  $summary = wp_trim_words( get_the_content(), 44 );
                }
              ?>
              <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <a href="javascript:" class="box">
                  <figure>
                    <img src="<?php echo $path?>img/home/news-1-1.png">
                  </figure>
                  <p class="category">全校公告<img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                  <p class="fontsize-13 date"><i class="news-icon z04"></i>2015/09/30</p>
                  <h4 class="fontsize-20"><?php the_title()?></h4>
                  <p class="fontsize-15 visible-lg"><?php echo $summary?></p>
                </a>
              </li>
              <?php endwhile; ?>
            </ul>
          </div>
          <?php else: ?>
          <article>
            <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
          </article>
          <?php endif; ?>
          <!-- end left content -->
          <!--sidebar-->
          <div class="col-lg-3 sidebar hidden-md hidden-sm hidden-xs">
            <aside class="title newsgreen">
              <h3 class="fontsize-20">CALENDAR</h3>
            </aside>
            <figure class="calendar">
              <img src="<?php echo $path?>img/anouncement/calendar.png">
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
