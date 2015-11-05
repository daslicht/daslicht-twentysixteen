<?php
 \ChromePhp::log('Excerpt'); 
if ( has_excerpt() || is_search() ) : ?>

	<div class="excerpt_container">
		<?php the_excerpt(); ?>
	</div>

<?php endif;
