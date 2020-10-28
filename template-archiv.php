<?php
/*
Template Name: Archiv
*/
?>

<?php get_header();?>

<?php get_template_part('includes/section','navigation');?>

<div id="main-content">

	<div style="text-align: right">
		<h1> <?php the_title(); ?> </h1>
	</div>

	<div class="archiv-container">
		<div>
				<h2>The European Sculpture</h2>
		</div>

		<?php get_template_part('includes/section','archivtiles',
		      	array( 
                    'category_name' => 'the-european-sculpture'
                )
        );?>
		
	</div>

	<div class="archiv-container">
		<div>
				<h2>Raum Als Instrument</h2>
		</div>

		<?php get_template_part('includes/section','archivtiles',
		      	array( 
                    'category_name' => 'raum-als-instrument',
                )
        );?>
		
	</div>

		<div class="archiv-container">
		<div>
				<h2>The European Parlaiment / Mikrophonie</h2>
		</div>

		<?php get_template_part('includes/section','archivtiles',
		      	array( 
                    'category_name' => 'european-parlaiment-mikrophonie',
                )
        );?>
		
	</div>


	<div class="archiv-container">
		<div>
				<h2>Landscaping</h2>
		</div>

		<?php get_template_part('includes/section','archivtiles',
		      	array( 
                    'category_name' => 'landscaping',
                )
        );?>
		
	</div>


</div>

<?php get_footer();?>