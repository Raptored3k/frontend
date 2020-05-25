$(".slider-items").slick({
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: '40px',
    autoplay: true,
    
    prevArrow: ".site-slider .btn-slider .left",
    nextArrow: ".site-slider .btn-slider .right",

});

$(".slider-items1").slick({
    dots: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autplaySpeed: 6000,
    prevArrow: ".site-slider .btn-slider1 .left1",
    nextArrow: ".site-slider .btn-slider1 .right1",

});