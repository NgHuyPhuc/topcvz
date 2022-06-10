$(document).ready(function(){
    $('.image-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000, 
        prevArrow:`<button type='button' class='slick-prev pull-left'><i class='ti-arrow-left slick-arrow' aria-hidden='true'></i></button>`,
        nextArrow:`<button type='button' class='slick-next pull-right'><i class='ti-arrow-right slick-arrow' aria-hidden='true'></i></button>`,
        // dots: true,
    });
  });


