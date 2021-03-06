<?php
/*
Template Name: Archiv
*/
?>

<?php get_header();?>

<?php get_template_part('includes/section','navigation');?>

<div id="main-content">
	<!-- THE HTML FOR THE FORM -->
	<form id="archiv-form" action="" method="post">
	    
		<div class="customsearchul">
		    <div id="searchType">
		        <ul>
		        <?php // Get the values from $_POST for music
		            if($_POST['tag']) { $o=$_POST['tag'];} else { $o[]='';}       

			           
			            $all_tags = get_tags(array(
						  'hide_empty' => false
						));

		            	foreach ($all_tags as $tag)
						{?>	
						    
							<div id="ck-button">
						    	<label>
						        	<input type="checkbox" name="tag[]" id=<?php echo $tag->name?> value=<?php echo $tag->name?>  <?php if (in_array($tag->name, $o)) { echo 'checked'; } ?> /> 
						        	<span><?php echo $tag->name?></span>
						    	</label>
							</div>

						<?php }; ?>
 
		        </ul>
		    </div>
		    <input class="searchbutton" type="submit" value="Suche" id="performsearch"/>
		</div>
		
	</form>


	<?php
    // Get the values from $_POST
    $selected_tags = ($_POST['tag']);
    ?>

    <div class="archiv-container">

		<div class="archiv-period-title">
			<p>2010 - 2019</p>
		</div>
		
		<?php get_template_part('includes/section','archivtiles',
		      	array( 
		            'category_name' => 'archiv-2010-2019',
		            'tags' => $selected_tags
		        )
		);?>
		
	</div>

    <div class="archiv-container">

		<div class="archiv-period-title">
			<p>2000 - 2009</p>
		</div>
		
		<?php get_template_part('includes/section','archivtiles',
		      	array( 
		            'category_name' => 'archiv-2000-2009',
		            'tags' => $selected_tags
		        )
		);?>
		
	</div>

	<div class="archiv-container">

		<div class="archiv-period-title">
			<p>1990 - 1999</p>
		</div>
		
		<?php get_template_part('includes/section','archivtiles',
		      	array( 
		            'category_name' => 'archiv-1990-1999',
		            'tags' => $selected_tags
		        )
		);?>
		
	</div>

	<div class="archiv-container">

		<div class="archiv-period-title">
			<p>1980 - 1989</p>
		</div>
		
		<?php get_template_part('includes/section','archivtiles',
		      	array( 
		            'category_name' => 'archiv-1980-1989',
		            'tags' => $selected_tags
		        )
		);?>
		
	</div>

</div>

<?php get_footer();?>