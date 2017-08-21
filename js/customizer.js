/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
       
    //header background color

    wp.customize( 'bck_ground_image', function( value ) {
        value.bind( function( to ) {
            $( '#home-banner' ).text( to );
        } );
    } );

    wp.customize( 'grit_transparnt', function( value ) {
        value.bind( function( to ) {
            $( '#home-banner:before' ).css( 'opacity', to );
        } );
    } );

    wp.customize( 'grit_header_background_color', function( value ) {
        value.bind( function( to ) {
            $( '#home-banner:before' ).css( 'background-color', to );
        } );
    } );

    //counter background color

    wp.customize( 'grit_counter_background_color', function( value ) {
        value.bind( function( to ) {
            $( '#company-counter:before' ).css( 'background-color', to );
        } );
    } );

    wp.customize( 'grit_counter_transparnt', function( value ) {
        value.bind( function( to ) {
            $( '#company-counter:before' ).css( 'opacity', to );
        } );
    } );
  

    
} )( jQuery );

