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

<section class="blogsection">
<div class="container">
	<div class="row">

		<div class="col-sm-7 col-md-offset-1 col-blog">









			<?php if ( have_posts() ) : ?>

			

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

<div class="post singlepost">
				<h3><?php the_title();?></h3>
                    
                    		<small><?php the_time('F jS, Y') ?>
                    	</small> <?php // the_author_posts_link() ?> 
                         <?php edit_post_link('edit');?>
                        
                        
                    <div class="entry">
                  <?php  the_content();?>
                    
                   
                   
                    </div>
                    
                    
                 <span class="postmetadata" id="<?php the_ID(); ?>" style="display:none;"><?php the_tags('Tags: ', ', ', '&nbsp; &nbsp;'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span>
	
<div class="socnetpost">
       <a href="http://www.tumblr.com/share" title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:81px; height:20px; background:url('http://platform.tumblr.com/v1/share_1.png') top left no-repeat transparent;"></a>
   		<span class="pinit"><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo wp_get_attachment_url($post->ID); ?> " class="pin-it-button" count-layout="horizontal">Pin It</a></span>
		<g:plusone size="medium" annotation="none"></g:plusone>
        <a href="http://twitter.com/share" class="twitter-share-button" data-text="<?php the_title(); ?>" data-count="none" data-via="foxproblem">Tweet</a>
        <iframe src="http://www.facebook.com/plugins/like.php?app_id=257990460880548&amp;href=<?php echo the_permalink(); ?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:148px; height:21px; position:relative; top:1px;" allowTransparency="true" ></iframe>
		</div>    



</div>
				<?php endwhile; ?>


			<?php else : ?>

			NOT FOUND.
			<?php endif; ?>

<!--
<?php
  $backurl = htmlspecialchars($_SERVER['HTTP_REFERER']);
 ?>
 <a href='<?php echo $backurl?>' class='btn backbtn'>

<i class="fa fa-caret-left"></i>
BACK</a>
-->


</div>






<div class="col-md-2 col-md-offset-1  blogsidebar">

<div class="row">

<div class="col-xs-4 col-md-12">
</div>

</div>
</div>



</div>

	</div>
	</div>
</section>


<?php get_footer(); ?>