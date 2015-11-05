<?php
/**
 * The template for displaying all pages, single posts and attachments
 *
 * This is a new template file that WordPress introduced in
 * version 4.3. Note that it uses conditional logic to display
 * different content based on the post type.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

	<?php get_template_part('template-parts/head', 'null' )?>

	<body <?php body_class(); ?>>
	
		<div id="page" class="hfeed site">
			<div class="site-inner">
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

				<?php get_template_part('template-parts/header', 'null' )?>

				<div id="content" class="site-content">
SINGULAR
					<?php get_template_part('template-parts/content-index', 'null' )?>
					
					<?php get_sidebar(); ?>
					
					<?php //get_footer(); ?>

				</div><!-- .site-content -->

					<?php get_template_part('template-parts/footer', 'null' )?>
			</div><!-- .site-inner -->
		</div><!-- .site -->

		<?php get_template_part('template-parts/foot', 'null' )?>

	</body>
</html>

