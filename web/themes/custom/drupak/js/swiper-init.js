
(function (Drupal, once) {
  Drupal.behaviors.swiperInit = {
    attach: function (context) {

      once('swiper-init', '.mySwiper', context).forEach(function (el) {

        new Swiper(el, {
          slidesPerView: 1,
          spaceBetween: 16,
          loop: true,

          autoplay: {
            delay: 3000,
            disableOnInteraction: false,
          },

          pagination: {
            el: el.closest('.relative').querySelector('.swiper-pagination'),
            clickable: true,
          },

          navigation: {
            nextEl: el.querySelector('.swiper-button-next'),
            prevEl: el.querySelector('.swiper-button-prev'),
          },

          breakpoints: {
            640: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
            1280: { slidesPerView: 3 },
          }
        });

      });

    }
  };
})(Drupal, once);