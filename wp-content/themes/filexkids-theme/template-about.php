<?php /* Template Name: 關於 */ get_header(); ?>


    <section class="page about">
      <section class="container">
        <article class="row text-center">
          <?php if (have_posts()): the_post(); ?>
            <?php echo get_the_content();?>
          <?php endif?>
        </article>
      </section>
    </section>

<?php get_footer(); ?>
