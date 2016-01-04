<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>
<section id="kv">
  <figure>
    <section class="container">
      <figcaption>
        <h2 class="fontsize-30"><span>學校新聞</span><span>SCHOOL NEWS</span></h2>
        <sub class="fontsize-14">孩子在菲力的生活是豐富而開心的，我們帶領孩子成長學習的腳步從未停歇相片能真實呈現生活成長的軌跡；藉著相片，與菲力家長分享孩子生活的甜蜜點滴</sub>
      </figcaption>
    </section>
    <?php 
      // the query
      $args = array(
        'page_id' => 31
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