<?php /* template name: press */
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>
     

          
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<?php the_content();?>

<?php endwhile; ?>

     <?php else : ?>

          <h2 class="center">Not Found</h2>
          <p class="center">Sorry, but you are looking for something that isn't here.</p>
          <?php get_search_form(); ?>

     <?php endif; ?>     


          


<?php get_footer(); ?>