jQuery(document).ready(function(){

  function scrollY() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }

    //Animate the Call to Action

    jQuery('.call-to-action').animate({'left': '0px'}, 3500);

    //Modal Box Stuff

    setTimeout(function(){
      jQuery('.modal').fadeIn();
      jQuery('.modal-bg').fadeIn();
    }, 3000);

    jQuery('.modal-bg').click(function(){
      jQuery('.modal').fadeOut();
      jQuery('.modal-bg').fadeOut();
    });

    jQuery('.X-btn').click(function(){
      jQuery('.modal').fadeOut();
      jQuery('.modal-bg').fadeOut();
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

    jQuery('.resp-menu i').click(function(){
      jQuery('.resp-menu nav').slideToggle();
    });

  });