jQuery(document).ready( function($) {
    var $container = $('.grid');
    $container.masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: 290,
        gutter: 10,
        isFitWidth: true,
        isAnimated: !Modernizr.csstransitions
    }).imagesLoaded(function(){
        $container.masonry('reloadItems');
        $container.masonry('layout');
    });

    if($(window).width() <= 400){
        $container.masonry( 'destroy' );
        console.log('toto');
    }

} );