/* global wp, jQuery */
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
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute',
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					clip: 'auto',
					position: 'relative',
				} );
				$( '.site-title a, .site-description' ).css( {
					color: to,
				} );
			}
		} );
	} );

	wp.customize( 'header_backgroundcolor', function( value ) {
		value.bind( function( to ) {
			console.log(to);
			if ( 'blank' === to ) {
				$(':root').css('--ait-header-bg-color', '#FF0ACE');
			} else {
				$(':root').css('--ait-header-bg-color', to);
			}
		} );
	} );

	wp.customize( 'header_menu_linkcolor', function( value ) {
		value.bind( function( to ) {
			console.log(to);
			if ( 'blank' === to ) {
				$(':root').css('--ait-header-menu-linkcolor', '#FFFE45');
			} else {
				$(':root').css('--ait-header-menu-linkcolor', to);
			}
		} );
	} );

	wp.customize( 'header_menu_buttoncolor', function( value ) {
		value.bind( function( to ) {
			console.log(to);
			if ( 'blank' === to ) {
				$(':root').css('--ait-header-menu-buttoncolor', '#FFFE45');
			} else {
				$(':root').css('--ait-header-menu-buttoncolor', to);
			}
		} );
	} );

	wp.customize( 'header_menu_buttoncolor_hover', function( value ) {
		value.bind( function( to ) {
			console.log(to);
			if ( 'blank' === to ) {
				$(':root').css('--ait-header-menu-buttoncolor-hover', '#E0E000');
			} else {
				$(':root').css('--ait-header-menu-buttoncolor-hover', to);
			}
		} );
	} );

	wp.customize( 'menu_backgroundcolor', function( value ) {
		value.bind( function( to ) {
			console.log(to);
			if ( 'blank' === to ) {
				$(':root').css('--ait-menu-bg-color', '#FF0ACE');
			} else {
				$(':root').css('--ait-menu-bg-color', to);
			}
		} );
	} );

	wp.customize( 'submenu_backgroundcolor', function( value ) {
		value.bind( function( to ) {
			console.log(to);
			if ( 'blank' === to ) {
				$(':root').css('--ait-submenu-bg-color', '#DDDDDD');
			} else {
				$(':root').css('--ait-submenu-bg-color', to);
			}
		} );
	} );

	wp.customize( 'submenu_backgroundcolor_hover', function( value ) {
		value.bind( function( to ) {
			console.log(to);
			if ( 'blank' === to ) {
				$(':root').css('--ait-submenu-bg-color-hover', '#BBBBBB');
			} else {
				$(':root').css('--ait-submenu-bg-color-hover', to);
			}
		} );
	} );

	wp.customize( 'footer_backgroundcolor', function( value ) {
		value.bind( function( to ) {
			console.log(to);
			if ( 'blank' === to ) {
				$(':root').css('--ait-footer-bg-color', '#FFFE45');
			} else {
				$(':root').css('--ait-footer-bg-color', to);
			}
		} );
	} );

	wp.customize( 'footer_textcolor', function( value ) {
		value.bind( function( to ) {
			console.log(to);
			if ( 'blank' === to ) {
				$(':root').css('--ait-footer-textcolor', '#FF0ACE');
			} else {
				$(':root').css('--ait-footer-textcolor', to);
			}
		} );
	} );

	wp.customize( 'footer_linkcolor', function( value ) {
		value.bind( function( to ) {
			console.log(to);
			if ( 'blank' === to ) {
				$(':root').css('--ait-footer-linkcolor', '#FF0ACE');
			} else {
				$(':root').css('--ait-footer-linkcolor', to);
			}
		} );
	} );

	wp.customize( 'page_title_color', function( value ) {
		value.bind( function( to ) {
			console.log(to);
			if ( 'blank' === to ) {
				$(':root').css('--ait-page-title-color', '#FF0ACE');
			} else {
				$(':root').css('--ait-page-title-color', to);
			}
		} );
	} );
}( jQuery ) );
