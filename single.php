<?php
/*
Template Name: Arbeiten
*/
?>

<?php get_header();?>

<?php get_template_part('includes/section','navigation');?>

<div id="main-content">

	<div class="">
		<!--Insert main image -->
		<div class="single-image-div">
			<img src="<?php the_post_thumbnail_url('full');?>" alt="<?php the_title();?>">
		</div>

		<!--Retrieve audio file link from post META and insert audio player -->
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

<?php get_footer();?>