$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        767: {
            items:1
        },
        900:{
            items:2
        },
        1000: {
            items: 2
        }

    }
})