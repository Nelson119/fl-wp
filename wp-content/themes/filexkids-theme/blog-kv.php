<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>
<section id="kv">
  <figure class="hidden-xs hidden-sm hidden-md">
    <section class="container">
      <figcaption>
        <h2 class="fontsize-30"><span>夢想筆記</span><span>BLOG</span></h2>
        <sub class="fontsize-14">有觀點，就能找到方向</sub>
      </figcaption>
    </section>
    <?php 
      // the query
      $args = array(
        'page_id' => 49
      );
      $wp_query = new WP_Query( $args );
      if ($wp_query->have_posts()){ 
        $wp_query->the_post(); 
      ?>
    <?php the_post_thumbnail(); ?>
    <?php 
      } 
    ?>
    <?php wp_reset_query(); ?>
  </figure>
</section>