<div id="main-navigation-div">

	<div id="thomas-head">
		<a href="<?php echo get_site_url();?>">Thomas Schulz</a>
	</div>

	<div id="navigation-bar-div" class=" flex">
		
		<ul class="nav">
			<li class="dropdown">
		    	<a id="a-arbeiten" class="nav-link" onclick="showArbeiten()" href="#">Arbeiten</a>
		  	</li>

			<li class="dropdown">
				<a id="a-archiv" class="nav-link dropdown" onclick="showArchiv()" href="#">Archiv</a>
			</li>

			<li>
			    <a class="nav-link" href="<?php echo get_site_url();?>/register/">Register</a>
			</li>

			<li>
			    <a id="a-text" class="nav-link" href="#" onmouseover="showSubLinkText()" onmouseout="hideSublinkText()">Text</a>
			    
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
			</li>

			<li>
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
			</li>

		</ul>
	
	</div>

	<div id="archiv-tiles-div" class="flex"> 

		<ul class="nav">
			<li>
		    	<a class="nav-link" href="<?php echo get_site_url();?>/archiv/1980-1989">1980 - 1989</a>
		  	</li>

			<li>
		    	<a class="nav-link" href="<?php echo get_site_url();?>/archiv/1990-1999">1990 - 1999</a>
		  	</li>

		  	<li>
		    	<a class="nav-link" href="<?php echo get_site_url();?>/archiv/2000-2009">2000 - 2009</a>
		  	</li>

		  	<li>
		    	<a class="nav-link" href="<?php echo get_site_url();?>/archiv/2010-2019">2009 - 2019</a>
		  	</li>

		</ul>

	</div>

	<?php get_template_part('includes/section','arbeitentiles');?>

</div>

<script>
	function showArbeiten() {
	    var arbeiten_div = document.getElementById("arbeiten-tiles-div")
	    var display = window.getComputedStyle(arbeiten_div).display
	    // Change display style
	    if (display == 'block') {
	  	    arbeiten_div.style.display = 'none'
	  	    document.getElementById("a-text").style.opacity =  1.0
	    }
	    else if (display == 'none') {
	  	   arbeiten_div.style.display = 'block'
	  	   document.getElementById("a-text").style.opacity =  .5
	    }

	}

	function showArchiv() {
	    var archiv_div = document.getElementById("archiv-tiles-div")
	    var visibility = window.getComputedStyle(archiv_div).visibility

	    console.log(archiv_div, visibility)

	    if (visibility == 'hidden') {
	  	    archiv_div.style.visibility = 'visible'
	  	    document.getElementById("a-archiv").style.opacity =  .5
	    }
	    else if (visibility == 'visible') {
	    	console.log('HOI')
	  	    archiv_div.style.visibility = 'hidden'
	  	    document.getElementById("a-archiv").style.opacity =  1
	    }
	}

	function showSubLinkText() {
		var sub_link_div = document.getElementById("text-sub-link")
	    
	    sub_link_div.style.display = 'block'
	  	document.getElementById("a-text").style.opacity =  .5
	}

	function hideSublinkText() {
		var sub_link_div = document.getElementById("text-sub-link")

		sub_link_div.style.display = 'none'
	  	document.getElementById("a-text").style.opacity =  1
	    
	}
</script>