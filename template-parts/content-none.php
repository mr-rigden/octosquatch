<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Plainness
 */

?>


<div class="post">
	<div class="postHeader">
		<h1>
			<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Nothing Found for: %s', 'plainness' ), '<br> &quot;<span>' . get_search_query() . '&quot;</span>' );
						?>
		</h1>

		
		

		<div class="postMeta">
		</div>
	</div>
	<div class="postBody">
	<?php get_search_form(); ?>
		
	</div>
</div>

