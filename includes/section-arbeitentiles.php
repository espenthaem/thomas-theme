<div id="arbeiten-tiles-div">

	<?php

	$post = get_page_by_title('Arbeiten');

	$args = array(
	    'post_type'      => 'page',
	    'posts_per_page' => -1,
	    'post_parent'    => $post->ID,
	    'order'          => 'ASC',
	    'orderby'        => 'menu_order'
	 );

	$parent = new WP_Query($args);

	if ($parent->have_posts()) {
		$counter = 0;  
		while ($parent->have_posts()){
			$parent->the_post(); 
			/* Open flex row div if first element */
			if ($counter % 2 == 0) { 
				?>
				<div class="arbeiten-row-div flex" id="row_<?php echo $counter / 2;?>">
				<?php
			} ?>
			<!-- Fill exhibition block with the appropriate content -->
			<div class="arbeiten-single-div"> 
				<div class="block">
				    <div class="background">
				        <?php the_title();?>
				    </div>
				    <div class="foreground">
				        <div>
				        	<?php
				        	if (get_the_title() == 'The European Sculpture') {
				        		$link = get_site_url()."/not-here-but-under-the-sea-1992/";
				        	}
				        	elseif (get_the_title() == 'Raum Als Instrument') {
				        		$link = get_site_url()."/quiems-offentliches-fernsprechtuch-1988-89/";
				        	}
				        	elseif (get_the_title() == 'European Parliament / Mikrophonie') {
				        		$link = get_site_url()."/contract-tendencies-1999/";
				        	}
				        	elseif (get_the_title() == 'Landscaping') {
				        		$link = get_site_url()."/listen-to-the-views-nuclear-shoes-2013/";
				        	}
				        	?>
				        	
				            <a href=<?php echo $link;?>>
								<div>
		            				<img class="arbeiten-single-img" src="<?php the_post_thumbnail_url('medium-extra');?>">
		            			</div>

		            		</a>
				        </div>
				    </div>
				    <div class="mobile_arbeiten_title">
				        <?php the_title();?>
				    </div>
				</div>

			</div>

			<?php
			/* Close flex row div after second element */
			if ($counter % 2 == 1) { 
				?>
				</div>

			<?php
			}?>
		
		<?php
		/* Update counter */
		++$counter;
    } 

	} ?>

	<?php wp_reset_postdata(); ?>

</div>