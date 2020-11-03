<div id="thomas-head">
		<a href="<?php echo get_site_url();?>">Thomas Schulz</a>
</div>

<div id="main-navigation-div">

	<div id="navigation-bar-div" class=" flex">
		
		<ul class="nav">
			<li>
		    	<a id="a-arbeiten" class="nav-link" href="<?php echo get_site_url();?>/arbeiten/">Arbeiten</a>
		  	</li>

			<li>
				<a id="a-archiv" class="nav-link" href="<?php echo get_site_url();?>/archiv/">Archiv</a>
			</li>

			<li>
			    <a class="nav-link" href="<?php echo get_site_url();?>/register/">Register</a>
			</li>

			<li>
				<div onmouseover="showSubLinkText('text-sub-link')" onmouseout="hideSublinkText('text-sub-link')">
				    
					<a id="a-text" class="nav-link" href="#">Text</a>

				    <div id="text-sub-link"  class="sub-link-div">

				    	<?php

						$post = get_page_by_title('Text');

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
									?>
									<a href= <?php the_permalink();?>>
										<?php the_title();?> 
					            	</a>
								<?php
							}
						} ?>

						<?php wp_reset_postdata(); ?>

				    </div>

				</div>
			</li>

			<li>

				<div onmouseover="showSubLinkText('kontakt-sub-link')" onmouseout="hideSublinkText('kontakt-sub-link')">
			    
			    	<a class="nav-link" href="<?php echo get_site_url();?>/kontakt/">Kontakt</a>

			    	<div id="kontakt-sub-link" class="sub-link-div">
			    
				    	<?php

						$post = get_page_by_title('Kontakt');

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
									?>
									<a href= <?php the_permalink();?>>
										<?php the_title();?> 
					            	</a>
								<?php
							}
						} ?>

						<?php wp_reset_postdata(); ?>
				    </div>

				</div>

			</li>

		</ul>
	
	</div>

</div>

<script>
	function showSubLinkText(value) {
		var sub_link_div = document.getElementById(value)

		console.log(value)

	    sub_link_div.style.visibility = 'visible'

	    sub_link_div.style.webkitAnimationName = 'fadeIn'; 
    	sub_link_div.style.webkitAnimationDuration = '2s';

	  	document.getElementById("a-text").style.opacity =  .5
	}

	function hideSublinkText(value) {
		var sub_link_div = document.getElementById(value)

		sub_link_div.style.visibility = 'hidden'
	  	document.getElementById("a-text").style.opacity =  1
	    
	}
</script>