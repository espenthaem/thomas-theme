<?php
/*
Template Name: Archiv
*/
?>

<?php get_header();?>

<?php get_template_part('includes/section','navigation');?>

<div id="main-content">

	<div style="text-align: left">
		<h1> <?php the_title(); ?> </h1>
	</div>

	<div class="archiv-container">
		
		<?php get_template_part('includes/section','archivtiles',
		      	array( 
                    'category_name' => 'the-european-sculpture'
                )
        );?>
		
	</div>

</div>

<?php get_footer();?>