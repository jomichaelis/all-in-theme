/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {

	const siteNavigation = document.getElementById( 'masthead' );

	// Return early if the navigation doesn't exist.
	if ( ! siteNavigation ) {
		return;
	}
	
	var menuVisible = false;
	var langPopupVisible = false;
	
	/***************/
	/* Menu Toggle */
	/***************/
	const mymenu = document.getElementById( 'mymenu' );
	const menuToggleButton = document.getElementById( 'menu-toggle-button' );


	function toggleMenuIcons() {
		const iconContainer = document.querySelector('.icon-container');
		const icons = iconContainer.querySelectorAll('.icon');

		icons.forEach(icon => {
			icon.classList.toggle('menu-icon-hidden');
		});
	}

	function toggleMenu(langPopupAlreadyToggled = false) {
		if( menuVisible ) {
			mymenu.style.left = '100%';
		} else {
			mymenu.style.left = '0';
		}
		menuVisible = !menuVisible;
		if( langPopupVisible && !langPopupAlreadyToggled ) {
			toggleLangPopup(true);
		}
	}

	menuToggleButton.addEventListener( 'click', function() {
		toggleMenuIcons();
		toggleMenu();
	} );

	/*******************/
	/* Language Toggle */
	/*******************/
	const mylangpopup = document.getElementById( 'mylangpopup' );
	const langToggleButton = document.getElementById( 'lang-toggle-button' );

	function toggleLangPopup(menuAlreadyToggled = false) {
		if( langPopupVisible ) {
			mylangpopup.style.left = '100%';
		} else {
			mylangpopup.style.left = '0';
		}
		langPopupVisible = !langPopupVisible;
		if( menuVisible && !menuAlreadyToggled ) {
			toggleMenuIcons();
			toggleMenu(true);
		}
	}

	langToggleButton.addEventListener( 'click', function() {
		toggleLangPopup();
	} );

	/*******************/
	/* Language Switch */
	/*******************/
	const buttonEasy = document.getElementById( 'ilp-button-site-easy' );
	const buttonNormal = document.getElementById( 'ilp-button-site-normal' );

	buttonEasy.addEventListener( 'click', function() {
		var path = window.location.pathname;
		if (!path.startsWith("/de_ls")) {
			window.location.href = "/de_ls" + window.location.pathname;
		} else {
			toggleLangPopup();
		}
	} );

	buttonNormal.addEventListener( 'click', function() {
		// redirect to the same path with leading "/de_ls/"
		var path = window.location.pathname;
		if (path.startsWith("/de_ls")) {
			var pathParts = path.split('/').slice(2);
			var newPath = '/' + pathParts.join('/');
			window.location.href = newPath;
		} else {
			toggleLangPopup();
		}
	} );

	/********************/
	/* Instagram Button */
	/********************/
	const buttonInstagram = document.getElementById( 'instagram-link-button' );
	buttonInstagram.addEventListener( 'click', function() {
		window.open("https://www.instagram.com/all_in.clusion/", '_blank').focus();
	} );

	/*****************/
	/* Submenu Click */
	/*****************/
	const submenus = document.getElementsByClassName( 'sub-menu' );
	for(i = 0; i < submenus.length; i++) {
		const lis = submenus[i].getElementsByTagName( 'li' );
		for(k = 0; k < lis.length; k++) {
			const link_a = lis[k].getElementsByTagName( 'a' );
			lis[k].addEventListener( 'click', function() {
				console.log(link_a[0]);
				link_a[0].click();				
			} );
		}
	}
}() );
