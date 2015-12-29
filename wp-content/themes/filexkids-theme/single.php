<?php get_header(); ?>

	<main role="main">
		<article class="page news">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<aside class="center">
	    		<h3 class="banner"><img src="<?php echo home_url(); ?>/wp-content/uploads/2015/11/banner.png" alt="活動快訊"></h3>
			</aside>

			<aside class="fit">
			  <aside class="w960">
			    <span class="category" style="background:<?php echo get_term_by('id', the_category_id(false), 'category')->description; ?>"><?php _e( '', 'html5blank' ); the_category(', '); ?></span>
			    <br>
			    <span class="date"><?php the_time('Y.m.d'); ?></span>
			    <div class="fb-like" data-href="<?php the_permalink(); ?>" data-width="200px" data-layout="button_count" data-share="true"></div> 

			    <h3 class="title"><?php the_title(); ?></h3>

			    <section class="post">
			    	<?php the_content(); ?>
			    </section>
				<?php endwhile; ?>
				<?php else: ?>
					<article>
						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
					</article>
				<?php endif; ?>
			    
			  </aside>

			</aside>

			<aside class="center">
			    
			  <a href="/活動快訊" class="btn btn-default cwTeXHei">快訊一覽</a>
			</aside>

		</article>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
