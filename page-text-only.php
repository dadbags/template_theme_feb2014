<?php
/**
  * Template Name: text only */

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