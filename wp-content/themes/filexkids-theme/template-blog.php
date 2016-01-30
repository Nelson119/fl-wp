<?php /* Template Name: 學校新聞 */ get_header(); ?>

<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>

    <?php get_template_part('blog-kv'); ?>
    <section class="page blog">
      <?php get_template_part('breadcrumbs'); ?>
      <?php get_template_part('blog-filter'); ?>
      <?php get_template_part('blog-list'); ?>
    </section>

<?php get_footer('orange'); ?>
