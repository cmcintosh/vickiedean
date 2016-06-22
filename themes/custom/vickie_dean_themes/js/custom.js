;(function ($) {
		$(window).load(function () {
			var o = $('.sf-menu');
			o.superfish();
			o.find('li a').each(function () {
				if ($(location).attr('href').indexOf($(this).attr('href')) >= 0){
					$(this).addClass('active');
					return;
				}
			})
			if (o.parents('aside').length){
				var width = $('.container').outerWidth() - $('aside').outerWidth();
				o.find('.sf-mega').each(function () {
					$(this).width(width);
				})
			}
		});
	})(jQuery);

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
function getCookie(c_name) {
		var search = c_name + "="
		var returnvalue = "";
		if (document.cookie.length > 0) {
			offset = document.cookie.indexOf(search)
			if (offset != -1) {
				offset += search.length
				end = document.cookie.indexOf(";", offset);
				if (end == -1) end = document.cookie.length;
				returnvalue=unescape(document.cookie.substring(offset, end))
			}
		}
		return returnvalue;
	}
	jQuery(document).ready(function ($) {
		var showIt = getCookie('shownewsletter');
		var m = 1;
		var date = new Date();
		date.setTime(date.getTime() + (m * 60 * 1000));
		if (showIt == '') {
			$('#tm-newsletter-popup').fadeIn(300);
		}
		$('#newsletter-popup-dont-show').click(function (e) {
			e.preventDefault()
			document.cookie = 'shownewsletter=true; path=/; expires=' + date.toString();
			$('#tm-newsletter-popup').fadeOut(300);
		});
		$('#newsletter-popup-close-btn').click(function (e) {
			e.preventDefault();
			document.cookie = 'shownewsletter=false';
			$('#tm-newsletter-popup').fadeOut(300);
		});
		$('#tm-newsletter-popup').submit(function (e) {
			e.preventDefault();
			var email = $("#input-tm-newsletter-popup-email").val();
			var emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}$/igm;
			if (emailRegex.test(email)) {
				var dataString = 'tm_newsletter_popup_email=' + email;
				$.ajax({
					type: "POST",
					url: "index.php?route=module/tm_newsletter_popup",
					data: dataString,
					cache: false,
					success: function (result) {
						if (!result) {
							$('#tm-newsletter-popup_error').html('');
							$('#tm-newsletter-popup_success').stop(true, true).html('You have successfully subscribed').fadeIn(300).delay(4000).fadeOut(300);
						} else {
							$('#tm-newsletter-popup_success').html('');
							$('#tm-newsletter-popup_error').stop(true, true).html(result).fadeIn(300).delay(4000).fadeOut(300);
						}
					}
				});
			} else {
				$('#tm-newsletter-popup_success').html('');
				$('#tm-newsletter-popup_error').stop(true, true).html('Please enter a valid e-mail!').fadeIn(300).delay(4000).fadeOut(300);
			}
		});
});

$(document).ready(function ($) {
		$('.module_tab__0 #module-tabs-0 a:first').tab('show');
		$('.module_tab__0').tabCollapse();
	});
$(document).ready(function () {
			$('#tm-newsletter').submit(function (e) {
				e.preventDefault();
				var email = $("#input-tm-newsletter-email").val();
				var emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}$/igm;
				if (emailRegex.test(email)) {
					var dataString = 'tm_newsletter_email=' + email;
					$.ajax({
						type: "POST",
						url: "index.php?route=module/tm_newsletter",
						data: dataString,
						cache: false,
						success: function (result) {
							if (!result){
								$('#tm-newsletter_error').html('');
								$('#tm-newsletter_success').stop(true, true).html('You have successfully subscribed').fadeIn(300).delay(4000).fadeOut(300);
							}else{
								$('#tm-newsletter_success').html('');
								$('#tm-newsletter_error').stop(true, true).html(result).fadeIn(300).delay(4000).fadeOut(300);
							}
						}
					});
				} else {
					$('#tm-newsletter_success').html('');
					$('#tm-newsletter_error').stop(true, true).html('Please enter a valid e-mail!').fadeIn(300).delay(4000).fadeOut(300);
				}
			});
		});