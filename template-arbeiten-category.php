<?php
/*
Template Name: Arbeiten Category
*/
?>

<?php get_header();?>

<?php get_template_part('includes/section','navigation');?>

<div id="main-content">

	<?php get_template_part('includes/section','arbeiten-category');?>

	<div class="arbeiten-text-div">
		<?php the_content(); ?>
	</div>

</div>

<?php get_footer();?>