<?php /* Template Name: 學校新聞 */ get_header(); ?>

<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>

    <?php get_template_part('news-kv'); ?>
    <section class="page news">
      <?php get_template_part('breadcrumbs'); ?>
      <?php get_template_part('news-filter'); ?>
      <?php get_template_part('news-list'); ?>
    </section>

<?php get_footer('lightgreen'); ?>
