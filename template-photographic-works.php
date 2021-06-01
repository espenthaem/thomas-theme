<?php
/*
Template Name: Photographic Works
*/
?>

<?php
/*
Template Name: Arbeiten
*/
?>

<?php get_header();?>

<?php get_template_part('includes/section','navigation');?>

<div id="main-content">

	<?php 
		/* Save post ID for later use, and set post variable to category page */
		$single_ID = $post->ID;
		$single_category = get_the_category($single_ID)[0]->name;

		if (is_int(strpos($single_category, 'archiv'))) {

		}
		elseif (is_int(strpos($single_category, 'radio-works'))) {
			/* Force the-european-sculpture category for radio works */
			$post = get_page_by_path('/arbeiten/' . 'the-european-sculpture');
			/*Load category header based on the category post variable */
 			get_template_part('includes/section','arbeiten-category'); 
		}
		else{
			$post = get_page_by_path('/arbeiten/' . $single_category);
			/*Load category header based on the category post variable */
 			get_template_part('includes/section','arbeiten-category'); 
		}
	?>

	<!-- Reset post variable -->
	<?php $post = get_post($single_ID);?>
	<div class="single-arbeiten-content">
		
		<!-- Insert the content -->
		<div class="single-text-div">
			<?php the_content();?>
		</div>

		<div class="archiv-container">
		<?php
		if ( $gallery = get_post_gallery( get_the_ID(), false ) ) {
			?>

			<div class="scrolling-wrapper">
			
			<?php 

			$counter = 0;
			/* Parse images ids for retrieval of caption and description */
			$ids = explode(",", $gallery['ids']);

			foreach ( $gallery['src'] AS $src ) {

				$img_info = wp_get_attachment($ids[$counter]);
				?>

                <div class="archiv-card">

                	<a href="<?php echo "." . $counter . "photo-works";?>" data-featherlight>
                    	<div class="archiv-single-img">
							<img src="<?php echo $src; ?>">
						</div>
					</a>

					<div class="<?php echo $counter . "photo-works";?> archiv-card-feather-div">
				
						<div class="archiv-single-img">
							<img src="<?php echo $src; ?>">
						</div>

						<div class="archiv-card-text-div">
							<h4>
								<?php echo $img_info['caption']; ?>
							</h4>

							<?php echo $img_info['description']; ?>
						</div>

					</div>

				</div>    

				<?php 
				++$counter;
    		}
    		?> 

    		</div>
    		
    		<?php

		}
		?>

		</div>

	</div>

</div>

<?php get_footer();?>