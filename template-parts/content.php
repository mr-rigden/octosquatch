<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Plainness
 */

?>


<div class="post">
	<div class="postHeader">
		<?php
		if ( is_singular() ) :
			the_title( '<h1>', '</h1>' );
		else :
			the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
		<div class="postMeta">
			
			<?php
				plainness_posted_on();
			?>
		</div>
	</div>
	<div class="postBody">
		<?php
			
			if ( is_singular() ) :
				the_content();
			else :
				the_excerpt();
			endif;
		?>

		
	</div>
</div>