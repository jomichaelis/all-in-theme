/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {

	const listOfPosts = document.getElementsByClassName( 'list-of-posts' );

	// Return early if the navigation doesn't exist.
	if ( listOfPosts.length === 0 ) {
		return;
	}
	
    articles = listOfPosts[0].getElementsByTagName('article');

    for (var i = 0; i < articles.length; i++) {
        var article = articles[i];
        article.addEventListener('click', function() {
            this.getElementsByTagName('a')[0].click();            
        });
    }

}() );
