<?php 
  $school = null;
  if(isset($_GET['school'])){
    $school = $_GET['school'];
    if($school == ''){
      $school = '全部分校';
    }
  }
  //Default values for the resulting variables
  $oldestyear = date('Y');
  $oldestmonth = date('m');
              
  //Calculate Oldest Post Date
  $args = array('orderby'=>'date','order'=>'ASC','posts_per_page'=>1,'caller_get_posts'=>1
    ,'post_type'=>array('news01','news02','news03','news04','news05','news06','news07','news08','news09'));
  $oldestpost = get_posts($args);

  //Extract the date information            
  if (!empty($oldestpost)){
      $oldestyear = mysql2date('Y',$oldestpost[0]->post_date);
      $oldestmonth = mysql2date('m',$oldestpost[0]->post_date);
  }
  $now = date('Y');
  $year = '';
  if(isset($_GET['filter_year'])){
    $year = $_GET['filter_year'];
  }

?>
<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>
<div class="filter-dropdown newsgreen">
  <div class="container">
    <div class="row">
      <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="dropdown fontsize-14">
          <button value="<?php echo $school?>" class="btn btn-default dropdown-toggle" type="button" id="dropdownSchool" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" >
            <?php echo $school == "" ? "學校選擇" : $school?>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownSchool">
            <li<?php if($school == ''):?> class="selected"<?php endif?>><a href="javascript:">全部分校</a></li>
            <li<?php if($school == '安康安親'):?> class="selected"<?php endif?>><a href="javascript:">安康安親</a></li>
            <li<?php if($school == '北新安親'):?> class="selected"<?php endif?>><a href="javascript:">北新安親</a></li>
            <li<?php if($school == '中興安親'):?> class="selected"<?php endif?>><a href="javascript:">中興安親</a></li>
            <li<?php if($school == '大豐安親'):?> class="selected"<?php endif?>><a href="javascript:">大豐安親</a></li>
            <li<?php if($school == '復興幼園'):?> class="selected"<?php endif?>><a href="javascript:">復興幼園</a></li>
            <li<?php if($school == '安康幼園'):?> class="selected"<?php endif?>><a href="javascript:">安康幼園</a></li>
            <li<?php if($school == '中興幼園'):?> class="selected"<?php endif?>><a href="javascript:">中興幼園</a></li>
            <li<?php if($school == '安華幼園'):?> class="selected"<?php endif?>><a href="javascript:">安華幼園</a></li>
            <li<?php if($school == '中興愛兒'):?> class="selected"<?php endif?>><a href="javascript:">中興愛兒</a></li>
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