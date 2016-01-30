<?php /* Template Name: 首頁 */ get_header(); ?>

<?php $path=get_template_directory_uri().'/'?>

    <section id="kv">
      <ul>
        <?php 
          $cfs = CFS();
          $pictures = $cfs->get('slides');
          if(count($pictures)) {
            foreach ($pictures as $picture) {
              $target = ' target="blank"';
              if($picture['link_target']){
                $target = 'target="blank"';
              }
              ?>
              <li>
                <a <?php echo $target?> href="<?php echo $picture['link']?>"><img src="<?php echo $picture['image_source']?>"></a>
              </li>
            <?php }

          }?>
      </ul>
    </section>
    <section class="page home">
      <!--concept-->
      <section class="concept text-center">
        <section class="container">
          <h3 class="brush fontsize-30">Concept</h3>
          <h4 class="fontsize-24"><?php echo $cfs->get('concept_title')?></h4>
          <p class="fontsize-15"><?php echo $cfs->get('concept_summary')?></p>

          <ul class="row">
            <li class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <a href="<?php echo get_site_url()?>/0-3歲愛兒館">
                <img alt="0-3Y 愛兒館" src="<?php echo $path?>img/home/concept1.png">
                <span class="fontsize-16"><?php echo $cfs->get('0_3y_')?></span>
                <figure class="bloom"><div>
                  <figcaption class="fontsize-30">0-3Y 愛兒館</figcaption>
                  <img class="svg" src="<?php echo $path?>img/common/dialog-bloom.svg">
                </div></figure>
              </a>
            </li>
            <li class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <a href="<?php echo get_site_url()?>/2-6歲幼兒園">
                <img alt="2-6Y 幼兒園" src="<?php echo $path?>img/home/concept2.png">
                <span class="fontsize-16"><?php echo $cfs->get('2_6y_')?></span>
                <figure class="bloom"><div>
                  <figcaption class="fontsize-30">2-6Y 幼兒園</figcaption>
                  <img class="svg" src="<?php echo $path?>img/common/dialog-bloom.svg">
                </div></figure>
              </a>
            </li>
            <li class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <a href="<?php echo get_site_url()?>/6-12歲安親校">
                <img alt="6-12Y 安親校" src="<?php echo $path?>img/home/concept3.png">
                <span class="fontsize-16"><?php echo $cfs->get('6_12y_')?></span>
                <figure class="bloom"><div>
                  <figcaption class="fontsize-30">6-12Y 安親校</figcaption>
                  <img class="svg" src="<?php echo $path?>img/common/dialog-bloom.svg">
                </div></figure>
              </a>
            </li>
          </ul>
        </section>
      </section>
      <!-- end concept -->
      <!--bulletin-->
      <section class="bulletin text-center">
        <section class="container">
          <section class="row">
            <section class="col-lg-12 text-left">
              <aside class="title">
                <h3 class="fontsize-30">全校公告</h3><sub class="fontsize-14"><?php echo $cfs->get('anounce_tagline')?></sub>
                <h6><a href="<?php echo get_site_url()?>/anounce">全校公告一覽</a></h6>
              </aside>
            </section>
          </section>
          <ul class="row">
            <?php 
              $args = array(
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order'   => 'DESC',
                'post_type' => 'post'
              );
              $wp_query = new WP_Query( $args ); 
              ?>
              <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <?php
              $summary = types_render_field("summary", array(raw =>true));
              if($summary == null || $summary == ""){
                $summary = wp_trim_words( get_the_content(), 41 );
              }
              $url = get_the_permalink();
            ?>
            <li class="col-lg-4 col-md-12 col-sm-12 col-xs-12" id="<?php get_the_id()?>">
              <a href="<?php echo $url?>">
                <p class="date fontsize-13"><?php echo get_the_date('Y/m/d')?></p>
                <figure class="<?php echo types_render_field("icon-name",array("raw"=>true))?>"></figure>
                <h4 class="fontsize-20"><?php echo wp_trim_words( get_the_title(), 30 )?></h4>
                <h5 class="fontsize-15"><?php  echo $summary?></h5>
                <span class="btn fontsize-13">
                  more<i class="fa fa-chevron-right"> </i>
                </span>
              </a>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
          </ul>
        </section>
      </section>
      <!-- end bulletin -->
      <!--news-->
      <section class="news text-left">
        <section class="container">
          <section class="row">
            <section class="col-lg-12 text-left">
              <aside class="title">
                <h3 class="fontsize-30">學校新聞</h3><sub class="fontsize-14"><?php echo $cfs->get('news_tagline')?></sub>
                <h6><a href="<?php echo get_site_url()?>/news">學校新聞一覽</a></h6>
              </aside>
            </section>
          </section>
          <ul class="row box-list">
          <?php 
            $args = array(
              'post_type' => array( 'news01', 'news02' , 'news03' , 'news04' , 'news05' , 'news06' , 'news07' , 'news08', 'news09' ),
              'posts_per_page' => 9,
                'orderby' => 'date',
                'order'   => 'DESC'
            );
            $wp_query = new WP_Query( $args ); 
          ?>
          <?php  while (have_posts()) : the_post(); ?>
          <?php 
            $ty = get_post_type();
            global $wp_post_types;
            $ty_name = $wp_post_types[$ty]->labels->name;
            switch ( $ty ){
              case 'news01':
                $color = 'yellow';
                break;
              case 'news02':
              case 'news03':
              case 'news04':
              case 'news05':
                $color = 'green';
                break;
              case 'news06':
              case 'news07':
              case 'news08':
              case 'news09':
                $color = 'blue';
                break;
            }
            $summary = types_render_field("summary", array(raw =>true));
            if($summary == null || $summary == ""){
              $summary = wp_trim_words( get_the_content(), 41 );
            }
            $url = get_the_permalink();
          ?>
            <li class="<?php echo $color?> col-lg-4 col-md-6 col-sm-6 col-xs-6">
              <a href="<?php echo $url?>" class="box">
                <figure>
                  <?php echo get_the_post_thumbnail()?>
                </figure>
                <p class="category"><?php echo $ty_name?><img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                <p class="fontsize-13 date"><img src="<?php echo $path?>img/home/news.svg"><?php echo get_the_date('Y/m/d')?></p>
                <h4 class="fontsize-20"><?php echo wp_trim_words( get_the_title(), 30 )?></h4>
                <p class="fontsize-15 visible-lg"><?php  echo $summary?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
          </ul>
        </section>
      </section>
      <!-- end news -->
      <!--life-->
      <section class="life text-center">
        <section class="container">
          <h3 class="brush fontsize-30">菲力生活</h3>
          <h4 class="fontsize-14"><?php echo $cfs->get('life_tagline')?></h4>
        </section>
        <section class="container slide-container">
          <ul class="row text-left box-list">
          <?php 
            $args = array(
              'post_type' => array( 'album01', 'album02' , 'album03' , 'album04' , 'album05' , 'album06' , 'album07' , 'album08', 'album09' ),
              'posts_per_page' => 9,
              'orderby' => 'date',
              'order'   => 'DESC'
            );
            $wp_query = new WP_Query( $args ); 
          ?>
          <?php  while (have_posts()) : the_post(); ?>
          <?php 
            $ty = get_post_type();
            global $wp_post_types;
            $ty_name = $wp_post_types[$ty]->labels->singular_name;
            switch ( $ty ){
              case 'album01':
                $color = 'yellow';
                break;
              case 'album02':
              case 'album03':
              case 'album04':
              case 'album05':
                $color = 'green';
                break;
              case 'album06':
              case 'album07':
              case 'album08':
              case 'album09':
                $color = 'blue';
                break;
            }
            $summary = types_render_field("summary", array(raw =>true));
            if($summary == null || $summary == ""){
              $summary = wp_trim_words( get_the_content(), 41 );
            }
            $thumbnail = types_render_field("thumbnail", array(raw =>true));
            $url = get_site_url(). '/albums/播放?title= '.get_the_title().'&galleryURL=' . get_site_url().'/albums/xml%3Ffid='. types_render_field("flickr-photoset", array("raw"=>true));
          ?>
            <li class="<?php echo $color?> col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <a href="<?php echo $url?>" class="box">
                <figure>
                   <img src="<?php echo $thumbnail?>">
                </figure>
                <p class="category"><?php echo $ty_name?><img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></p>
                <p class="fontsize-13 date"><?php echo get_the_date('Y/m/d')?></p>
                <h4 class="fontsize-20"><?php echo wp_trim_words( get_the_title(), 30 )?></h4>
                <p class="fontsize-15 visible-lg"><?php  echo $summary?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
          </ul>
        </section>
        <h6><a href="<?php echo get_site_url()?>/albums">生活相簿一覽</a></h6>
      </section>
      <!-- end life -->
      <!--blog-->
      <section class="blog text-center">
        <section class="container">
          <section class="row">
            <section class="col-lg-8 text-left">
              <aside class="title">
                <h3 class="fontsize-30">夢想筆記</h3><sub class="fontsize-14"><?php echo $cfs->get('blog_tagline')?></sub>
                <h6><a href="<?php echo get_site_url()?>/blog">夢想筆記一覽</a></h6>
              </aside>
              <ul class="list">
              <?php 
                $args = array(
                  'post_type' => array( 'blog01', 'blog02' , 'blog03' , 'blog04' , 'blog05' , 'blog06' , 'blog07' , 'blog08', 'blog09' ),
                  'posts_per_page' => 5,
                  'orderby' => 'date',
                  'order'   => 'DESC' 
                );
                $wp_query = new WP_Query( $args ); 
              ?>
              <?php  while (have_posts()) : the_post(); ?>
              <?php 
                $ty = get_post_type();
                global $wp_post_types;
                $ty_name = $wp_post_types[$ty]->labels->singular_name;
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
                // $url = the_permalink(false);
              ?>
                <li class="col-lg-12 col-xs-12 col-sm-12 col-md-12 <?php $color?>">
                  <span class="col-lg-3 col-md-3 col-sm-3 date fontsize-13"><?php the_date('Y/m/d')?><sub class="category fontsize-13"><?php echo $ty_name?><img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></sub></span>
                  <h4 class="col-lg-6 col-md-6 col-sm-6 fontsize-16"><a href="<?php echo get_the_permalink()?>"><?php  echo wp_trim_words( get_the_title(), 30 )?></a></h4>
                  <span class="author col-lg-3 col-md-3 col-sm-3 fontsize-15 text-right"><?php echo types_render_field("author-name",array("raw"=>"true"))?></span>
                </li>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
              </ul>
            </section>
            <aside class="col-lg-4 hidden-md hidden-sm hidden-xs">
              <div class="fb-page" data-href="https://www.facebook.com/filexkids" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/filexkids"><a href="https://www.facebook.com/filexkids">菲力兒童文教機構 | Filexkids</a></blockquote></div></div>
            </aside>
          </section>
        </section>
      </section>
      <!-- end blog -->
    </section>
<style>
  ul.box-list, ul.list{
    min-height: 0;
  }
</style>
<?php get_footer(); ?>
