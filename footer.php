<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Plainness
 */

?>

	<footer>



		
	</footer>

<?php wp_footer(); ?>

<script>

function toggleNav() {
	document.getSelection().removeAllRanges();

	var hamburgerIcon = document.getElementById("hamburgerIcon");
	hamburgerIcon.classList.toggle("invisible");
	
	var closeIcon = document.getElementById("closeIcon");
	closeIcon.classList.toggle("invisible");

	var navLinks = document.getElementById("navLinks");
	navLinks.classList.toggle("invisible");

	var main = document.getElementById("main");
	main.classList.toggle("invisible");

	document.getSelection().removeAllRanges();



}





</script>

</body>
</html>
