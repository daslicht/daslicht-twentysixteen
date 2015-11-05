<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : ?>

				<?php if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>

				<?php
				// Start the loop.
				while ( have_posts() ) : 
					the_post();
					get_template_part( 'template-parts/post_format/content', get_post_format() );
				endwhile;

				get_template_part( 'template-parts/paginator', 'none' );
				
			// If no content, include the "No posts found" template.
			else :
				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</main><!-- .site-main -->
</div><!-- .content-area -->