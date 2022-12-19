<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Plainness
 */

get_header();
?>


<main id="main">
	<div class="post">
		<div class="postHeader">
			<h1>404 Error</h1>

			<div class="postMeta">
				Page Not Found
			</div>
		</div>
		<div class="postBody">
		<?php get_search_form(); ?>
			
		</div>
	</div>
</main>



<?php
get_footer();


