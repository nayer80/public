/* Theme main JS: initialize OWL Carousel and simple GSAP animations */
(function($){
  $(document).ready(function(){
    // Initialize services carousel
    if ($('.services-carousel').length) {
      $('.services-carousel').owlCarousel({
        items:3,
        margin:20,
        loop:true,
        autoplay:true,
        responsive:{0:{items:1},600:{items:2},900:{items:3}}
      });
    }

    // Hero entrance animations using GSAP (only load if hero section exists)
    if (typeof gsap !== 'undefined' && $('.hero-left').length > 0) {
      gsap.from('.hero-left h1', {opacity:0, y:40, duration:1, ease:'power3.out'});
      gsap.from('.hero-left p', {opacity:0, y:20, duration:0.8, delay:0.2});
      gsap.from('.hero-search', {opacity:0, y:20, duration:0.8, delay:0.35});
    }

    // Sticky header behavior
    var header = $('.site-header');
    var heroHeight = $('.hero-full').outerHeight() || 300;
    $(window).on('scroll', function(){
      if ($(window).scrollTop() > heroHeight - 80) {
        header.addClass('is-sticky');
      } else {
        header.removeClass('is-sticky');
      }
    });

    // Mobile menu toggle
    $('.menu-toggle').on('click', function(){
      var nav = $('.main-nav');
      var expanded = $(this).attr('aria-expanded') === 'true';
      $(this).attr('aria-expanded', !expanded);
      nav.slideToggle(200);
    });
  });
})(jQuery);
