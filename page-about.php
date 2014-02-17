<?php
/**
  * Template Name: about */

get_header(); ?>


     
  <section>   
     
<div class="container">
<div class="row">
		
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="col-sm-6">
<?php the_content();?>
</div>
<?php endwhile; ?>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>	

</section>
		


<?php get_footer(); ?>