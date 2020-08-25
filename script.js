/*$('.train_card').addClass("animoff").viewportChecker({
        classToAdd: 'animon',
		classToRemove: 'animoff',
        offset: 100
   });*/
   
   $('.form-l input').focusin(function(){
	   var id = '.form__label[for="'+ $(this).attr('id')+'"]';
	   $('.form__label').removeClass("form__label--active");
	   $(id).addClass("form__label--active");
   });
   $('.form-l input').keyup(function(){
	  var value = $(this).val();
	  var id = '.form__label[for="'+ $(this).attr('id')+'"]';
	  if(value != ''){
		  $(id).addClass("form__label-active");
	  }else{
		  $(id).removeClass("form__label-active");
	  }
	});
	$('.form-l input').focusout(function(){
		$('.form__label').removeClass("form__label--active");
	})
    //$("#fphone").mask("+7 (999) 99-99-999");

	if ($(window).width() < 1200){
		var vis1=0;
		var vis2=0;
		$('.menu-head-btn').click(function(){
			$('.grid__aside').css('display','none');
			vis2=0;
			if(vis1==1){
				$('.top-menu__navbar').css('display','none');
				vis1=0;
			}else{
				$('.top-menu__navbar').css('display','block');
				vis1=1;
			}
		});
		$('.cat-head-btn').click(function(){
			vis1=0
			$('.top-menu__navbar').css('display','none');
			if(vis2==1){
				$('.grid__aside').css('display','none');
				vis2=0;
			}else{
				$('.grid__aside').css('display','block');
				vis2=1;
			}
		});
		$('.bx_sitemap_li_title > span').click(function(el){
			el.preventDefault();
			if($(this).parent('.bx_sitemap_li_title').hasClass('touched')){
				$(this).parent('.bx_sitemap_li_title').removeClass('touched');
			}
			else{
				$(this).parent('.bx_sitemap_li_title').addClass('touched');
			}
		});
	}