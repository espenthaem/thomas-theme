<div class="flex" style="justify-content: space-between;">

	<?php 
		/* Save id of the category page for later use */
		$category_id = $post->ID;
	?>

	<div class="arbeiten-works-list">
		<div class="arbeiten-category-title">
			<h2><?php the_title();?></h2>
		</div>

		<?php
	    $args = array(
	        'post_type' => 'post',
	        'order-by' => 'date',
	        'order' => 'DESC',
	        'category_name' => $post->post_name
		    );

	    $post_query = new WP_Query($args);

	    if($post_query->have_posts() ) {
	    	echo "<ul>";
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
	        echo "</ul>";
		?>
		<?php wp_reset_query() ?>

	</div>

	<div class="arbeiten-featured-media">
		<?php if(get_post_meta($category_id, 'vimeo-link', false ) ) { ?>
			<div class="arbeiten-category-video-div">
				<iframe src="<?php echo get_post_meta($category_id, 'vimeo-link', true);?>??title=0&byline=0&portrait=0" frameborder="0"> </iframe>
			</div>
		<?php } else { ?>
			<img class="arbeiten-main-img" src="<?php echo get_the_post_thumbnail_url($category_id, 'medium-extra');?>">
		<?php } ?>

	</div>

</div>

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