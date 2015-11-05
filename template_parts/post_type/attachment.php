<?php 
/**
 * IMAGE 
 */
?>

<?php if ( wp_attachment_is_image( get_the_ID() ) ): ?>

Image
<?php else:?>

Anything else

<? endif;?>	



