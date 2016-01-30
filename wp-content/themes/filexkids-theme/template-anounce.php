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
        'post_type' => 'post',
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
        'posts_per_page' => 12,
        'date_query' => $dq,
        'paged' => $page,
        'order_by' => 'date',
        'order' => 'desc'
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
                $summary = types_render_field("summary",array("raw"=>true));
                if($summary == null || $summary == ""){
                  $summary = get_the_content();
                  if(strlen($summary) > 42){
                    $summary = wp_trim_words( get_the_content(), 41 );
                  }
                }
              ?>
              <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <a href="<?php the_permalink();?>" class="box">
                  <figure>
                    <?php the_post_thumbnail()?>
                  </figure>
                  <p class="category">全校公告<img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                  <p class="fontsize-13 date"><i class="news-icon <?php echo types_render_field("icon-name",array("raw"=>true))?>"></i><?php the_time('Y/m/d')?></p>
                  <h4 class="fontsize-20"><?php the_title()?></h4>
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
            <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
          </div>
          <?php endif; ?>
          <!-- end left content -->
          <!--sidebar-->
          <?php get_sidebar(); ?>
          <!-- end sidebar -->
        </section>
      </div>
    </section>

<?php get_footer('lightgreen'); ?>
