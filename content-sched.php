<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package oewebsite
 */
?>
<div class="one-fourth">
	<?php get_sidebar(); ?>
</div>
<div class="three-fourths">
	<article id="post-<?php the_ID(); ?>" class="entry-content" <?php post_class(); ?>>
		<?php if( $post->post_parent !== 0 ) : ?>
			<?php the_title( sprintf( '<h1 class="entry-title">', esc_url( get_permalink() ) ), '</h1>' ); ?>
		<?php endif; ?>
		<div class="vertical-tabs-container">
		  <div class="vertical-tabs">
		  <?php
			$count = 0;
			$pages = get_pages('child_of=6389'.'&sort_column=ID');
			  foreach($pages as $page) {
			    $count++;
				?>
			    <a href="javascript:void(0)" class="js-vertical-tab vertical-tab <?php echo ($count == 1 ? 'is-active' : ''); ?>" rel="<?php echo $page->post_title ?>"><?php echo $page->post_title ?></a>			      
			    <?php
			  }
			?>  
		  </div>

		  <div class="vertical-tab-content-container">
		  <?php
			$pages = get_pages('child_of=6389'.'&sort_column=ID');
			  foreach($pages as $page) {
				?>
		    <a href="" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading" rel="<?php echo $page->post_title ?>"><?php echo $page->post_title ?></a>		    
		    <div id="<?php echo $page->post_title ?>" class="js-vertical-tab-content vertical-tab-content">
		        <p class="schedule-day-page-content"><?php echo $page->post_content ?></p>
				<?php

				$other_page = $page->ID;
				// check if the repeater field has rows of data
				if( have_rows('event_item', $other_page) ):
				 	// loop through the rows of data
				    while ( have_rows('event_item', $other_page) ) : the_row();
						?>
							<div class="expander">
								<span class="event-time">
									<?php the_sub_field('event_time', $other_page); ?> | <?php the_sub_field('line_of_programming', $other_page); ?>
									
										
									
								</span>
								<br />
								<h3><a href="javascript:void(0)" class="js-expander-trigger expander-trigger"><span class="expander-toggle-arrow"></span><?php the_sub_field('event_title', $other_page); ?> - <?php the_sub_field('event_artist', $other_page); ?></a></h3>
							  	<div id="js-expander-content" class="expander-hidden expander-content">							  		
							    	<?php the_sub_field('event_description', $other_page); ?>
							  		<div class="event-location"><em><?php the_sub_field('event_location', $other_page); ?></em></div>
							  	</div>					  	
							</div>
				        <?php
				    endwhile;
				else :
				    // no rows found
				endif;
				?>            
		    </div>		      
			    <?php
			  }
			?>
		  </div>
		</div>   		
	</article><!-- #post-## -->
</div>
