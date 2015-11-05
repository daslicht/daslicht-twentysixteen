

<?php  \ChromePhp::log('POST LIST LAYOUT' ); ?>
<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) : 

				the_post();
				get_template_part( 'template_parts/list_layout/_includes/post_list_item' );
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template_parts/list_layout/_includes/not_found' );

		endif;
		?>

		</main><!-- .site-main -->
</section><!-- .content-area -->