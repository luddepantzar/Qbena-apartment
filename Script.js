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
<<<<<<< HEAD
        600:{
            items:1
        },
        1000:{
            items:2
=======
        767: {
            items:1
        },
        900:{
            items:2
        },
        1000: {
            items: 2
>>>>>>> 6d90716afd2436b7554c0889f2ab6f63ef8b99df
        }

    }
})

function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,es,sv'}, 'google_translate_element');
  }