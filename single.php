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

	<p style="padding-top: 1rem">
		Subscribe to <a href="http://dummy.local/ducimus-eum-cupiditate-dolore/adsadsadsadsdasdasdasdsad">Jason Rigden's Newsletter</a> to get updates on new posts, episodes, and other cool stuff.
	</p>


	</main><!-- #main -->
	

<?php
get_footer();
