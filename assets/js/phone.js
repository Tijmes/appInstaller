//
var lv = {};
lv.useIscroll = 0;
lv.delayIscroll = 0;
var myScroll;
//
TweenMax.set('.diamond', {rotation:45});
TweenMax.set('.diamondInner', {rotation:-45});
//
lv.allData = jsonObjects;
lv.objectsCustomOrder = jsonObjectsCustomOrder;
//
lv.themesTotal = getObjLength(lv.allData);
lv.themesNames = [];
lv.themesObjects = [];
lv.objectsTotal = 0;
lv.objectsData = {};
for(lv.l = 0; lv.l < lv.themesTotal; lv.l++){
	lv.themesNames.push(lv.allData[lv.l].name);
	lv.hmo = getObjLength(lv.allData[lv.l].objects);
	lv.themesObjects.push(lv.hmo);
	lv.objectsTotal += lv.hmo;
}
//
//////////////////////////////////////// VIDEO //////////////////////////////////////////////////
//
var vid = document.getElementById("play1");
lv.vidplaying = 0;
//
vid.onwaiting = function() {
	//console.log('vid onw8');
};
vid.onplaying  = function() {
	//console.log('vid onplay');
};
vid.onended = function() {
	//console.log('vid onend');
};
vid.oncanplay = function() {
	//console.log('vid oncanplay');
};
vid.onloadstart = function() {
	//console.log('vid onloadstart');
};
vid.onloadeddata = function() {
	//console.log('vid onloadeddata');
};
vid.onplay = function() {
	//console.log('vid onplay');
};
vid.onpause = function() {
	//console.log('vid onpause');
};
function vidHide(){
	vid.pause();
	$('#vidWrap').css({'top':'-1000px'});
	lv.vidOnScreen = 0;
}
//
lv.vidOnScreen = 0;
function menuOpen(){
	TweenMax.to('#menuWrap', 0.5, {y:'0%', ease:Power3.easeInOut});
	vidHide();
	lv.allowScroll = 0;
}
function menuClose(){
	TweenMax.to('#menuWrap', 0.4, {y:'-100%', ease:Power3.easeIn});
	lv.allowScroll = 1;
}
$('#menuClick').tap(function() {
	menuOpen();
});
$('#menuClose').tap(function() {
	menuClose();
});
//
function colofonOpen(){
	TweenMax.set('#colofonCloser', {opacity:1, x:0});
	TweenMax.set('#colofonTextWrap', {opacity:1, x:0});
	TweenMax.set('#colofonWrap', {opacity:1, 'display':'block'});
	lv.allowScroll = 1;
}
function colofonClose(){
	TweenMax.to('#colofonCloser', 0.4, {opacity:0, x:-10, ease:Power3.easeInOut});
	TweenMax.to('#colofonTextWrap', 0.4, {opacity:0, x:-20, ease:Power3.easeInOut});
	TweenMax.to('#colofonWrap', 0.5, {delay:0.1, opacity:0, 'display':'none', ease:Power3.easeInOut});
	lv.allowScroll = 1;
}
$('#colofonClose').tap(function() {
	colofonClose();
});
//
$('#logoClick').tap(function() {
	showAllThemes();
	$('.menuThemeBtn').parent().css({'color':'rgb(255,255,255)'});
	$('*[data-menu-slug="alle-themas"]').parent().css({'color':'rgb(185,254,111)'});
	menuClose();
});
//
function shareOpen(){
	TweenMax.set('#shareCloser', {delay:0.1, opacity:1, x:0});
	TweenMax.set('#shareTextWrap', {delay:0.1, opacity:1, x:0});
	TweenMax.set('#shareWrap', {delay:0.1, opacity:1, 'display':'block'});
	lv.allowScroll = 0;
}
function shareClose(){
	TweenMax.to('#shareCloser', 0.4, {opacity:0, x:-10, ease:Power3.easeInOut});
	TweenMax.to('#shareTextWrap', 0.4, {opacity:0, x:-20, ease:Power3.easeInOut});
	TweenMax.to('#shareWrap', 0.5, {delay:0.1, opacity:0, 'display':'none', ease:Power3.easeInOut});
	lv.allowScroll = 1;
}
$('#shareClose').tap(function() {
	shareClose();
});
//
lv.mtitle = "De wereld van Kentalis";
$('.shareClick').tap(function() {
	lv.mt = $(this).attr('data-theme-name');
	lv.mi = $(this).attr('data-item-name');
	lv.mti = parseInt($(this).attr('data-theme-id'))-1;
	lv.mii = parseInt($(this).attr('data-item-id'))-1;
	//console.log(lv.mt+' ('+lv.mti+') > '+lv.mi+' ('+lv.mii+')');
	//
	lv.myImg = lv.objectsCustomOrder[lv.mii].poster;
	lv.myTitle = lv.objectsCustomOrder[lv.mii].name;
	$('#shareImg').attr('src',lv.myImg);
	$('#shareItemTitle').html(lv.myTitle);
	//
	lv.furl = baseUrl+'/'+lv.mt+'/'+lv.mi+'/';
	//console.log('s-url: '+lv.furl);
	lv.url_FB = "http://www.facebook.com/sharer/sharer.php?u="+lv.furl+"&title="+lv.mtitle;
	$('#sharing_FB').attr('href',lv.url_FB);
	lv.url_TW = "http://twitter.com/intent/tweet?status="+lv.mtitle+"+"+lv.furl;
	$('#sharing_TW').attr('href',lv.url_TW);
	lv.url_GP = "https://plus.google.com/share?url="+lv.furl;
	$('#sharing_GP').attr('href',lv.url_GP);
	lv.url_LI = 'https://www.linkedin.com/shareArticle?url='+lv.furl+'&title='+lv.mtitle;
	$('#sharing_LI').attr('href',lv.href);
	//
	//
	shareOpen();
});
// 
//
function filterByTheme(){
	$('.contentItemWrap').css({'display':'none'});
	$('.tclass_'+lv.themeNameCur).css({'display':'block'});
	$('#homeDiv').css({'display':'none'});
	$('.textDiv').css({'display':'none'});
	$('#text_'+lv.themeNameCur).css({'display':'block'});
	scrollToTop();
}
//
function showAllThemes(){
	$('.contentItemWrap').css({'display':'block'});
	//
	$('.textDiv').css({'display':'none'});
	$('#homeDiv').css({'display':'block'});
	scrollToTop();
}
//
$('.menuThemeBtn').tap(function() {
	lv.themeIdCur = parseInt($(this).attr('data-menu-id'));
	lv.themeNameCur = $(this).attr('data-menu-slug');
	if(lv.themeNameCur == 'alle-themas'){
		showAllThemes();
	}else{
		filterByTheme();
	}
	//
	menuClose();
	$('.menuThemeBtn').parent().css({'color':'rgb(255,255,255)'});
	$(this).parent().css({'color':'rgb(185,254,111)'});
});
//
lv.signLang = 0;
$('#signLangBtnOn').tap(function() {
	lv.signLang = 1;
	//doSignLang();
	$('#signLangBtnOn').parent().css({'color':'rgb(185,254,111)'});
	$('#signLangBtnOff').parent().css({'color':'rgb(255,255,255)'});
	setVidSrc();
	menuClose();
});
$('#signLangBtnOff').tap(function() {
	lv.signLang = 0;
	//doSignLang();
	$('#signLangBtnOff').parent().css({'color':'rgb(185,254,111)'});
	$('#signLangBtnOn').parent().css({'color':'rgb(255,255,255)'});
	setVidSrc();
	menuClose();
});
$('#colofonBtn').tap(function() {
	menuClose();
	colofonOpen();
});
$('.icontrol').tap(function() {
	vidHide();
	lv.mnr = $(this).attr('data-nr');
	lv.ith = parseInt($(this).parent().find('.infoTxt').height())+20;
	if(lv['infoOpen_'+lv.mnr] == 1){
		lv['infoOpen_'+lv.mnr] = 0;
		//
		lv.mtarg = $(this).parent().parent().find('.contentInfoWrap');
		TweenMax.to(lv.mtarg, 0.5, {height:lv['infoHeight_'+lv.mnr]+'px', ease:Power3.easeInOut});
		lv.mtarg = $(this).parent().parent().find('.contentMoreWrap');
		TweenMax.to(lv.mtarg, 0.3, {opacity:1, 'display':'block', ease:Power3.easeInOut});
		lv.mtarg = $(this).parent().parent().find('.contentLessWrap');
		TweenMax.to(lv.mtarg, 0.3, {opacity:0, 'display':'none', ease:Power3.easeInOut});
		return;
	}
	lv['infoOpen_'+lv.mnr] = 1;
	lv['infoHeight_'+lv.mnr] = parseInt($(this).parent().parent().find('.contentInfoWrap').outerHeight());
	//
	lv.mtarg = $(this).parent().parent().find('.contentInfoWrap');
	TweenMax.to(lv.mtarg, 0.5, {height:lv.ith+'px', ease:Power3.easeInOut});
	lv.mtarg = $(this).parent().parent().find('.contentMoreWrap');
	TweenMax.to(lv.mtarg, 0.3, {opacity:0, 'display':'none', ease:Power3.easeInOut});
	lv.mtarg = $(this).parent().parent().find('.contentLessWrap');
	TweenMax.to(lv.mtarg, 0.3, {opacity:1, 'display':'block', ease:Power3.easeInOut});
	//
	if(lv.useIscroll == 0){
		lv.destY = $('#itemDiv_'+lv.mnr).position().top - $('#headerWrap').height();
		lv.scrollBody.animate({ scrollTop: lv.destY+"px" });
		//TweenMax.to(window, 0.6, {scrollTo:{y:lv.destY}, ease:Power2.easeInOut}); // no go on iphone...
		return;
	}
	//
	refreshIScroll();
	lv.sofs = $('#headerWrap').height();
	lv.divIndex = $('.contentItemWrap').index($(this).parent().parent());
	clearTimeout(lv.toScrollEl);
	if(lv.divIndex == lv.totalItemsVisible) {
		lv.toScrollEl = setTimeout(function(){
			myScroll.scrollToElement('#itemDiv_'+lv.mnr, 200, 0, -lv.sofs, IScroll.utils.ease.quadratic);
		},600)
	}else{
		lv.toScrollEl = setTimeout(function(){
			myScroll.scrollToElement('#itemDiv_'+lv.mnr, 500, 0, -lv.sofs, IScroll.utils.ease.quadratic);
		},100);
	}
	//
});
//
// 
lv.signLang = 0;
function setVidSrc(){
	if(lv.signLang == 1){
		lv.vsrc = 'video_sign-language';
		$('#play1').html('');
	}else{
		lv.vsrc = 'video';
		lv.mySubs = lv.objectsCustomOrder[lv.vidIdCur]['subs_phone'];
		$('#play1').html('<track label="Nederlands" kind="subtitles" srclang="nl" src="'+lv.mySubs+'" default>');
	}
	//console.dir(lv.objectsData);
	lv.myVid = lv.objectsCustomOrder[lv.vidIdCur][lv.vsrc];
	vid.pause();
	vid.setAttribute("src", lv.myVid);
	vid.load();
}
//
lv.vidIdCur = 0;
lv.vidThemeCur = 0;
function playVid(){
	setVidSrc();
	vid.webkitEnterFullscreen();
	vid.play();
}
function reloadVid(){
}
vid.addEventListener("webkitfullscreenchange",function(){
	if(!document.webkitIsFullScreen){
		vid.pause();
	}
}, false);
//
$('.vcontrol').tap(function() {
	//
	lv.mpos = $(this).offset().top;
	lv.mw = $(this).width();
	lv.mh = $(this).height();
	$('#vidWrap').css({'top':lv.mpos+'px','width':lv.mw+'px','height':lv.mh+'px'});
	$('#play1').css({'width':lv.mw+'px','height':lv.mh+'px'});
	lv.vidThemeCur = parseInt($(this).attr('data-theme-id'))-1;
	lv.vidIdCur = parseInt($(this).attr('data-vid'))-1;
	lv.curVidItem = parseInt($(this).attr('data-vid'));
	lv.vidOnScreen = 1;
	playVid();
});
//
//
/* ------------------------------------ prep -------------------------------------------- */
lv.scrollBody = $("html, body");
//
lv.posAr = [];
lv.nrAr = [];
function closest(array,num){
    var i=0;
    var minDiff=1000;
    var ans;
    for(i in array){
         var m=Math.abs(num-array[i]);
         if(m<minDiff){ 
                minDiff=m; 
                ans=array[i]; 
            }
      }
    return ans;
}
$( window ).scroll(function() {
	for(lv.g = 1; lv.g <= lv.objectsTotal; lv.g++){
		lv.posAr[lv.g] =  $('#itemDiv_'+lv.g)[0].getBoundingClientRect().top;
		lv.nrAr[lv.g] = lv.g;
	}
	lv.cdiv = closest(lv.posAr,0);
	lv.a = lv.posAr.indexOf(lv.cdiv);
	//if(lv.nrAr[lv.a] != 1){
		lv.anrpos = lv.nrAr[lv.a];
		//console.log('dees: '+lv.anrpos);
	//}
});
//
TweenMax.set('#menuWrap', {y:'-100%'});
$(window).resize(function(){
	lv.ospy = $('#orientationSpy').css('display');
	if(lv.ospy != lv.lastSpy){
		//console.log('orientation changed');
		setInfoHeight();
		$('.contentLessWrap').css({'display':'none', opacity:0});
		$('.contentMoreWrap').css({'display':'block', opacity:1});
		for(lv.l = 1; lv.l <= lv.objectsTotal; lv.l++){
			lv['infoOpen_'+lv.mnr] = 0;
		}
		checkHeights();
		//
		if(lv.nrAr[lv.a]){
			lv.destY = $('#itemDiv_'+lv.anrpos).position().top - $('#headerWrap').height();
			lv.scrollBody.animate({ scrollTop: lv.destY+"px" },10);
		}
		//
		if(lv.vidOnScreen == 1){
			lv.mpos = $('#itemDiv_'+lv.curVidItem+' .vcontrol').offset().top;
			lv.mw = $('#itemDiv_'+lv.curVidItem+' .vcontrol').width();
			lv.mh = $('#itemDiv_'+lv.curVidItem+' .vcontrol').height();
			$('#vidWrap').css({'top':lv.mpos+'px','width':lv.mw+'px','height':lv.mh+'px'});
			$('#play1').css({'width':lv.mw+'px','height':lv.mh+'px'});
		}
	}
	lv.lastSpy = lv.ospy;
	refreshIScroll();
	TweenMax.set('#menuWrap', {y:'-100%'});
});
$(window).resize();
//
lv.allowScroll = 1;
$('body').on('scroll touchmove mousewheel', function(e){
	if(lv.allowScroll == 1){
		return;
	}
	e.preventDefault();
	e.stopPropagation();
	return false;
})
//
function setInfoHeight(){
	lv.ih = 128;
	$('.contentInfoWrap, .contentInfoImg').css({'height':lv.ih+'px'});
	//
	/*lv.ih = parseInt($('.cimg').height());
	if(lv.ospy == 'none'){
		$('.contentInfoWrap, .contentInfoImg').css({'height':lv.ih+'px'});
	}else{
		lv.ih *= 0.6;
		$('.contentInfoWrap, .contentInfoImg').css({'height':lv.ih+'px'});
	}*/
}
//
function getObjLength(myObj){
	lv.objCount = 0;
	for (lv.i in myObj) {
		if (myObj.hasOwnProperty(lv.i)) {
			lv.objCount++;
		}
	}
	return lv.objCount;
}
//
lv.ih = 128;
function checkHeights(){
	//check info texts heights, disable toggle if smaller than parent
	for(lv.l = 1; lv.l <= lv.objectsTotal; lv.l++){
		lv.mh = $('#ciw_'+lv.l+' .infoTxt').height();
		if(lv.mh <= lv.ih){
			$('#ciw_'+lv.l+' .icontrol').css({'display':'none'});
			$('#ciw_'+lv.l).parent().find('.contentMoreWrap').css({'display':'none'});
		}
	}
}
//
function scrollStart(){
}
function scrollEnd(){
}
//
function uFunc(event) {
	//console.log('pos'+$('body').scrollTop());
	lv.sp = parseInt($('body').scrollTop());
	if(lv.sp > 1){
		TweenMax.ticker.removeEventListener("tick", uFunc);
		if(lv.delayIscroll == 0){
			return;
		}
		console.log('started iScroll');
		lv.useIscroll = 1;
		setupIScroll();
	}
}
TweenMax.ticker.addEventListener("tick", uFunc);
TweenMax.ticker.fps(25);
//
function setupIScroll(){
	myScroll = new IScroll('#scrollDiv', {
		click: true
	});
	myScroll.on('scrollEnd', scrollEnd);
	myScroll.on('scrollStart', scrollStart);
	$('#scrollDiv').addClass('iscrollStyles');
	$('#bodyFiller').css({'height':$('#mainDiv').height()+'px','display':'block'});
	//myScroll.refresh();
}
function refreshIScroll(){
	if(lv.useIscroll == 0){
		return;
	}
	clearTimeout(lv.toIscroll);
	lv.toIscroll = setTimeout(function () {
        myScroll.refresh();
    }, 600);
}
//
function scrollToTop(){
	if(lv.useIscroll == 0){
		lv.destY = 0;
		lv.scrollBody.animate({ scrollTop: lv.destY+"px" });
		return;
	}
	refreshIScroll();
	myScroll.scrollTo(0,0,500, IScroll.utils.ease.quadratic);
}

