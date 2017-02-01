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
        $( '#menu-button i' ).toggleClass( 'fa-bars fa-times' );
    });
});
