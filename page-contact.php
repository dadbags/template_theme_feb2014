<?php
/**
  * Template Name: contact */

get_header(); ?>


     <section>
     <div class="container">
<div class="row">

		
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php $email = get_post_meta($post->ID, 'wpcf-email', true);?>
<?php $telephone = get_post_meta($post->ID, 'wpcf-telephone', true);?>
<?php $twitter = get_post_meta($post->ID, 'wpcf-twitter', true);?>
<?php $facebook = get_post_meta($post->ID, 'wpcf-facebook', true);?>
<?php $instagram = get_post_meta($post->ID, 'wpcf-instagram', true);?>
<?php $pinterest = get_post_meta($post->ID, 'wpcf-pinterest', true);?>
<?php $address1 = get_post_meta($post->ID, 'wpcf-address-line-1', true);?>
<?php $address2 = get_post_meta($post->ID, 'wpcf-address-line-2', true);?>
<?php $address3 = get_post_meta($post->ID, 'wpcf-address-line-3', true);?>
<?php $address4 = get_post_meta($post->ID, 'wpcf-address-line-4', true);?>
<?php $city = get_post_meta($post->ID, 'wpcf-city', true);?>
<?php $postcode = get_post_meta($post->ID, 'wpcf-postcode', true);?>

 <div id="map_canvas" style="width:100%; height:410px"></div>


<a href="mailto:<?php echo $email;?>"><i class="fa fa-envelope"></i> <?php echo $email;?></a>
<a href="tel:<?php echo $telephone;?>"><i class="fa fa-phone"></i> <?php echo $telephone;?></a>
<a href="http://www.twitter.com/<?php echo $twitter;?>" target="_blank"><i class="fa fa-twitter"></i> <?php echo $twitter?></a>
<a href="http://www.facebook.com/<?php echo $facebook;?>" target="_blank"><i class="fa fa-facebook"></i> <?php echo $facebook?></a>
<a href="http://www.instagram.com/<?php echo $instagram;?>" target="_blank"><i class="fa fa-instagram"></i> <?php echo $instagram?></a>
<a href="http://www.pinterest.com/<?php echo $pinterest;?>" target="_blank"><i class="fa fa-pinterest"></i> <?php echo $pinterest?></a>


<?php if (!empty($address1)) { ?><p><?php echo $address1;?></p><?php } ?>
<?php if (!empty($address2)) { ?><p><?php echo $address2;?></p><?php } ?>
<?php if (!empty($address3)) { ?><p><?php echo $address3;?></p><?php } ?>
<?php if (!empty($address4)) { ?><p><?php echo $address4;?></p><?php } ?>
<?php if (!empty($city)) { ?><p><?php echo $city;?></p><?php } ?>
<?php if (!empty($postcode)) { ?><p><?php echo $postcode;?></p><?php } ?>



<?php the_content();?>

<?php endwhile; ?>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>	


	</div>
	</div>	

</section>
<?php get_footer(); ?>