<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Plainness
 */

get_header();
?>




	<main id="main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );





		endwhile; // End of the loop.
		?>

	<hr>
	<p style="text-align: center;">
		Like what you see? Subscribe to my newsletter to get updates on new posts, episodes, and other cool stuff.
	</p>
	<form
		action="https://buttondown.email/api/emails/embed-subscribe/mr_rigden"
		method="post"
		target="popupwindow"
		class="wp-block-search__button-outside wp-block-search__text-button wp-block-search"
	>

	<label for="email" class="wp-block-search__label"></label>
  	<div class="wp-block-search__inside-wrapper ">
	<input
		type="email"
			name="email"
			placeholder="you@gmail.com"
			id="wp-block-search__input-1" class="wp-block-search__input wp-block-search__input"
		/>
		<input type="hidden" value="1" name="embed" />
		<button type="submit" class="wp-block-search__button wp-element-button">Subscribe</button>
	</div>

	</form>	

	</main><!-- #main -->
	

<?php
get_footer();
