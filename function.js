$(document).ready(function(){

  function scrollY() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }

  $(window).scroll(function () {
    if (scrollY() < 10){
      $('header').css('height','200px');
      setTimeout(function(){
        $('.logo').fadeIn();  
      }, 1000);    
    }
    else {
     $('.logo').fadeOut();
     $('header').css('height','50px');       
   }
   if (scrollY() != 0 || scrollY() > 10) {
     $('.logo').fadeOut();
     $('header').css('height','50px');    
   }
 });

    //Animate the Call to Action

    $('.call-to-action').animate({'left': '0px'}, 3500);

    //Modal Box Stuff

    $('.call-to-action').click(function(){
      $('.modalbox').fadeIn();
      $('.modalbackground').fadeIn();
    });
    $('.modalbackground').click(function(){
      $('.modalbox').fadeOut();
      $('.modalbackground').fadeOut();
    });

    $('.slider').fadeIn(1000,function(){
      $('.slider').slick({
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
    $('.client-list').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 2000,
    });

    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

  });