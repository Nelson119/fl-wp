<?php get_header(); ?>

<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>
	<main role="main">
	    <section id="kv">
	      <figure class="hidden-xs hidden-sm hidden-md">
	        <section class="container">
	          <figcaption>
	            <h2 class="fontsize-30"><span>學校新聞</span><span>SCHOOL NEWS</span></h2>
	            <sub class="fontsize-14">學校，不僅是孩子學習的地方，更是孩子生活的地方；<br>預備好的環境和教學計畫只是舞台，孩子才是舞台上真正的主角。<br>學校更是一個有機體，因為有了家長、孩子與教師的互動，才能真正彰顯價值！<br>這裡是菲力各校學習現場的一幕幕精彩片段，讓家長更貼近孩子們的成長點滴。</sub>
	          </figcaption>
	        </section>
	        <img src="<?php echo $path?>img/anouncement/kv.png">
	      </figure>
	    </section>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	    <section class="page news article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	      <!--breadcrumbs-->
	      <section class="hidden-md hidden-xs hidden-sm breadcrumbs">
	        <section class="container">
          		<?php instant_breadcrumb(); ?> 
	        </section>
	      </section>
	      <!-- end breadcrumbs -->
	      <div class="container">
	        <section class="row">
	          <!--left content-->
	          <article class="col-lg-9 newsgreen">
	            <h3 class="fontsize-25"><?php the_title()?></h3>
	            <h4 class="tagline fontsize-13">              
	              <span class="category green">安康幼園<img class="svg" src="<?php echo $path?>img/common/hashtag.svg"></span>
	              <span class="date"><?php the_date('Y/m/d')?></span>
	              <span class="author">Written by <?php the_author();?></span>
	            </h4>
	            <aside class="text-content fontsize-17">
	              <!-- <img src="<?php echo $path?>img/news/picture.png">
	              <p>&nbsp;</p>
	              <p>　　小時候我最喜歡去外婆家，因為外婆家有一片綠油油的稻田，在田裡踩泥巴、爬樹、拔菜、抓昆蟲，是小時候最快樂的事。到外婆家吃飯時，碗裡都有一隻大雞腿，只有我有喔！因為外婆說：「阿梅最喜歡吃雞腿了。」還記得弟弟妹妹們常為了這件事抗議，但雞腿還是我專屬的。這些點點滴滴成了長大後最感動的記憶。現在外婆已經98歲，和她說話要很大聲，因為她的耳朵聽不到，也不記得任何事情，看著她日漸衰老的身體，真的好心疼。</p>
	              <p>&nbsp;</p>
	              <p>　　孩子剛上學時，嘴邊常念著「我要找阿嬤~我要找阿嬤~」放學時候看到門口是阿嬤、阿公接，笑容燦爛的讓人忌妒，一句謝謝奶奶來接我，叫得特別的甜，老人家的笑容更是一種無法形容的滿足感。嘴裡還問著：「今天在學校乖不乖，有沒有聽老師的話……」假日過後回到學校，談論的都是「我到阿嬤家玩，阿嬤、阿公帶我去爬山、去騎腳踏車還有去公園玩喔！」</p>
	              <p>&nbsp;</p>
	              <p>　　「爺爺，孩子已經睡著了，為什麼不放到床上，背著很累的？」爺爺笑著說：「他就愛黏著我，一放到床上就會醒的，只要我揹著就可睡得很安穩。」臉上更是綻放被需要的光芒。奶奶說：「當年做媽媽時是出了名的『虎媽』一心只想孩子功成名就，還會打罵孩子。但當了奶奶後卻變得慈祥了，罵都沒罵過孫女。」</p>
	              <p>&nbsp;</p>
	              <p>　　為什麼落差這麼大？老人家的說法是：退休後有機會帶孫子孫女，自然想彌補年輕時失落的親子互動品質。現在把自己定位為孫子們的玩伴及大玩偶，放低身段和孫子一起塗鴉，一起玩角色扮演遊戲。難怪孩子們常嚷嚷著要找爺爺、奶奶了。</p>
	              <p>&nbsp;</p>
	              <p>　　『家有一老如有一寶』在現在的生活環境裡更是如此。而且『愛要及時』天氣漸涼，在重陽節前夕別忘了帶著孩子，打通電話給家中的長輩們，帶著孩子陪陪老人家，相信這是送給老人家們最好的禮物。</p>
	              <p>&nbsp;</p>
	              <p>[貼心提醒]</p>
	              <p>1.最近家長常詢問：「萬聖節需要裝扮嗎？要不要提早準備呢？」姐姐們也不斷思考，要帶著孩子以什麼樣的態度迎接「萬聖節」？忙著裝扮、唱著不給糖、就搗蛋！這樣就夠了嗎？總覺得缺少了那麼一點點意義。有人說萬聖節是屬於西洋的節日，但對孩子而言，卻是一種裝扮的體驗，一種不同於平時情境的視覺、聽覺的刺激挑戰，從活動中認識另一種文化，不也是很有樂趣嗎！</p>
	              <p>&nbsp;</p> -->
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
	          <div class="col-lg-3 sidebar hidden-md hidden-sm hidden-xs">
	            <aside class="title newsgreen">
	              <h3 class="fontsize-20">CALENDAR</h3>
	            </aside>
	            <figure class="calendar">
	              <img src="<?php echo $path?>img/news/calendar.png">
	            </figure>
	            <aside class="title newsgreen">
	              <h3 class="fontsize-20">Recent Posts</h3>
	            </aside>
	            <ul class="recent-posts newsgreen">
	              <li>
	                <h4 class="row fontsize-reset">
	                  <span class="date fontsize-15 col-lg-4">2015/10/05</span>
	                  <a class="col-lg-8 fontsize-16" href="javascript:">平時防災做得好│災害來沒煩惱</a>
	                </h4>
	              </li>
	              <li>
	                <h4 class="row fontsize-reset">
	                  <span class="date fontsize-15 col-lg-4">2015/10/05</span>
	                  <a class="col-lg-8 fontsize-16" href="javascript:">教學觀摩家長日│寶貝帶著爸爸媽媽去上學</a>
	                </h4>
	              </li>
	              <li>
	                <h4 class="row fontsize-reset">
	                  <span class="date fontsize-15 col-lg-4">2015/10/05</span>
	                  <a class="col-lg-8 fontsize-16" href="javascript:">平時防災做得好│災害來沒煩惱</a>
	                </h4>
	              </li>
	              <li>
	                <h4 class="row fontsize-reset">
	                  <span class="date fontsize-15 col-lg-4">2015/10/05</span>
	                  <a class="col-lg-8 fontsize-16" href="javascript:">Open House誰來當老師│歡樂飛盤逍遙遊</a>
	                </h4>
	              </li>
	              <li>
	                <h4 class="row fontsize-reset">
	                  <span class="date fontsize-15 col-lg-4">2015/10/05</span>
	                  <a class="col-lg-8 fontsize-16" href="javascript:">教學觀摩家長日│寶貝帶著爸爸媽媽去上學</a>
	                </h4>
	              </li>
	            </ul>
	            <aside class="title newsgreen">
	              <h3 class="fontsize-20">FACEBOOK FAN PAGE</h3>
	            </aside>
	            
	            <!-- fan page -->
	            <script>
	            document.write('<div class="fb-page" data-href="https://www.facebook.com/filexkids" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/filexkids"><a href="https://www.facebook.com/filexkids">菲力兒童文教機構 | Filexkids</a></blockquote></div></div>');
	            </script>
	            <!-- end fanpage -->
	          </div>
	          <!-- end sidebar -->
	        </section>
	        <!--pagination-->
	        <section class="goback newsgreen text-center fontsize-18">
	          <a href="/fl/各校新聞">
	            學校新聞一覽<i class="fa fa-caret-right"></i>
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
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
