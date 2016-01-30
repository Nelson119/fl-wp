<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>
<?php $post_type = get_post_type($post); $singular = get_post_type_object( $post_type )->labels->singular_name;?>
<?php 
  $ty = get_post_type();
      switch ( $ty ){
        case 'blog01':
          $color = 'yellow';
          break;
        case 'blog02':
        case 'blog03':
        case 'blog04':
        case 'blog05':
          $color = 'green';
          break;
        case 'blog06':
        case 'blog07':
        case 'blog08':
        case 'blog09':
          $color = 'blue';
          break;
      }
?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section class="page blog article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php get_template_part('breadcrumbs'); ?>
      <div class="container">
        <section class="row">
          <!--left content-->
          <article class="col-lg-9 <?php echo $color?>">
            <h3 class="fontsize-25"><?php the_title()?><div class="author" style="background-image:url(<?php  echo types_render_field("author-picture",array("raw"=>"true"))?>)"></div></h3>
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
          <?php get_sidebar('blog'); ?>
          <!-- end sidebar -->
        </section>
        <!--pagination-->
        <section class="goback orange text-center fontsize-18">
          <a href="<?php echo get_site_url(); ?>/blog">
            夢想筆記一覽<i class="fa fa-caret-right"></i>
          </a>
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