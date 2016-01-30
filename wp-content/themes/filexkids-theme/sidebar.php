<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>
<!--sidebar-->
<div class="col-lg-3 sidebar hidden-md hidden-sm hidden-xs newsgreen">

 <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('SideBar') ) : else : ?>
 <?php endif; ?>

<?php echo do_shortcode('[recent-posts posts="5" post_type="post" color="newsgreen"]');?>

  <aside class="title newsgreen">
    <h3 class="fontsize-20">FACEBOOK FAN PAGE</h3>
  </aside>
  <div class="fb-page" data-href="https://www.facebook.com/filexkids" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/filexkids"><a href="https://www.facebook.com/filexkids">菲力兒童文教機構 | Filexkids</a></blockquote></div></div>
</div>
<!-- end sidebar -->
