$(function() {
  if ($('.banner-page').length) {
    $('.slider').slick({
      infinite: true,
      arrows: true,
      dots: true,
      autoplay: true,
      autoplaySpeed: 5000,
      
      dotsClass: 'slick-dots',
      prevArrow: `<button type='button' class='slick-prev slick-arrow'><i class="fa-solid fa-arrow-left"></i></button>`,
      nextArrow: `<button type='button' class='slick-next slick-arrow'><i class="fa-solid fa-arrow-right"></i></button>`,
      
      mobileFirst: true,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  }
})

console.log("run file b.js")