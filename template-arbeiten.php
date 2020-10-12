<?php
/*
Template Name: Arbeiten
*/
?>

<?php get_header();?>

<?php get_template_part('includes/section','navigation');?>

<div id="main-content">

	<div class="flex" style="justify-content: flex-end">
		<div class="arbeiten-works-list">
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
			<img class="arbeiten-main-img" src="<?php the_post_thumbnail_url('medium-extra');?>">
		</div>
	</div>

	<div class="arbeiten-audio">

		<?php 

		$attr = array(
	    	'src'      => get_post_meta(get_the_ID(), 'audio-link', true),
	    	'loop'     => '',
	    	'autoplay' => '',
	    	'preload' => 'none'
		);

	   echo wp_audio_shortcode($attr); ?>
	

	</div>

</div>

<?php get_footer();?>