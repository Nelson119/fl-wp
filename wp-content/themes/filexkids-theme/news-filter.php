<?php 

  if($wp_query->query_vars['post_type'] != ''){
    $post_type = $wp_query->query_vars['post_type'];
    // echo $post_type;
  }else{
    $post_type = get_post_type($post);
  }
  $single = get_post_type_object( $post_type );
  if($wp_query->query_vars['post_type'] != ''){
    $post_type = $wp_query->query_vars['post_type'];
    // echo $post_type;
  }else{
    $post_type = get_post_type($post);
  }
  //Default values for the resulting variables
  $oldestyear = date('Y');
  $oldestmonth = date('m');
              
  //Calculate Oldest Post Date
  $args = array('orderby'=>'date','order'=>'ASC','posts_per_page'=>1,'caller_get_posts'=>1);
  $oldestpost = get_posts($args);

  //Extract the date information            
  if (!empty($oldestpost)){
      $oldestyear = mysql2date('Y',$oldestpost[0]->post_date);
      $oldestmonth = mysql2date('m',$oldestpost[0]->post_date);
  }
  $now = date('Y');
  $year = $now;
  $year = get_query_var('year');
        // global $wp_rewrite;
        // var_dump($wp_rewrite);

?>
<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>
<div class="filter-dropdown newsgreen">
  <div class="container">
    <div class="row">
      <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="dropdown fontsize-14">
          <button value="<?php echo $single->labels->name == "頁面" ? "" : $single->labels->name?>" class="btn btn-default dropdown-toggle" type="button" id="dropdownSchool" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" >
            <?php echo $single->labels->name == "頁面" ? "分校選擇" : $single->labels->name?>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownSchool">
            <li<?php if($ty == 'page'):?> class="selected"<?php endif?>><a href="javascript:">全部分校</a></li>
            <li<?php if($ty == 'news01'):?> class="selected"<?php endif?>><a href="javascript:">安康安親</a></li>
            <li<?php if($ty == 'news02'):?> class="selected"<?php endif?>><a href="javascript:">北新安親</a></li>
            <li<?php if($ty == 'news03'):?> class="selected"<?php endif?>><a href="javascript:">中興安親</a></li>
            <li<?php if($ty == 'news04'):?> class="selected"<?php endif?>><a href="javascript:">大豐安親</a></li>
            <li<?php if($ty == 'news05'):?> class="selected"<?php endif?>><a href="javascript:">復興幼園</a></li>
            <li<?php if($ty == 'news06'):?> class="selected"<?php endif?>><a href="javascript:">安康幼園</a></li>
            <li<?php if($ty == 'news07'):?> class="selected"<?php endif?>><a href="javascript:">中興幼園</a></li>
            <li<?php if($ty == 'news08'):?> class="selected"<?php endif?>><a href="javascript:">安華幼園</a></li>
            <li<?php if($ty == 'news09'):?> class="selected"<?php endif?>><a href="javascript:">中興愛兒</a></li>
          </ul>
        </div>
      </aside>
      <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="dropdown">
          <button value="<?php echo $year == "" ? "" : $year?>" class="btn btn-default dropdown-toggle" type="button" id="dropdownYear" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <?php echo $year == "" ? "年份選擇" : $year?>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownYear">
            <li><a href="javascript:">全部年份</a></li>
            <?php 
            for($i=$now;$i>=$oldestyear;$i--){
              $selected = ( $year == $i ? ' class="seleted" ':'' );
              echo '<li'.$selected.'><a href="javascript:">'.$i.'</a></li>';
            }
            ?>
          </ul>
        </div>
      </aside>
      <a class="filter-link" href="<?php echo home_url(); ?>/學校新聞/"></a>
    </div>
  </div>
</div>