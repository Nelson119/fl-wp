<?php get_header(); ?>
<?php echo 1?>
	<main role="main">
		<section>
			<!-- <h1><?php _e( 'Archives', 'html5blank' ); ?></h1> -->
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</section>
	</main>

<?php get_footer(); ?>
