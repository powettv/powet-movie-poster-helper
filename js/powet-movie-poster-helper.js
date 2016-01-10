( function(){

	// Populate editor with template
	var insertMoviePosterTemplate = function( e ) {
		e.preventDefault();
		//var selected = '';
		//selected = tinyMCE.activeEditor.selection.getContent();
		var movieTemplate = '<div style="text-align: center"><img src=""/></div>\n\n' +
			'See the trailer and more posters after the jump!\n' +
			'<!--more-->\n\n\n' +
			'<div style="text-align: center"></div>\n\n' +
			'<div style="text-align: center">\n' +
			'	<img src=""/><br/>\n' +
			'</div>';
		console.log( this.dataset.postId );
		tinymce.execCommand('mceInsertContent', false, movieTemplate );
	}

	// Open dialog when clicking the Add Timeline button
	jQuery('#insert-movie-poster-template').on('click', insertMoviePosterTemplate );

})();