//Smooth scroll animation on iPhone attempt
/*
var target, scroll;
function smoothScroll(){
	if (typeof document.body.style.transitionProperty === 'string') {
		//e.preventDefault();
		var avail = $(document).height() - $(window).height();
		scroll = 1000;
		if (scroll > avail) {
			scroll = avail;
		}
		$("html").css({
			"margin-top" : ( $(window).scrollTop() - scroll ) + "px",
			"transition" : "1s ease-in-out"
		}).data("transitioning", true);
	} else {
		$("html, body").animate({
			scrollTop: scroll
		}, 1000);
		return;
	}
    $("html").on("transitionend webkitTransitionEnd msTransitionEnd oTransitionEnd", function (e) {
        if (e.target == e.currentTarget && $(this).data("transitioning") === true) {
            $(this).removeAttr("style").data("transitioning", false);
            $("html, body").scrollTop(scroll);
            return;
        }
    });
}
setTimeout(function(){
	smoothScroll();
},2000)
*/
//
function uriEntered(){
	console.log(':: '+uri_theme+' :: '+uri_object);
	lv.checkRoot = uri_theme.indexOf(".php");
	if(lv.checkRoot != -1){
		return;
	}
	lv.checkRoot = uri_theme.indexOf("clients");
	if(lv.checkRoot != -1){
		return;
	}
	//
	if(uri_theme && uri_theme != ''){
		lv.themeNameCur = uri_theme;
		lv.themeIdCur = parseInt($('*[data-menu-slug="'+uri_theme+'"]').attr('data-menu-id'));
		filterByTheme();
		//
		$('.menuThemeBtn').parent().css({'color':'rgb(255,255,255)'});
		$('*[data-menu-slug="'+uri_theme+'"]').parent().css({'color':'rgb(185,254,111)'});
	}
	if(uri_object && uri_object != ''){
		lv.pmse = $('*[data-object-slug="'+uri_object+'"]').clone(true,true);
		$('*[data-object-slug="'+uri_object+'"]').remove();
		$('#contentWrap').prepend(lv.pmse);
	}
}
//
//
/* ---------------------------------- DOM ready ----------------------------------------- */
$(function() {
	//
	function init(){
		/*FastClick.attach(document.body);
		$('#menuClick').addClass('needsclick');*/
		// class="needsclick"
		//
		setInfoHeight();
		checkHeights();
		lv.totalItemsVisible = lv.objectsTotal-1;
		//
		if(lv.useIscroll == 1){
			setupIScroll();
		}
		//
		uriEntered();
		//
		TweenMax.to('#mainHider', 0.5, {'opacity':0, 'display':'none', ease:Power2.easeIn, onComplete:function(){
			$('#mainHider').remove();
		}});
	}
	//
	setTimeout(function(){
		init();
	},300);
});