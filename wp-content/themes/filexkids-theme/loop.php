
	<aside class="center">
		<?php 
			// the query
			$args = array(
				'page_id' => 18
			);
			$wp_query = new WP_Query( $args );
			if ($wp_query->have_posts()){ 
				$wp_query->the_post(); 
  		?>
		<h3 class="banner"><img src="/wp-content/uploads/2015/11/banner9.png" alt="<?php echo CFS()->get('alt'); ?>"></h3>
      	<?php 
        	} 
		?>
      <?php wp_reset_query(); ?>
		<nav class="categories">
			<ul>
	            <?php 
	            	$term = $wp_query->queried_object;
	                if($term->name === ''){
	                    $active = ' class="active"';
	                }else{
	                    $active = '';
	                } 
                ?>
				<li<?php echo $active;?>>
					<a href="<?php echo home_url(); ?>/活動快訊">所有快訊</a>
				</li>
	            <?php
	            foreach (get_terms('category', array( 'hide_empty' => false, 'parent' => 0 )) as $tax_term) {
	                $q = new WP_Query( array( 'category' => $tax_term->name ,'post_status' => 'publish') );
	                $count = $q->found_posts;
	                echo'<!--'.$tax_term->name.':'.$count.'-->';
	            	if($tax_term->slug === 'uncategorized'){
	            		continue;
	            	}
	                if($term->name === $tax_term->name){
	                    $active = ' class="active"';
	                }else{
	                    $active = '';
	                }
	                if($count > 0 ){
		            	echo '<li'. $active .'>' . '<a href="' . esc_attr(get_term_link($tax_term, 'category')) . 
		            		'" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . 
		            		$tax_term->name.'</a></li>';                	}
                	else{
		            	echo '<li'. $active .'>' . '<a>' . 
		            		$tax_term->name.'</a></li>';
                	}
	            }
	            ?>
			</ul>
			<i class="fa fa-caret-down"></i>
		</nav>
		<div class="clearfix"></div>
		<ul class="list">
			<?php 
			// the query
			$args = array(
			  	'posts_per_page' => 5,
			  	'paged' => $page,
	            'category_name' => $term->name 
			);
			$wp_query = new WP_Query( $args ); ?>

			<?php if ($wp_query->have_posts()): while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(array(140,80));?>
				</a>
				<span class="category" style="background:<?php echo get_term_by('id', the_category_id(false), 'category')->description;?>"><?php _e( '', 'html5blank' ); the_category(', '); ?></span>
				<span class="date"><?php the_time('Y.m.d'); ?></span>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h4 class="subj"><?php the_title(); ?></h4></a>
				<a class="more" href="<?php the_permalink(); ?>">
					<i class="icon-right-open-mini"></i>
					<span>more</span>
				</a>
				<?php endwhile; ?>
				<?php else: ?>
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
			</li>
			<?php endif; ?>
		</ul>
	</aside>