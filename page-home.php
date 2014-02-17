<?php /* template name: home */
get_header(); ?> 




<section class="home fullscreen section1">



<div class="container">





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


<div id="carousel-main" class="carousel fullscreencarousel slide landscapecarousel" data-ride="carousel" data-interval="false">

  <ol class="carousel-indicators">
      	<?php if (!empty($image1)) { ?><li data-target="#carousel-main" data-slide-to="0" class="active"></li><?php } ?>
      	<?php if (empty($image1)) { ?><li data-target="#carousel-main" data-slide-to="0" class="active"></li><?php } ?>
     
      	<?php if (!empty($image2)) { ?><li data-target="#carousel-main" data-slide-to="1"></li><?php } ?>
      	<?php if (empty($image2)) { ?><li data-target="#carousel-main" data-slide-to="1"></li><?php } ?>
      	
      	<?php if (!empty($image3)) { ?><li data-target="#carousel-main" data-slide-to="2"></li><?php } ?>
      	<?php if (!empty($image4)) { ?><li data-target="#carousel-main" data-slide-to="3"></li><?php } ?>
      	<?php if (!empty($image5)) { ?><li data-target="#carousel-main" data-slide-to="4"></li><?php } ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    	<?php if (!empty($image1)) { ?><div class="item active" style="background-image:url('<?php echo $image1;?>');"></div><?php } ?>
    	<?php if (empty($image1)) { ?><div class="item active" style="background-image:url('http://placehold.it/1800x1200');"></div><?php } ?>
    	
    	<?php if (!empty($image2)) { ?><div class="item" style="background-image:url('<?php echo $image2;?>');"></div><?php } ?>
    	<?php if (empty($image2)) { ?><div class="item" style="background-image:url('http://placehold.it/2400x1600');"></div><?php } ?>
    	
    	<?php if (!empty($image3)) { ?><div class="item" style="background-image:url('<?php echo $image3;?>');"></div><?php } ?>
    	<?php if (!empty($image)) { ?><div class="item" style="background-image:url('<?php echo $image4;?>');"></div><?php } ?>
    	<?php if (!empty($image5)) { ?><div class="item" style="background-image:url('<?php echo $image5;?>');"></div><?php } ?>
    	
  </div>



</div>


        <?php //if (!empty($image2)) { ?>
  <a class="left carousel-control" href="#carousel-main" data-slide="prev">
  &lt;
  </a>
  <a class="right carousel-control" href="#carousel-main" data-slide="next">
  &gt;
  </a>
  <?php //} ?>


 <div class="centerall logocontrol">
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
<img class="" src="<?php bloginfo('stylesheet_directory')?>/images/logo.png" alt="<?php bloginfo('name');?>" title="" />
<?php the_content();?>
</div>
</div>
</div>
  </div>


<?php endwhile; ?>
<?php else : ?><?php endif; ?>	

</div>




<div class="scrolldown hidden-xs">
  <a href="#section2"><i class="fa fa-arrow-down"></i></a>
</div>


</section>


     
     <section class="home fullscreen section2">

<div class="centerall">
  <div class="container">
<?php $query = new WP_Query( 'pagename=about' ); ?>
  <?php  while ($query->have_posts()) : 
  $query->the_post(); $do_not_duplicate = $post->ID;?>
<?php the_content();?>
<?php endwhile; ?>

</div></div>
     </section>



<section class="home fullscreen section3">
<div class="centerall">
  <div class="container">
<div class="row">
<?php $itemquery = new WP_Query( array( 'post_type' => 'example') );?>
  <?php  while ($itemquery->have_posts()) : 
  $itemquery->the_post(); $do_not_duplicate = $post->ID;?>
<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 griditem">

<?php //the_post_thumbnail('full');?>
<a href="<?php the_permalink();?>">
  <img title="image title" alt="thumb image" class="wp-post-image" 
             src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>"/>
</a>
<a href="<?php the_permalink();?>"><?php the_title();?></a>


</div>
<?php endwhile; ?>


</div>


</div>  </div>
     </section>



                        
  

<?php get_footer(); ?> 