	<aside class="center">
<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>
    <?php get_template_part('news-kv'); ?>
	    <section class="page news">
			<!--breadcrumbs-->
			<section class="hidden-md hidden-xs hidden-sm breadcrumbs">
				<section class="container fontsize-13">
					<?php instant_breadcrumb(); ?> 
				</section>
			</section>
			<!-- end breadcrumbs -->


			<?php 
    $wp_query = new WP_Query( $args ); 

	$ty = get_post_type();
    $args = array(
      'post_type' => $ty,
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

			// the query

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
		        'post_type' => 'news09',
		        'posts_per_page' => 12,
		        'date_query' => $dq,
		        'order_by' => 'date',
		        'paged' => $page,
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
		          </div>
				<?php else: ?>
					<div class="col-lg-9">
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</div>
					<?php endif; ?>
					<!-- end left content -->
				    <!--sidebar-->
				    <?php get_sidebar('news'); ?>
				    <!-- end sidebar -->
		        </section>
		        <!--pagination-->
		        <section class="pagination newsgreen">
		        	<?php get_template_part('pagination'); ?>
		        </section>
		        <!--end pagination-->
			</div>
	    </section>
	</aside>