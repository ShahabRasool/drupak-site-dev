
    $(document).ready(function(){
      // Initialize Slick Slider with fully responsive breakpoints
      $('.slick-slider-main').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 700,
        arrows: true,
        dots: true,
        infinite: true,
        pauseOnHover: true,
        touchThreshold: 10,
        responsive: [
          {
            breakpoint: 1280,   // large laptop to desktop
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
              dots: true,
              arrows: true
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
              autoplaySpeed: 3800
            }
          },
          {
            breakpoint: 640,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
              autoplay: true,
              autoplaySpeed: 3500
            }
          }
        ],
        // Optional: custom prev/next arrow styling class to avoid conflict
        prevArrow: '<button type="button" class="slick-prev" aria-label="Previous">‹</button>',
        nextArrow: '<button type="button" class="slick-next" aria-label="Next">›</button>'
      });
      
      // Interactive button click alert (demonstrates full interactivity + could be linked to any action)
      $('#exploreBtn').on('click', function(e){
        e.preventDefault();
        // Gentle ripple effect simulation (just show an alert, but also could scroll to slider)
        alert('✨ Explore the full collection! Swipe through all amazing cards →');
        // Optional: subtle scroll to slider highlight (just for better UX)
        $('html, body').animate({
          scrollTop: $('.slider-container').offset().top - 60
        }, 500);
      });
      
      // Additional minor enhancement: add a subtle parallax feeling on hover for cards? handled via CSS.
      // Ensure that after window resize slick recalc (slick handles it natively, but ensure images are fine)
      $(window).on('resize', function(){
        // slick automatically adapts due to responsive settings, but we can force a refresh if needed
        $('.slick-slider-main').slick('refresh');
      });
      
      // Prevent any console errors due to missing images: images are from unsplash reliable cdn.
      console.log('Slick slider active — fully responsive, wrapper title & button functional');
    });
