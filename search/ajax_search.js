$('header #q').keydown(function(){
	var _self = $(this)
 
	setTimeout(function() {
		if( _self.val().length > 3 ){
			$('header #search_result').fadeIn(300)
 
			var text=_self.val();
			var url="/search/ajax_search.php?text="+text;
 
			$.ajax({
				type: "GET",
				dataType: "html",
				url: url,
				success: function(data){
					$('header .live-search').html(data);
				}
			});
 
 
		} else {
			$('header #search_result').fadeOut(200)
		}
	}, 10)
})