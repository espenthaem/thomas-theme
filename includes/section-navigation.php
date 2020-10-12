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
			    <a class="nav-link" href="<?php echo get_site_url();?>/text/">Text</a>
			</li>

			<li>
			    <a class="nav-link" href="<?php echo get_site_url();?>/kontakt/">Kontakt</a>
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
	  	    document.getElementById("a-arbeiten").style.opacity =  1.0
	    }
	    else if (display == 'none') {
	  	   arbeiten_div.style.display = 'block'
	  	   document.getElementById("a-arbeiten").style.opacity =  .5
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
</script>