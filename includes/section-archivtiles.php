<div class="scrolling-wrapper">

	<?php
	    $query_args = array(
	        'post_type' => 'post',
	        'order-by' => 'date',
	        'order' => 'ASC',
	        'category_name' => $args['category_name']
		    );

	    $post_query = new WP_Query($query_args);

	    if($post_query->have_posts() ) {
	    	
	        while($post_query->have_posts() ) {
	            $post_query->the_post();
	            ?>
	         
	            <div class="archiv-card">
	            	
	            	<p>
	            		<?php the_title(); ?>
	            	</p>

	            	<img class="archiv-single-img" src="<?php the_post_thumbnail_url('medium-extra');?>">

	        	</div>
	            

	            <?php

	            }
	        }
	        
		?>
		<?php wp_reset_query() ?>

</div>