<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>
<div class="container">
  <section class="row">
    <!--left content-->
    <?php 
    // the query
    $school = null;
    if(isset($_GET['school'])){
      $school = $_GET['school'];
    }
    $pty = array( 'album01', 'album02' , 'album03' , 'album04' , 'album05' , 'album06' , 'album07' , 'album08', 'album09' );

    switch($school){
      case '中興愛兒':
        $pty = $pty[0];
        break;
      case '安華幼園':
        $pty = $pty[1];
        break;
      case '中興幼園':
        $pty = $pty[2];
        break;
      case '安康幼園':
        $pty = $pty[3];
        break;
      case '復興幼園':
        $pty = $pty[4];
        break;
      case '大豐安親':
        $pty = $pty[5];
        break;
      case '中興安親':
        $pty = $pty[6];
        break;
      case '北新安親':
        $pty = $pty[7];
        break;
      case '安康安親':
        $pty = $pty[8];
        break;
    }
    $args = array(
      'post_type' => $pty,
      'posts_per_page' => 5000,
      'order_by' => 'date',
      'order' => 'desc'
    );
    $wp_query = new WP_Query( $args );
    $highlightDate = array();
    
    while (have_posts()) : the_post();
      array_push($highlightDate,get_the_date('Y/m/d'));
    endwhile;
    echo '<script> var highlightDates=\''.json_encode($highlightDate).'\'</script>';

    wp_reset_query();

    $dq = array();
    if(isset($_GET['filter_year'])){
      $dq['year'] = $_GET['filter_year'];
    }
    if(isset($_GET['filter_month'])){
      $dq['month'] = $_GET['filter_month'];
    }
    if(isset($_GET['filter_day'])){
      $dq['day'] = $_GET['filter_day'];
    }


    $args = array(
      'post_type' => $pty,
      'posts_per_page' => 12,
      'date_query' => $dq,
      'order_by' => 'date',
      'paged' => $page,
      'order' => 'desc'
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
          $ty_name = str_replace('相簿','', $ty_name);
          switch ( $ty ){
            case 'album01':
              $color = 'yellow';
              break;
            case 'album02':
            case 'album03':
            case 'album04':
            case 'album05':
              $color = 'green';
              break;
            case 'album06':
            case 'album07':
            case 'album08':
            case 'album09':
              $color = 'blue';
              break;
          }
          $summary = types_render_field("summary", array(raw =>true));
          $thumbnail = types_render_field("thumbnail", array(raw =>true));
          $url = get_site_url(). '/albums/播放?title='.get_the_title().'&galleryURL=' . get_site_url().'/nu%3Ffid='. types_render_field("flickr-photoset", array("raw"=>true));
        ?>
        <li class="<?php echo $color?> col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <a href="<?php echo $url?>" class="box">
            <figure>
              <img src="<?php echo $thumbnail?>">
            </figure>
            <p class="category"><?php echo $ty_name?><img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
            <p class="fontsize-13 date"><?php the_time('Y/m/d') ?> </p>
            <h4 class="fontsize-20"><?php echo wp_trim_words( the_title(false), 30 )?></h4>
            <p class="fontsize-15 visible-lg"><?php echo $summary?></p>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <!--pagination-->
      <section class="pagination orange">
        <?php get_template_part('pagination'); ?>
      </section>
      <!--end pagination-->
    </div>
    <?php else: ?>
    <div class="col-lg-9">
      <h3><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h3>
    </div>
    <?php endif; ?>
    <!-- end left content -->
    <!--sidebar-->
    <?php get_sidebar('album'); ?>
    
    <!-- end sidebar -->
  </section>
  <?php wp_reset_query(); ?>
</div>