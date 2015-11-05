<?php
/**
 * Displays an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 *
 * Create your own twentysixteen_post_thumbnail() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 * template-tags line 124
 */
 \ChromePhp::log('Post Thumbnail'); 
?>


<div class="post-thumbnail">
	<?php the_post_thumbnail(); ?>
</div>



