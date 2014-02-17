

$(document).ready(function() {

  if ($(window).width() >= 767){  
    // do something here
    var viewportWidth = $(window).width();
var viewportHeight = $(window).height();


  $(".fullscreen").height($(window).height() - 0);

  


//$(".fullscreen").addClass('red');
  } 




  $(".page-template-page-home-php > #menu-item-17 > a, .navbar-brand ").click(function(e) {
  e.preventDefault();
  $('html, body').animate({
  scrollTop: $(".section1").offset().top -0}, 1000);
  });

   $(".page-template-page-home-php > #menu-item-16 > a, .scrolldown > a").click(function(e) {
  e.preventDefault();
  $('html, body').animate({
  scrollTop: $(".section2").offset().top -0}, 1000);
  });

  $(".page-template-page-home-php > #menu-item-47 > a").click(function(e) {
  e.preventDefault();
  $('html, body').animate({
  scrollTop: $(".section3").offset().top -0}, 1000);
  });

    $(".page-template-page-home-php > #menu-item-49 > a").click(function(e) {
  e.preventDefault();
  $('html, body').animate({
  scrollTop: $(".section4").offset().top -0}, 1000);
  });



  $('div.logocontrol').bind('inview', function (event, visible) {
  if (visible == true) {
    $('.navbar-brand-icon').fadeIn(300);
    $('.navbar-brand-logo').fadeOut(300);

    // element is now visible in the viewport
  } else {
      $('.navbar-brand-icon').fadeOut(300);
    $('.navbar-brand-logo').fadeIn(300);

    
    // element has gone out of viewport
  }
});


  /*
  if ($(".twatdetector").css("display") == "none" ){
    // TEST FOR XS BOOTSTRAP SIZE
var viewportWidth = $(window).width();
var viewportHeight = $(window).height();
  $(".fullscreen").height($(window).height() - 20);
$(".fullscreen").addClass('red');
  }
  */


});



$(window).resize(function(){  
  if ($(window).width() >= 767){  
    // do something here
    var viewportWidth = $(window).width();
var viewportHeight = $(window).height();
  $(".fullscreen").height($(window).height() - 0);

  } 


});



/*
$(window).load(function() {
   $(function(){
      
      var $container = $('#isotope');
      
      $container.isotope({
        itemSelector: '.isotope',
         layoutMode: 'sloppyMasonry',
         columnWidth:10
            // resizable: false, // disable normal resizing
  // set columnWidth to a percentage of container width
  //masonry: { columnWidth: $container.width() / 3 }
      });
      
    });


});
*/
	
	
		
	 		
	

