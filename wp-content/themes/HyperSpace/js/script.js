jQuery(document).ready( function($) {
    var $container = $('.grid');
    jQuery('.grid').masonry({
        itemSelector : '.grid-item',
        columnWidth: 290,
        gutter: 10,
        isAnimated: true,
        isFitWidth: true,
        containerStyle: { position: 'relative' },
        isResizable: true
    });



   /* $container.masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: 290,
        gutter: 10,
        isFitWidth: true,
        isAnimated: !Modernizr.csstransitions
    }).imagesLoaded(function(){
        $container.masonry('reloadItems');
        $container.masonry('layout');
    });*/

    if($(window).width() <= 400){
        $container.masonry( 'destroy' );
        console.log('toto');
    }

    /*jQuery('#simplemasonry-container-66').masonry({
        itemSelector : '.simplemasonry-item-66',
        isAnimated: true,
        isFitWidth: true,
        containerStyle: { position: 'relative' },
        isResizable: true
    });*/

} );