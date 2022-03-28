$(document).ready(function (){
    $('.main__inner-games-slider').slick({
        arrows: true,
        dots: false,
        vertical: true,
        verticalSwiping: true,
        slidesToScroll: 1,
        slidesToShow: 4,
        infinite: true,
        autoplay: true,
        speed: 300,
        autoplaySpeed: 1500,
        pauseOnFocus: true,
        pauseOnHover: true,
        draggable: false,
    });
});