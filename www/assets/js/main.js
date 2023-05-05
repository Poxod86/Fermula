var owlProducts = $('.owl-products');
owlProducts.owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:3
        }
    }
});

var owlGarage = $('.owl-garage');
owlGarage.owlCarousel({
    items:1,
    loop:false,
    margin:10,
    nav:true,
    dots:false
});