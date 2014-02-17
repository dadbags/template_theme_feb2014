<?php
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

<section class="">
<div class="container">
	<div class="row">

		<div class="col-sm-12 col-md-10 ">


<?php if ( have_posts() ) : ?>

			

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

<div class="post">
<h3><a href="<?php the_permalink();?>" target="_blank"><?php the_title();?></a></h3>
                    
                    		<em><?php the_time('F jS, Y') ?>
                    		</em> <?php // the_author_posts_link() ?> 
                        
                        
                        
                    <div class="entry">
                  <?php  the_content();?>
              </div>

          </div>

<?php endwhile; ?>


			<?php else : ?>

			NOT FOUND.
			<?php endif; ?>
<!--


	<div class="row"  id="isotope">

			<?php if ( have_posts() ) : ?>

			

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="col-sm-4 col-xs-6 isotope">
						<div class="post">
					<a href="<?php the_permalink();?>" target="_blank" class="rollover">
					


	<?php the_post_thumbnail('medium');?></a>

                    	<h3><a href="<?php the_permalink();?>" target="_blank"><?php the_title();?></a></h3>
                    
                    		<em><?php the_time('F jS, Y') ?>
                    		</em> <?php // the_author_posts_link() ?> 
                        
                        
                        
                    <div class="entry">
                    <small><?php  the_excerpt();?></small>
                    
                    <a class="btn btn-primary btn-sm" href="<?php the_permalink();?>">
                    	Read Full Post <i class="fa fa-caret-right"></i>
                    </a>
                    <?php //edit_post_link('edit');?>
                    </div>
                    
                    
                 <span class="postmetadata" id="<?php the_ID(); ?>" style="display:none;"><?php the_tags('Tags: ', ', ', '&nbsp; &nbsp;'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span>
	

</div>
</div>
				<?php endwhile; ?>


			<?php else : ?>

			NOT FOUND.
			<?php endif; ?>

	</div>
	</div>-->





<div class="col-md-2 blogsidebar">

<div class="row">


</div></div>


	</div>
	</div>
</section>





<?php get_footer(); ?>