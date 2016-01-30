<?php /* Template Name: 心情留言板 */ get_header(); ?>

<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>

    <section id="kv">
      <figure>
        <section class="container">
          <figcaption>
            <h2 class="fontsize-30"><span>心情留言板</span><span>message board</span></h2>
            <sub class="fontsize-14">心情留言板</sub>
          </figcaption>
        </section>
        <?php the_post_thumbnail(); ?>
      </figure>
    </section>
    <section class="page comment">
      <!--breadcrumbs-->
      <section class="hidden-md hidden-xs hidden-sm breadcrumbs">
        <section class="container">
          <ul class="fontsize-13">
            <li><a href="javascript:">HOME</a></li>
            <li><a href="javascript:">菲力公告</a></li>
            <li class="active"><a href="javascript:">心情留言板</a></li>
          </ul>
        </section>
      </section>
      <!-- end breadcrumbs -->
      <div class="container">
        <div class="col-lg-12">
            <section class="row">
              <!--left content-->
              <div class="fb-comments col-lg-9" data-href="http://google.com/" data-width="100%" data-numposts="5" data-css="facebook.css"></div>
              <!-- end left content -->
              <!--sidebar-->
              <?php get_sidebar(); ?>
              <!-- end sidebar -->
            </section>
        </div>
      </div>
    </section>


<?php get_footer(); ?>
