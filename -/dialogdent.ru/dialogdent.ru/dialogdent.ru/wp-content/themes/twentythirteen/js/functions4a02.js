/**
 * Functionality specific to Twenty Thirteen.
 *
 * Provides helper functions to enhance the theme experience.
 */

if (window.location.pathname=='partnery/index.html')document.location.href="partnyory/index.html";
 

( function( $ ) {
	var body    = $( 'body' ),
	    _window = $( window );

	/**
	 * Adds a top margin to the footer if the sidebar widget area is higher
	 * than the rest of the page, to help the footer always visually clear
	 * the sidebar.
	 */
	$( function() {
		if ( body.is( '.sidebar' ) ) {
			var sidebar   = $( '#secondary .widget-area' ),
			    secondary = ( 0 == sidebar.length ) ? -40 : sidebar.height(),
			    margin    = $( '#tertiary .widget-area' ).height() - $( '#content' ).height() - secondary;

			if ( margin > 0 && _window.innerWidth() > 999 )
				$( '#colophon' ).css( 'margin-top', margin + 'px' );
		}
	} );

	/**
	 * Enables menu toggle for small screens.
	 */
	( function() {
		var nav = $( '#site-navigation' ), button, menu;
		if ( ! nav )
			return;

		button = nav.find( '.menu-toggle' );
		if ( ! button )
			return;

		// Hide button if menu is missing or empty.
		menu = nav.find( '.nav-menu' );
		if ( ! menu || ! menu.children().length ) {
			button.hide();
			return;
		}

		$( '.menu-toggle' ).on( 'click.twentythirteen', function() {
			nav.toggleClass( 'toggled-on' );
		} );
	} )();

	/**
	 * Makes "skip to content" link work correctly in IE9 and Chrome for better
	 * accessibility.
	 *
	 * @link http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
	 */
	_window.on( 'hashchange.twentythirteen', function() {
		var element = document.getElementById( location.hash.substring( 1 ) );

		if ( element ) {
			if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
				element.tabIndex = -1;

			element.focus();
		}
	} );

    $( function() {
        $(document).on("click", "#show_qst", function(e){
            e.preventDefault();
            $("#qst").toggle();
        });

        var inFormOrLink;
        var prevPage = $("#backlnk").html();
        $('a').live('click', function() { inFormOrLink = true; });
        $('form').bind('submit', function() { inFormOrLink = true; });


        /*if(document.referrer == prevPage) {
            //alert("Back Button Pressed");
            inFormOrLink = true;
            console.log(document.referrer);
            console.log(prevPage);
            console.log(inFormOrLink);
        }*/


        /*$(window).bind("beforeunload", function() {
            //console.log(window.location.toString());

                if(document.referrer == prevPage){
                    console.log("Back Button Pressed");
                }else
                    if(!inFormOrLink){
                        //$("body").html("123");
                        $("#myModal").modal('show');
                        //return "Do you really want to close?";
                        return "Подпишитесь на наши акции";


                }


            //return inFormOrLink || confirm("Do you really want to close?");
        });*/

        $(document).on("submit", "#ask", function(e){
            e.preventDefault();

            var dat = $(this).serialize();

            $.ajax({
                url: wpsc_ajax.ajaxurl,
                type: "POST",
                data: dat,
                success: function(data){
                    $("#ask").trigger( 'reset' );
                    $("#qst").toggle();
                    alert(data);
                }
            });

        });

    });





/*    jQuery.post(ajaxurl, data, function(response) {
        alert('Got this from the server: ' + response);
    });*/


	/**
	 * Arranges footer widgets vertically.
	 */
	if ( $.isFunction( $.fn.masonry ) ) {
		var columnWidth = body.is( '.sidebar' ) ? 228 : 245;

		$( '#secondary .widget-area' ).masonry( {
			itemSelector: '.widget',
			columnWidth: columnWidth,
			gutterWidth: 20,
			isRTL: body.is( '.rtl' )
		} );
	}
	
	$('.train_card').addClass("animoff").viewportChecker({
        classToAdd: 'animon',
		classToRemove: 'animoff',
        offset: 100
   });
} )( jQuery );