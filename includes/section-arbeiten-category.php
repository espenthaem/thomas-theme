<div class="arbeiten-category-div">

	<?php 
		/* Save id of the category page for later use */
		$category_id = $post->ID;
	?>

	<div class="arbeiten-works-list">
		<div class="arbeiten-category-title">
			<a href="<?php echo the_permalink();?>">
				<h2><?php the_title();?></h2>
			</a>
		</div>

		<?php
	    $args = array(
	        'post_type' => 'post',
	        'order-by' => 'date',
	        'order' => 'DESC',
	        'category_name' => $post->post_name
		    );

	    $post_query = new WP_Query($args);

	    echo "<ul>";
	    if($post_query->have_posts() ) {
	        while($post_query->have_posts() ) {
	            $post_query->the_post();
	            ?>
	         
	            <li>
	            	<a href=<?php the_permalink();?>> 
	            		<?php the_title(); ?>
	            	</a>

	            </li>

	            <?php

	            }
	    }
		wp_reset_query();

		/* Add radio works if category is the-european-sculpture */
		if ($args['category_name'] == 'the-european-sculpture') {

			$new_args = array(
	        'post_type' => 'post',
	        'order-by' => 'date',
	        'order' => 'DESC',
	        'category_name' => 'radio-works'
		    );

	    	$post_query = new WP_Query($new_args);

	    	if($post_query->have_posts() ) {

	    		?>
	    		<!-- Open new nested list for radio works -->
	    		<div id="radio-works-list">
		    		<li>Studio Akustische Kunst WDR Köln (1987 - 1991)
			    		<ul>
			    		
			    		<?php

				        while($post_query->have_posts() ) {
				            $post_query->the_post();
				            ?>
				         
				            <li>
				            	<a href=<?php the_permalink();?>> 
				            		<?php the_title(); ?>
				            	</a>

				            </li>

				            <?php
				    	}
				    	?>
				    	
				    	</ul>
				    </li>
				</div>
		    	
		    	<?php
	    	}
	    	wp_reset_query();

		}


		if ($args['category_name'] == 'the-european-sculpture') {
	    	?>
	    	<!-- Add Photographic Works href -->
	    	<li>
	    		<a href="<?php echo get_site_url();?>/photographic-works-i/">
	    			Photographic Works
	    		</a>
	    	</li>
	    	<?php
    	}
    	elseif ($args['category_name'] == 'raum-als-instrument') {
	    	?>
	    	<!-- Add Photographic Works href -->
	    	<li>
	    		<a href="<?php echo get_site_url();?>/photographic-works-ii/">
	    			Photographic Works
	    		</a>
	    	</li>
	    	<?php
    	}
    	elseif ($args['category_name'] == 'european-parliament-mikrophonie') {
	    	?>
	    	<!-- Add Photographic Works href -->
	    	<li>
	    		<a href="<?php echo get_site_url();?>/photographic-works-iii/">
	    			Photographic Works
	    		</a>
	    	</li>
	    	<?php
    	}
    	elseif ($args['category_name'] == 'landscaping') {
	    	?>
	    	<!-- Add Photographic Works href -->
	    	<li>
	    		<a href="<?php echo get_site_url();?>/photographic-works-iv/">
	    			Photographic Works
	    		</a>
	    	</li>
	    	<?php
    	}

		echo "</ul>";
		?>



	</div>

	<div class="arbeiten-featured-media">
		<?php if(get_post_meta($category_id, 'vimeo-link', false ) ) { ?>
			<div class="arbeiten-category-video-div">
				<iframe src="<?php echo get_post_meta($category_id, 'vimeo-link', true);?>??title=0&byline=0&portrait=0?autoplay=1?muted=1" frameborder="0" allow="autoplay; fullscreen"> </iframe>
			</div>
		<?php } else { ?>
			<img class="arbeiten-main-img" src="<?php echo get_the_post_thumbnail_url($category_id, 'medium-extra');?>">
		<?php } ?>

		<div class="arbeiten-audio">

			<?php 

			$attr = array(
		    	'src'      => get_post_meta($category_id, 'audio-link', true),
		    	'loop'     => '',
		    	'autoplay' => '',
		    	'preload' => 'none'
			);

		   echo wp_audio_shortcode($attr); ?>

		</div>

	</div>

</div>

