jQuery(document).ready(function($) {
    $('.carousel').lazyBootstrapCarousel();;

    $('.carousel .item').on('lazyBootstrapCarousel.loading', function(e) {
        console.log('lazy-src: ' + $(this).find('img').attr('data-lazy-src'));
    });

    $('.carousel .item').on('lazyBootstrapCarousel.loaded', function(e) {
        console.log('src: ' + $(this).find('img').attr('src'));
    });


    $(".responsive-container").fitVids();

    $(".carousel").swipe({
        //Generic swipe handler for all directions
        swipeLeft:function(event, direction, distance, duration, fingerCount) {
            $(this).carousel('next');
        },
        swipeRight:function(event, direction, distance, duration, fingerCount) {
            $(this).carousel('prev');
        },
        //Default is 75px, set to 0 for demo so any distance triggers swipe
       threshold:0
    });
});