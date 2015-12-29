<?php get_header(); ?>

	<main role="main">
		<article id="post-<?php the_ID(); ?>" class="page news">
			<!-- <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1> -->
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</article>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
