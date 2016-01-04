<?php 
  // print_r(get_post_type($post));
// print_r($wp_query->query_vars['post_type'] == '');
  if($wp_query->query_vars['post_type'] != ''){
    $post_type = $wp_query->query_vars['post_type'];
    // echo $post_type;
  }else{
    $post_type = get_post_type($post);
  }
?>

<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>
<div class="container">
  <section class="row">
    <!--left content-->
    <?php 
    // the query
    // echo $post;
    if($post_type !== 'page'){
      $args = array(
        'post_type' => array($post_type),
        'posts_per_page' => 12
      );
    }else{
      $args = array(
        'post_type' => array( 'news01', 'news02' , 'news03' , 'news04' , 'news05' , 'news06' , 'news07' , 'news08', 'news09' ),
        'posts_per_page' => 12
      );
    }
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
    <div class="col-lg-9">
      <h3><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h3>
    </div>
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
  <?php wp_reset_query(); ?>
</div>