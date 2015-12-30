<?php /* Template Name: 分校與聯絡 */ get_header(); ?>

<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>

    <section id="kv">
      <figure>
        <section class="container">
          <figcaption>
            <h2 class="fontsize-30"><span>分校&amp;聯絡</span><span>Education Institute</span></h2>
            <sub class="fontsize-14">分校&amp;聯絡</sub>
          </figcaption>
        </section>
        <?php the_post_thumbnail(); ?>
      </figure>
    </section>
    <section class="page contact">
      <!--breadcrumbs-->
      <section class="hidden-md hidden-xs hidden-sm breadcrumbs">
        <section class="container fontsize-13">
          <?php instant_breadcrumb(); ?> 
        </section>
      </section>
      <!-- end breadcrumbs -->
      <!--map-->
      <section class="map hidden-md hidden-sm hidden-xs">
        <div id="map-canvas"></div>
        <span class="map-icon"><img src="<?php echo $path?>" ></span>
      </section>
      <!-- end map -->
      <!--slide-->

      <?php 
      // the query
      $args = array(
        'post_type' => 'map',
        'posts_per_page' => 100
      );
      $wp_query = new WP_Query( $args ); 
      if (have_posts()): ?>
      <section class="container text-center">
        <h3 class="fontsize-32 brush hidden-lg">分校資訊</h3>
        <ul class="row contact-list hidden-xs hidden-sm hidden-md">
          <?php  while (have_posts()) : the_post(); ?>
          <?php 
            $ty = types_render_field("color");
            if($ty == "幼兒園"){
              $color = 'green';
            } else if($ty == "安親校"){
              $color = 'blue';
            } else{
              $color = 'yellow';
            }
          ?>
          <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <figure><?php echo types_render_field("thumbnail")?></figure>
            <aside class="box <?php echo $color;?> container text-left">
              <h3 class="fontsize-20"><?php the_title();?></h3>
              <p class="fontsize-15">TEL : <?php echo types_render_field("tel")?><br>ADD : <?php echo types_render_field("add")?></p>
              <p class="fontsize-15"><?php echo types_render_field("description")?></p>
              <ol class="fontsize-13">
                <li><a target="_blank" href="<?php echo types_render_field("gallery-link",array("raw"=>"true"))?>"><img class="svg" src="<?php echo $path?>img/nav/pic.svg">環鏡照片</a></li>
                <li><a target="_blank" href="<?php echo types_render_field("school-type-link",array("raw"=>"true"))?>"><img class="svg" src="<?php echo $path?>img/nav/book.svg">課程體系</a></li>
                <li><a target="_blank" href="<?php echo types_render_field("map-link",array("raw"=>"true"))?>"><img class="svg" src="<?php echo $path?>img/nav/pin.svg">完整地圖</a></li>
              </ol>
            </aside>
          </li>
          <?php endwhile; ?>
        </ul>
      </section>
      <?php else: ?>
      <section>
        <h3><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h3>
      </section>
      <?php endif; ?>

      <!-- end slide -->
      <!--form-->
      <section class="container form">
        <section class="row text-center">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="fontsize-32 brush">聯絡我們</h3>
            <p class="fontsize-14 text-center">歡迎您在這裡與我們分享您的建議與看法，為了孩子與我們共同的未來共盡心力！請填妥相關資料，我們會盡快與您聯絡！</p>
            <ol class="options fontsize-16">
              <li><label><input class="checkradios" type="radio" name="option">預約入學</label></li>
              <li><label><input class="checkradios" type="radio" name="option">洽詢入學及課程</label></li>
              <li><label><input class="checkradios" type="radio" name="option">加入家長社群 / 成為家長夥伴</label></li>
              <li><label><input class="checkradios" type="radio" name="option">參加活動</label></li>
              <li><label><input class="checkradios" type="radio" name="option">意見反應</label></li>
              <li><label><input class="checkradios" type="radio" name="option">其他</label></li>
            </ol>
            <form class="row">
              <section class="form-group parent col-lg-6">
                <input name="parent" required class="form-control" placeholder="家長姓名">
              </section>
              <section class="form-group kid col-lg-6">
                <input name="kid" class="form-control" placeholder="孩子姓名">
              </section>
              <section class="form-group phone col-lg-6">
                <input name="phone" required class="form-control" placeholder="連絡電話 ">
              </section>
              <section class="form-group gender col-lg-6">
                <input name="gender" class="form-control" placeholder="孩子性別">
              </section>
              <section class="form-group mail col-lg-6">
                <input name="mail" required class="form-control" placeholder="電子郵件">
              </section>
              <section class="form-group birth col-lg-6">
                <input name="birth" class="form-control" placeholder="孩子生日">
              </section>
              <section class="form-group advise col-lg-12">
                <textarea name="advise" required class="form-control" placeholder="洽詢或建議"></textarea>
              </section>
              <p class="highlight">[ ※ ] 為必填欄位。</p>
              <p>我們在收到您的訊息之後，會立刻與您聯絡，進一步了解及討論相關事宜。</p>
              <p>您亦可直接電洽各分校，或電洽 : 菲力校務中心-盧老師 (02) 2939-6258。</p>
              <button class="btn btn-default fontsize-18">送出</button>
            </form>
          </div>
        </section>
      </section>
      <!-- end form -->
    </section>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
