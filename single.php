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
		<!--Insert main image -->
		<div class="single-image-div">
			<img src="<?php the_post_thumbnail_url('full');?>" alt="<?php the_title();?>">
		</div>

		<!--Retrieve audio file link from post META and insert audio player -->

		<?php if(get_post_meta(get_the_ID(), 'audio-link', false ) ) { ?>

			<div class="single-arbeiten-audio">
				
					<?php 

					$attr = array(
				    	'src'      => get_post_meta(get_the_ID(), 'audio-link', true),
				    	'loop'     => '',
				    	'autoplay' => '',
				    	'preload' => 'none'
					);

				    echo wp_audio_shortcode($attr); ?>
			</div>
		<?php } ?>

		<!-- Insert the content -->
		<div class="single-text-div">
			<?php the_content();?>
		</div>

		<!-- Check post metadata for vimeo link, insert as first item after content if so -->
		<?php 
		if(metadata_exists('post', get_the_ID(), 'vimeo-link')) {

		?>
			<div class="single-video-div">
				<iframe src="<?php echo get_post_meta(get_the_ID(), 'vimeo-link', true);?>?title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
			</div>
		<?php } ?>

		<!-- Insert gallery -->
		<?php get_template_part('includes/section','gallery'); ?>

	</div>

</div>

<!-- Underline work title in category header -->
<script>
	var els = document.querySelectorAll("a[href='<?php echo the_permalink();?>']");
	els[0].style.textDecoration = "underline";
</script>

<?php get_footer();?>