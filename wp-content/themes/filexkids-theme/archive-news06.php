<?php get_header(); ?>
	<main role="main">
		<section>
			<!-- <h1><?php _e( 'Archives', 'html5blank' ); ?></h1> -->
			<?php get_template_part('loop-news06'); ?>
			<?php get_template_part('pagination'); ?>
		</section>
	</main>

<?php get_footer(); ?>
