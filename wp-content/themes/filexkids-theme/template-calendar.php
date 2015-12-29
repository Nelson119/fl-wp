<?php /* Template Name: 行事曆 */ get_header(); ?>

<?php $path=wp_make_link_relative(get_template_directory_uri().'/')?>


    <section id="kv">
      <figure>
        <section class="container">
          <figcaption>
            <h2 class="fontsize-30"><span>校務行事曆</span><span>schedule</span></h2>
            <sub class="fontsize-14">校務行事曆</sub>
          </figcaption>
        </section>
        <?php the_post_thumbnail(); ?>
      </figure>
    </section>
    <section class="page calendar">
      <div class="container">
        <div class="panel with-nav-tabs panel-info">
          <div class="panel-heading">
            <ul class="nav nav-tabs fontsize-20 row">
              <li class="active text-center col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <a data-toggle="tab" href="#tab1info">
                  全校校務行事曆
                </a>
              </li>
              <li class="text-center col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <a data-toggle="tab" href="#tab2info">
                  幼兒學校行事曆
                </a>
              </li>
              <li class="text-center col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <a data-toggle="tab" href="#tab3info">
                  安親學校行事曆
                </a>
              </li>
            </ul>
          </div>
          <div class="panel-body">
            <div class="tab-content">
              <div id="tab1info" class="tab-pane fade active in">
                <iframe class="hidden-xs" src="https://www.google.com/calendar/embed?title=Speaking%20Engagements&amp;height=575&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=dialogconsulting.com_k363h3uf0l9705gt3ufo90oq0g%40group.calendar.google.com&amp;color=%23B1440E&amp;ctz=America%2FNew_York" width="100%" height="575" frameborder="0" scrolling="no"></iframe>
                <iframe class="visible-xs" src="https://www.google.com/calendar/embed?mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=dialogconsulting.com_k363h3uf0l9705gt3ufo90oq0g%40group.calendar.google.com&amp;color=%23B1440E&amp;ctz=America%2FNew_York" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
              </div>
              <div id="tab2info" class="tab-pane fade">
                <iframe class="hidden-xs" src="https://www.google.com/calendar/embed?title=Speaking%20Engagements&amp;height=575&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=dialogconsulting.com_k363h3uf0l9705gt3ufo90oq0g%40group.calendar.google.com&amp;color=%23B1440E&amp;ctz=America%2FNew_York" width="100%" height="575" frameborder="0" scrolling="no"></iframe>
                <iframe class="visible-xs" src="https://www.google.com/calendar/embed?mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=dialogconsulting.com_k363h3uf0l9705gt3ufo90oq0g%40group.calendar.google.com&amp;color=%23B1440E&amp;ctz=America%2FNew_York" width="100%" height="500" frameborder="0" scrolling="no"></iframe>  
              </div>
              <div id="tab3info" class="tab-pane fade">
                <iframe class="hidden-xs" src="https://www.google.com/calendar/embed?title=Speaking%20Engagements&amp;height=575&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=dialogconsulting.com_k363h3uf0l9705gt3ufo90oq0g%40group.calendar.google.com&amp;color=%23B1440E&amp;ctz=America%2FNew_York" width="100%" height="575" frameborder="0" scrolling="no"></iframe>
                <iframe class="visible-xs" src="https://www.google.com/calendar/embed?mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=dialogconsulting.com_k363h3uf0l9705gt3ufo90oq0g%40group.calendar.google.com&amp;color=%23B1440E&amp;ctz=America%2FNew_York" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
