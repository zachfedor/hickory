/**
 * Theme JavaScript
 *
 * author: zachfedor
 * version: 0.1
 * url: http://hickory.io
 * license: MIT
 */

var $ = require('../../../../../bower_components/jquery/dist/jquery.min.js');

$( document ).ready( function() {
    $( '#menu-button' ).click( function( event ) {
        event.preventDefault();
        $( '#sidebar' ).toggleClass( "active" );
        /*$( '#menu-button i' ).fadeOut( 400, function() {
            $( '#menu-button i' ).toggleClass( 'fa-bars' ).toggleClass( 'fa-times' ).fadeIn( 400 );
        });*/
        $( '#menu-button i' ).toggleClass( 'fa-bars fa-times' );
    });
});
