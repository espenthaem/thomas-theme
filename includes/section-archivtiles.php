<div class="scrolling-wrapper">
	<?php

	    $query_args = array(
	        'post_type' => 'post',
	        'order-by' => 'date',
	        'order' => 'ASC',
	        'category_name' => $args['category_name'],
	        'tag' => $args['tags']
		    );

	    $post_query = new WP_Query($query_args);

	    if($post_query->have_posts() ) {
	    	
	        while($post_query->have_posts() ) {
	            $post_query->the_post();
	            ?>
	         
	            <?php 
	            	$img_url = get_the_post_thumbnail_url(get_the_ID(), 'medium-extra');
	            	global $post;
	            	$post_name = $post->post_name;
	            ?>
	       
	            <div class="archiv-card">

	            	<a href="#" data-featherlight=<?php echo "#" . $post_name;?>>

						<div id=<?php echo $post_name;?> class="archiv-card-feather-div">
							<div class="archiv-single-img">
								<img src=<?php the_post_thumbnail_url('large');?>>
							</div>

							<div class="archiv-card-text-div">
								<?php the_title();?>

								<?php the_content();?>
							</div>

						</div>

					</a>
					
	        	</div>
	            

	            <?php

	            }
	        }
	        
	?>
	<?php wp_reset_query() ?>
</div>