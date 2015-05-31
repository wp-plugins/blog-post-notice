(function( $ ) {
	'use strict';

	$(function() {

		var $preview, $editor;

		$preview = $( '#blog-post-notice-preview' );
		$editor = $( 'textarea[name="blog-post-notice-editor"]' );

		$preview.html( $editor.text() );
		$editor.on( 'keyup', function( evt ) {
			$preview.html( $( this ).val() );
		});

	});

})( jQuery );
