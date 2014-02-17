<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>




<footer>

<div class="container">

  <div class="row">

    <div class="col-sm-6 text-left-sm text-center-xs">

All Content &copy; <?php bloginfo('name');?> <?php echo date("Y") ?>
&nbsp; | &nbsp;
Site: <a href="http://www.allthatgoodstuff.co.uk" target="_blank">ATGS</a>
</div>

  <div class="col-sm-6 text-right-sm text-right-md  text-right-lg text-center-xs">

<div class="footericons">
  <?php $page_query = new WP_Query('page_id=13'); while ($page_query->have_posts()) : $page_query->the_post(); $do_not_duplicate = $post->ID;?>
<?php $email = get_post_meta($post->ID, 'wpcf-email', true);?>
<?php $telephone = get_post_meta($post->ID, 'wpcf-telephone', true);?>
<?php $twitter = get_post_meta($post->ID, 'wpcf-twitter', true);?>
<?php $facebook = get_post_meta($post->ID, 'wpcf-facebook', true);?>
<?php $instagram = get_post_meta($post->ID, 'wpcf-instagram', true);?>
<?php $pinterest = get_post_meta($post->ID, 'wpcf-pinterest', true);?>
 <div id="map_canvas" style="width:100%; height:410px; display:none;"></div>

<a href="mailto:<?php echo $email;?>"><i class="fa fa-envelope"></i> <?php echo $email;?></a>
<a href="tel:<?php echo $telephone;?>"><i class="fa fa-phone"></i> <?php echo $telephone;?></a>
<a href="http://www.twitter.com/<?php echo $twitter;?>" target="_blank"><i class="fa fa-twitter"></i> <?php echo $twitter?></a>
<a href="http://www.facebook.com/<?php echo $facebook;?>" target="_blank"><i class="fa fa-facebook"></i> <?php echo $facebook?></a>
<a href="http://www.instagram.com/<?php echo $instagram;?>" target="_blank"><i class="fa fa-instagram"></i> <?php echo $instagram?></a>
<a href="http://www.pinterest.com/<?php echo $pinterest;?>" target="_blank"><i class="fa fa-pinterest"></i> <?php echo $pinterest?></a>
<?php endwhile;?>
</div>

</div>

</div>
</div>


<!--
<a href="http://www.youtube.com" target="_blank" class="rollover">
<span class="fa-stack fa-lg">
  <i class="fa fa-square fa-stack-2x"></i>
  <i class="fa fa-youtube fa-stack-1x fa-top"></i></span></a>

<a href="http://www.twitter.com/" target="_blank" class="rollover">
<span class="fa-stack fa-lg">
  <i class="fa fa-square fa-stack-2x"></i>
  i class="fa fa-twitter fa-stack-1x fa-top"></i></span></a>
-->


</footer>
 
      <script src="<?php bloginfo('stylesheet_directory');?>/js/vendor/bootstrap.min.js"></script>

  <script src="<?php bloginfo('stylesheet_directory');?>/main.js"></script>





<script type="text/javascript" src="http://platform.tumblr.com/v1/share.js"></script>

        <script type="text/javascript" src="http://assets.pinterest.com/js/pinit.js"></script> 
        
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/js/jquery.inview.js "></script>


 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/js/map.js "></script>      




<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38847713-1aaa']);
  _gaq.push(['_setDomainName', 'thefoxproblem.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</body>
</html>




    <!--
      ================================================== -->

