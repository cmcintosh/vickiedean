
jQuery(function(){
		jQuery('#camera_wrap_0').camera({
			navigation: false,
			playPause: false,
			thumbnails: false,
			navigationHover: false,
			barPosition: 'top',
			loader: false,
			time: 3000,
			transPeriod:800,
			alignment: 'center',
			autoAdvance: true,
			mobileAutoAdvance: true,
			barDirection: 'leftToRight', 
			barPosition: 'bottom',
			easing: 'easeInOutExpo',
			fx: 'simpleFade',
			height: '43.36585365853659%',
			minHeight: '300px',
			hover: true,
			pagination: true,
			loaderColor			: '#17356a',
			loaderBgColor		: 'transparent',
			loaderOpacity		: 1,
			loaderPadding		: 0,
			loaderStroke		: 3,
			});
	});

;(function ($) {
		$(document).ready(function(){
			var o = $('#search');
			if (o.length) {
				var btn = $('.tog_btn');
				var toggle__cont = $('#search .search__cnt');
				var input = $('#search__input');
				btn.on('click touchstart', function (e) {
					e.preventDefault();
					if ((!toggle__cont.hasClass('open')) || (toggle__cont.hasClass('open') && input.val() == "")) {
						toggle__cont.toggleClass('open');
						o.toggleClass('open');
  						btn.toggleClass('active');
					} else {
						toggle__cont.removeClass('open');
						o.removeClass('open');
						input.blur();
						btn.removeClass('active');
					}
					if (toggle__cont.hasClass('open')){
						btn.addClass('active');
						var strLength = input.val().length * 2;
						input.focus();
						input[0].setSelectionRange(strLength, strLength);
					} else {
						input.blur();
					}
				});
				input.on('keydown', function(e){
					if (e.keyCode == 13) {
						btn.trigger('click');
					}
					if (e.keyCode == 27) {
						toggle__cont.removeClass('open');
						input.blur();
					}
				});
				$(document).on('click touchstart', function (e) {
					if (!o.is(e.target) && o.has(e.target).length === 0 && toggle__cont.hasClass('open')) {
						toggle__cont.removeClass('open');
						o.removeClass('open');
						input.blur();
						btn.removeClass('active');
					}
				});
			}
		});
})(jQuery);
