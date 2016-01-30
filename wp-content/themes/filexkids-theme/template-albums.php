<?php /* Template Name: 相簿影片 */ get_header(); ?>

<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>

    <?php get_template_part('albums-kv'); ?>
    <section class="page albums">
      <?php get_template_part('breadcrumbs'); ?>
      <?php get_template_part('albums-filter'); ?>
      <?php get_template_part('albums-list'); ?>
    </section>

<?php get_footer('orange'); ?>
