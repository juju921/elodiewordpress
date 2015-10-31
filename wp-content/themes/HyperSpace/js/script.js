jQuery( document ).ready( function( $ ) {
    $('#grid').masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: 290,
        "gutter": 10

    });
} );