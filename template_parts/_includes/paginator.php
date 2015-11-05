<?php
 \ChromePhp::log('template-parts/paginator.php' ); 

// Previous/next page navigation.
the_posts_pagination( array(
	'prev_text'          => __( 'Previous page', 'twentysixteen' ),
	'next_text'          => __( 'Next page', 'twentysixteen' ),
	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
) );
?>