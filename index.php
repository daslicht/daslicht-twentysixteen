<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 *
 *
 * Is Post List ?
 * Is Archive 
 * Is Single Post
 */
 \ChromePhp::log('index.php' ); 
//get_header(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

	<?php get_template_part('template_parts/head', 'null' )?>

	<body <?php body_class(); ?>>
	
		<div id="page" class="hfeed site">
			<div class="site-inner">
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

				<?php get_template_part('template_parts/header', 'null' )?>

				<div id="content" class="site-content">

					<?php get_template_part('template_parts/content-index', 'null' )?>
					
					<?php get_sidebar(); ?>
					
					<?php //get_footer(); ?>

				</div><!-- .site-content -->

					<?php get_template_part('template_parts/footer', 'null' )?>
			</div><!-- .site-inner -->
		</div><!-- .site -->

		<?php get_template_part('template_parts/foot', 'null' )?>

	</body>
</html>




<?php //get_template_part( 'template-parts/content' ); ?>


<?php //get_sidebar(); ?>
<?php //get_footer(); ?>
