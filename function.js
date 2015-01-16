jQuery(document).ready(function(){

  function scrollY() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }

  jQuery(window).scroll(function () {
    if (scrollY() < 10){
      jQuery('header').css('height','200px');
      setTimeout(function(){
        jQuery('.logo').fadeIn();  
      }, 1000);    
    }
    else {
     jQuery('.logo').fadeOut();
     jQuery('header').css('height','50px');       
   }
   if (scrollY() != 0 || scrollY() > 10) {
     jQuery('.logo').fadeOut();
     jQuery('header').css('height','50px');    
   }
 });

    //Animate the Call to Action

    jQuery('.call-to-action').animate({'left': '0px'}, 3500);

    //Modal Box Stuff

    jQuery('.call-to-action').click(function(){
      jQuery('.modalbox').fadeIn();
      jQuery('.modalbackground').fadeIn();
    });
    jQuery('.modalbackground').click(function(){
      jQuery('.modalbox').fadeOut();
      jQuery('.modalbackground').fadeOut();
    });

    jQuery('.slider').fadeIn(1000,function(){
      jQuery('.slider').slick({
        infinite: true,
        autoplay: true,
        arrows: false,
        autoplaySpeed:5000,
        speed: 500,
        fade: true,
        slide: 'div',
        adaptiveHeight: true
      });
    });

    //Initialize the main homepage slider

    //Initialize the client carousel
    jQuery('.client-list').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 2000,
    });

    //Initialize Tabs System

    jQuery( ".tabs" ).tabs();

    jQuery(function() {
      jQuery('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = jQuery(this.hash);
          target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            jQuery('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

  });