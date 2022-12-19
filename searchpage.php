<?php
    /**
    * Template Name: Search Page
    */
?>  

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Plainness
 */

 

get_header();


?>

	<main id="main">
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
                

            </div>
        </div>
        <div class="postBody">
        <?php get_search_form(); ?> 


            
        </div>
    </div>



	</main>

<?php
get_footer();
