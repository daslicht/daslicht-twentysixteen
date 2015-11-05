<?php 
/*
index.php
	content-index.php 
	(loop)



*/
?>


<?php  \ChromePhp::log('templte_parts/content-index.php' ); 
include 'debug.php';
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<?php  
	
		\ChromePhp::log('is_page() ', is_page());
		
		/**
		 * Single Page
		 */
		if ( is_singular("page") ) {
			get_template_part( 'template_parts/post_type/page' ); 	//single page 

		}elseif ( is_singular("post") ) {
			get_template_part( 'template_parts/post_type/post' ); 	//single post 
		
		} elseif( is_attachment() ) {
			\ChromePhp::log('$post->post_mime_type ',$post->post_mime_type  ); 
			get_template_part( 'template_parts/post_type/attachment' );
		
		
		/**
		 * List Multiple Pages
		 */
		} else {

			 if(is_search()) {
			 	\ChromePhp::log('is search' ); 
			 	get_template_part( 'template_parts/list_layout/search_result_list_layout' ); 

			 } else {
			 	\ChromePhp::log('is posts' ); 
			 	get_template_part( 'template_parts/list_layout/post_list_layout' ); 
			 }


		}





		
	/*	while ( have_posts() ) : 
			the_post();
			\ChromePhp::log('$post->post_mime_type ',$post->post_mime_type  ); 

	         //get_post_type( get_the_ID() );
			if ( is_page() ) { //   is_singular('page') ' page'<--- redundant, see docs,  but more clear.
				//get_template_part( 'template_parts/post_type/page' ); 	//single page 

			} elseif ( is_single() ) { //is_singular('post')
				//get_template_part( 'template_parts/post_type/post' ); 	//single post 

			} elseif( is_attachment() ) {
				//get_template_part( 'template_parts/post_type/attachment' );
			
			} elseif( is_search() ) {
				get_template_part( 'template_parts/post_type/search_result_item' );

			} else  { 
				get_template_part( 'template_parts/post_type/post_list_item'); //List Item
			}

		/*	// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}



			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			}*/

		//endwhile;

	
		
		/**
		 * Paginator
		 */
		//get_template_part( 'template_parts/_includes/paginator'); 

		?>
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->