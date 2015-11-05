<?php
	$data = array(
		"is_home()" => is_home(),
		"is_front_page()" => is_front_page(), 
		"have_posts()" =>  have_posts(),
		"Posts Count" => count($posts),
		"is_singular( 'page' )"=>is_singular( 'page' ) ,
		"is_singular( 'post' )"=>is_singular( 'post' ) ,
		"is_singular( 'attachment' )"=>is_singular( 'attachment' ) ,
		"is_singular()"=>is_singular(),
		"is_single()" => is_single(), 
		"get_post_type( get_the_ID() )" => get_post_type( get_the_ID() )

		
		
	);

	\ChromePhp::log('data', $data); 
?>

<?php

// echo "Called Template:" . $calledTemplate;

function outputPostFormat() {
	echo get_post_format() ? get_post_format() : 'none' ;
	echo '<br>';
}
?>

