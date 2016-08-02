
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

	$(document).ready(function ($) {
		$('.module_tab__0 #module-tabs-0 a:first').tab('show');
		$('.module_tab__0').tabCollapse();
	});
	
$('.date').datetimepicker({
	pickTime: false
});


/*<![CDATA[*//*window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
/*olark.identify('7830-582-10-3714');/*]]>*/ 