$( '[data-fancybox]' ).nubo({
	caption : function( instance, item ) {
		var caption, link, title;

		if ( item.type === 'image' ) {
			caption = $(this).data('caption');
			title = $(this).data('title');

			return title + ' ' + (caption ? caption + '<br />' : '');
		}
	}
});

$( '[data-fancybox]' ).showreel({
	caption : function( instance, item ) {
		var caption, link, title;

		if ( item.type === 'image' ) {
			caption = $(this).data('caption');
			title = $(this).data('title');
			link    = '<a href="' + item.src + '">Download image</a>';

			return title + ' ' + (caption ? caption + '<br />' : '') + link;
		}
	}
});

$( '[data-fancybox]' ).amazones({
	caption : function( instance, item ) {
		var caption, link, title;

		if ( item.type === 'image' ) {
			caption = $(this).data('caption');
			title = $(this).data('title');

			return title + ' ' + (caption ? caption + '<br />' : '');
		}
	}
});

$( '[data-fancybox]' ).bmyhome({
	caption : function( instance, item ) {
		var caption, link, title;

		if ( item.type === 'image' ) {
			caption = $(this).data('caption');
			title = $(this).data('title');

			return title + ' ' + (caption ? caption + '<br />' : '');
		}
	}
});

$( '[data-fancybox]' ).fruitgy({
	caption : function( instance, item ) {
		var caption, link, title;

		if ( item.type === 'image' ) {
			caption = $(this).data('caption');
			title = $(this).data('title');

			return title + ' ' + (caption ? caption + '<br />' : '');
		}
	}
});