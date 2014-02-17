<?php /* template name: home-fullscreencarousel */
get_header(); ?> 




<section class="home fullscreen">
<div class="container">

	<div class="row">

		<div class="col-sm-12">



<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php  
$image1 = get_post_meta($post->ID, 'wpcf-image-1', true);
$image2 = get_post_meta($post->ID, 'wpcf-image-2', true);
$image3 = get_post_meta($post->ID, 'wpcf-image-3', true);
$image4 = get_post_meta($post->ID, 'wpcf-image-4', true);
$image5 = get_post_meta($post->ID, 'wpcf-image-5', true);
?>




<?php the_content();?>


<div id="carousel-main" class="carousel fixed fullscreencarousel slide landscapecarousel" data-ride="carousel" data-interval="false">

  <ol class="carousel-indicators">
      	<?php if (!empty($image1)) { ?><li data-target="#carousel-main" data-slide-to="0" class="active"></li><?php } ?>
      	<?php if (empty($image1)) { ?><li data-target="#carousel-main" data-slide-to="0" class="active"></li><?php } ?>
        <?php if (!empty($image2)) { ?><li data-target="#carousel-main" data-slide-to="1"></li><?php } ?>
      	<?php if (empty($image2)) { ?><li data-target="#carousel-main" data-slide-to="1"></li><?php } ?>
      	<?php if (!empty($image3)) { ?><li data-target="#carousel-main" data-slide-to="2"></li><?php } ?>
      	<?php if (!empty($image4)) { ?><li data-target="#carousel-main" data-slide-to="3"></li><?php } ?>
      	<?php if (!empty($image5)) { ?><li data-target="#carousel-main" data-slide-to="4"></li><?php } ?>
  </ol>


  <div class="carousel-inner">
    	<?php if (!empty($image1)) { ?><div class="item active" style="background-image:url('<?php echo $image1;?>');"></div><?php } ?>
    	<?php if (empty($image1)) { ?><div class="item active" style="background-image:url('http://placehold.it/1800x1200');"></div><?php } ?>
    	<?php if (!empty($image2)) { ?><div class="item" style="background-image:url('<?php echo $image2;?>');"></div><?php } ?>
    	<?php if (empty($image2)) { ?><div class="item" style="background-image:url('http://placehold.it/2400x1600');"></div><?php } ?>
    	<?php if (!empty($image3)) { ?><div class="item" style="background-image:url('<?php echo $image3;?>');"></div><?php } ?>
    	<?php if (!empty($image)) { ?><div class="item" style="background-image:url('<?php echo $image4;?>');"></div><?php } ?>
    	<?php if (!empty($image5)) { ?><div class="item" style="background-image:url('<?php echo $image5;?>');"></div><?php } ?>
    	
  </div>

        
        <?php //if (!empty($image2)) { ?>
  <a class="left carousel-control" href="#carousel-main" data-slide="prev">
  &lt;
  </a>
  <a class="right carousel-control" href="#carousel-main" data-slide="next">
  &gt;
  </a>
  <?php //} ?>
</div>



<?php endwhile; ?>
<?php else : ?><?php endif; ?>	
</div>	


</div>
</div>

</section>


                    		
                        
  

<?php get_footer(); ?> 