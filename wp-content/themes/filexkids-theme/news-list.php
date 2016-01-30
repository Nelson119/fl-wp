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
    $school = null;
    if(isset($_GET['school'])){
      $school = $_GET['school'];
    }
    $pty = array( 'news01', 'news02' , 'news03' , 'news04' , 'news05' , 'news06' , 'news07' , 'news08', 'news09' );

    $wp_query = new WP_Query( $args ); 

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
            $summary = types_render_field("summary", array(raw =>true));
            if($summary == null || $summary == ""){
              $summary = wp_trim_words( get_the_content(), 41 );
            }
        ?>
        <li class="<?php echo $color?> col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <a href="<?php the_permalink()?>" class="box">
            <figure>
              <?php echo get_the_post_thumbnail()?>
            </figure>
            <p class="category"><?php echo $ty_name;?><img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
            <p class="fontsize-13 date"><img src="<?php echo $path?>img/home/news.svg"> <?php the_time('Y/m/d') ?> </p>
            <h4 class="fontsize-20"><?php echo wp_trim_words( the_title(false), 30 )?></h4>
            <p class="fontsize-15 visible-lg"><?php echo $summary?></p>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <!--pagination-->
      <section class="pagination newsgreen">
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
    <?php get_sidebar('news'); ?>
    <!-- end sidebar -->
  </section>
  <?php wp_reset_query(); ?>
</div>