<?php get_header(); ?>

<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>
<?php $post_type = get_post_type($post); $singular = get_post_type_object( $post_type )->labels->name;
          $singular = str_replace('夢想筆記','', $singular);?>
<?php 
	$ty = get_post_type();
	switch ( $ty ){
		case 'blog01':
		case 'news01':
			$color = 'yellow';
			break;
		case 'blog02':
		case 'blog03':
		case 'blog04':
		case 'blog05':
		case 'news02':
		case 'news03':
		case 'news04':
		case 'news05':
			$color = 'green';
			break;
		case 'blog06':
		case 'blog07':
		case 'blog08':
		case 'blog09':
		case 'news06':
		case 'news07':
		case 'news08':
		case 'news09':
			$color = 'blue';
			break;
		default :
			$color = 'red';
			break;
	}
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
?>
	<main role="main">
	    <section id="kv">
	      <figure class="hidden-xs hidden-sm hidden-md">
	        <section class="container">
	          <figcaption>
	            <h2 class="fontsize-30"><span>學校新聞</span><span>SCHOOL NEWS</span></h2>
	            <sub class="fontsize-14">學校，不僅是孩子學習的地方，更是孩子生活的地方；<br>預備好的環境和教學計畫只是舞台，孩子才是舞台上真正的主角。<br>學校更是一個有機體，因為有了家長、孩子與教師的互動，才能真正彰顯價值！<br>這裡是菲力各校學習現場的一幕幕精彩片段，讓家長更貼近孩子們的成長點滴。</sub>
	          </figcaption>
	        </section>
	        <img src="<?php echo $path?>img/anouncement/kv.png">
	      </figure>
	    </section>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	    <section class="page news article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	      <!--breadcrumbs-->
	      <section class="hidden-md hidden-xs hidden-sm breadcrumbs">
	        <section class="container">
          		<?php instant_breadcrumb(); ?> 
	        </section>
	      </section>
	      <!-- end breadcrumbs -->
	      <div class="container">
	        <section class="row">
	          <!--left content-->
	          <article class="col-lg-9 newsgreen">
	            <h3 class="fontsize-25"><?php the_title()?></h3>
	            <h4 class="tagline fontsize-13">              
	              <span class="category <?php echo $color?>"><?php echo $singular?><img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></span>
	              <span class="date"><?php the_date('Y/m/d')?></span>
	              <span class="author">Written by <?php  echo types_render_field("author-name",array("raw"=>"true"))?></span>
	            </h4>
	            <aside class="text-content fontsize-17">
		    		<?php the_content(); ?>
	            </aside>
	            <!-- like button -->
	            <aside class="like-button">
	              <script>
	              document.write('<div class="fb-like" data-href="<?php the_permalink()?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>');
	              </script>
	            </aside>
	            <!-- end like button -->
	            <!-- comments -->
	            <aside class="comments">
	              <script>
	              document.write('<div class="comments"><div class="fb-comments" data-href="<?php the_permalink()?>" data-width="100%" data-numposts="5"></div></div>');
	              </script>
	            </aside>
	            <!-- end comments -->
	          </article>
	          <!-- end left content -->
	          <!--sidebar-->

				<?php 
				      switch ( $ty ){
				        case 'blog01':
				        case 'blog02':
				        case 'blog03':
				        case 'blog04':
				        case 'blog05':
				        case 'blog06':
				        case 'blog07':
				        case 'blog08':
				        case 'blog09':?>
			  			<?php get_sidebar('blog'); ?>

		        <?php
				          break;
				        case 'news01':
				        case 'news02':
				        case 'news03':
				        case 'news04':
				        case 'news05':
				        case 'news06':
				        case 'news07':
				        case 'news08':
				        case 'news09':?>
		  				<?php get_sidebar('news'); ?>
		        <?php
				          break;
				      	default :?>
			  			<?php get_sidebar(); ?>
		        <?php
				  			break;
				      }
				?>

	          <!-- end sidebar -->
	        </section>
	        <!--pagination-->
	        <section class="goback newsgreen text-center fontsize-18">
				<?php 
				      switch ( $ty ){
				        case 'blog01':
				        case 'blog02':
				        case 'blog03':
				        case 'blog04':
				        case 'blog05':
				        case 'blog06':
				        case 'blog07':
				        case 'blog08':
				        case 'blog09':?>
			          <a href="<?php echo get_site_url(); ?>/blog">
			            夢想筆記一覽<i class="fa fa-caret-right"></i>
			          </a>

		        <?php
				          break;
				        case 'news01':
				        case 'news02':
				        case 'news03':
				        case 'news04':
				        case 'news05':
				        case 'news06':
				        case 'news07':
				        case 'news08':
				        case 'news09':?>
			          <a href="<?php echo get_site_url(); ?>/news">
			            各校新聞一覽<i class="fa fa-caret-right"></i>
			          </a>
		        <?php
				          break;
				      	default :?>
			          <a href="<?php echo get_site_url(); ?>/anounce">
			            全校公告一覽<i class="fa fa-caret-right"></i>
			          </a>
		        <?php
				  			break;
				      }
				?>
	        </section>
	        <!--end pagination-->
	      </div>
	    </section>
		<?php endwhile; ?>
	<?php else: ?>
	<article>
		<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
	</article>
	<?php endif; ?>
	</main>
<?php get_footer(); ?>
