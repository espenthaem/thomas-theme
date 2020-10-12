<div id="single-gallery-div">

	<?php

    	if ( $gallery = get_post_gallery( get_the_ID(), false ) ) :
      
        	foreach ( $gallery['src'] AS $src ) {
                    ?>
                    <div class="single-image-div">
						<img src="<?php echo $src; ?>">
					</div>                
        	<?php
    		}
    	endif;
    ?>

</div>