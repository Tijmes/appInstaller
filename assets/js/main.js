//
var lv = {};
//
function shuffleArray(o){
	for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
	return o;
}
//
lv.isAndroid = false;
//
//////////////////////////////////////// VIDEO //////////////////////////////////////////////////
//
var vid = document.getElementById("play1");
lv.vidplaying = 0;
//
vid.onwaiting = function() {
	showVidLoading();
};
vid.onplaying  = function() {
	hideVidLoading();
};
vid.onended = function() {
	lv.vidplaying = 0;
	resetPlayStates();
	//
	lv.mtarg = '.uiTextBtns, #shareBtnWrap';
	TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
	lv.mtarg = '.controlArrow';
	TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
	//
};
//
function showVidLoading(){
	TweenMax.set('#loadicon', {'display':'block','opacity':1});
}
function hideVidLoading(){
	TweenMax.set('#loadicon', {'display':'none','opacity':0});
}
//
function toggleVid(){
	if(lv.sliderBusy == 1){
		return;
	}
	closeShare();
	hideHomeText();
	if(lv.vidplaying == 0){
		showVidLoading();
		lv.vidplaying = 1;
		vid.play();
		lv.mtarg = $('#sec'+lv.sectionCur).find('.playiconHold');
		TweenMax.fromTo(lv.mtarg, 0.3, {'scale':1, 'opacity':1}, {'scale':1.3, 'opacity':0, ease:Power4.easeInOut});
		lv.mtarg = $('#sec'+lv.sectionCur).find('.posterimg');
		TweenMax.to(lv.mtarg, 0.5, {delay:0.1,'opacity':0, ease:Power2.easeInOut});
		//
		lv.mtarg = $('#sec'+lv.sectionCur).find('.bottomPanelWrap');
		TweenMax.to(lv.mtarg, 0.5, {y:'100%', ease:Power4.easeInOut});
		lv.mtarg = '#controlBtnMoveInnerDown';
		TweenMax.to(lv.mtarg, 0.3, {delay:0.3, y:0, ease:Power4.easeInOut});
		lv.bottomPanelOpen = 0;
		//
		topPanelClose();
		//
		//
		lv.mtarg = '.uiTextBtns, #shareBtnWrap';
		TweenMax.to(lv.mtarg, 0.3, {'opacity':0, 'display':'none'});
		lv.mtarg = '.controlArrow';
		TweenMax.to(lv.mtarg, 0.3, {'opacity':0.5});
		//
		lv.mtarg = '#shareBtnWrap';
		//TweenMax.to(lv.mtarg, 0.3, {'opacity':0, 'display':'none'});
		lv.mtarg = '#progressLineWrap';
		TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
		lv.mtarg = '#subs';
		TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
		lv.mtarg = '#sec'+lv.sectionCur+' .itemNameTitle';
		TweenMax.to(lv.mtarg, 0.3, {'opacity':0});
		//
		lv.mtarg = '#vidWrap';
		TweenMax.to(lv.mtarg, 0.01, {'opacity':1});
		return;
	}
	if(lv.vidplaying == 1){
		hideVidLoading();
		lv.vidplaying = 0;
		vid.pause();
		lv.mtarg = $('#sec'+lv.sectionCur).find('.playiconHold');
		TweenMax.fromTo(lv.mtarg, 0.2, {'scale':1.3, 'opacity':0}, {delay:0.1,'scale':1, 'opacity':1, ease:Power4.easeInOut});
		//
		lv.mtarg = '.uiTextBtns, #shareBtnWrap';
		TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
		lv.mtarg = '.controlArrow';
		TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
		//
		lv.mtarg = '#shareBtnWrap';
		//TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
		lv.mtarg = '#progressLineWrap';
		TweenMax.to(lv.mtarg, 0.3, {'opacity':0});
		lv.mtarg = '#subs';
		TweenMax.to(lv.mtarg, 0.3, {'opacity':0});
		lv.mtarg = '.itemNameTitle';
		TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
		return;
	}
}
function toggleVidFromMenu(){
	if(lv.vidplaying == 1){
		hideVidLoading();
		lv.vidplaying = 0;
		vid.pause();
		lv.mtarg = $('#sec'+lv.sectionCur).find('.playiconHold');
		TweenMax.fromTo(lv.mtarg, 0.2, {'scale':1.3, 'opacity':0}, {delay:0.1,'scale':1, 'opacity':1, ease:Power4.easeInOut});
		//
		lv.mtarg = '.uiTextBtns, #shareBtnWrap';
		TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
		lv.mtarg = '.controlArrow';
		TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
		//
		lv.mtarg = '#shareBtnWrap';
		//TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
		lv.mtarg = '#progressLineWrap';
		TweenMax.to(lv.mtarg, 0.3, {'opacity':0});
		lv.mtarg = '#subs';
		TweenMax.to(lv.mtarg, 0.3, {'opacity':0});
		lv.mtarg = '.itemNameTitle';
		TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
	}
	closeShare();
}
//
$('.vcontrol').click(function() {
	toggleVid();
	return false;
});
//
lv.signLang = 0;
function setVidSrc(mvid, subs){
	hideVidLoading();
	vid.pause();
	vid.setAttribute("src", mvid);
	vid.load();
	Popcorn.destroy(lv.p);
	if(lv.signLang == 0){
		lv.p = Popcorn("#play1").parseSRT(subs);	
	}
}
//
lv.vidSnappable = 0;
vid.oncanplay = function() {
	lv.vidSnappable = 1;
};
vid.onloadstart = function() {
	lv.vidSnappable = 0;
};
/*
vid.addEventListener('loadeddata', vidLoaded);
function vidLoaded() {
}
vid.addEventListener('play', vidplaying);
function vidplaying() {
}
vid.addEventListener('pause', vidpaused);
function vidpaused() {
}
*/
//
function resetPlayStates(){
	hideVidLoading();
	lv.vidplaying = 0;
	vid.pause();
	lv.mtarg = $('.playiconHold');
	TweenMax.to(lv.mtarg, 0.2, {delay:0.1,'scale':1, 'opacity':1, ease:Power4.easeInOut});
	lv.mtarg = $('.posterimg');
	TweenMax.to(lv.mtarg, 0.5, {'opacity':1});
	lv.mtarg = '#vidWrap';
	TweenMax.to(lv.mtarg, 0.01, {delay:0.25,'opacity':0});
	//
	lv.bottomPanelOpen = 0;
	lv.mtarg = '#controlBtnMoveInnerDown';
	TweenMax.to(lv.mtarg, 0.2, {y:0, ease:Power4.easeInOut});
	lv.mtarg = '.bottomPanelWrap';
	TweenMax.to(lv.mtarg, 0.2, {y:'100%', ease:Power4.easeInOut});
}
//			
TweenMax.ticker.addEventListener("tick", updateFunc);
TweenMax.ticker.fps(30);
lv.lastCurTime = 0;
function updateFunc(event) {
	lv.perc = (vid.currentTime / vid.duration) * 100;
	lv.perc2 = Math.round((vid.currentTime / vid.duration) * 100);
	if(lv.vidplaying == 1){
		TweenMax.set('#progressLine', {width:lv.perc+'%'});
		/*
		if(vid.currentTime == lv.lastCurTime){
			showVidLoading();
		}else{
			hideVidLoading();
		}
		lv.lastCurTime = vid.currentTime;
		*/
	}
}
//				
lv.p = Popcorn( "#play1" ).parseSRT("/assets/placehold/srt.srt");	
//
////////////////////////////////////////////////////////////////////////////////////////////////////
lv.bottomPanelOpen = 0;
function toggleBottomPanel(){
	if(lv.sliderBusy == 1){
		return;
	}
	if(lv.topPanelOpen == 1){
		return;
	}
	//
	if(lv.bottomPanelOpen == 0){
		bottomPanelOpen();
		return;
	}
	//
	if(lv.bottomPanelOpen == 1){
		bottomPanelClose();
		return;
	}
	//
}
function bottomPanelOpen(){
	hideHomeText();
	lv.bottomPanelOpen = 1;
	//
	lv.mtarg = $('#blurCanvas'+lv.sectionCur);
	TweenMax.set(lv.mtarg, {'opacity':0, 'display':'none'});
	TweenMax.to(lv.mtarg, 1, {'display':'block', 'opacity':1, ease:Power2.easeInOut});
	vidSnapShot();
	//
	lv.mtarg = $('#sec'+lv.sectionCur).find('.bottomPanelWrap');
	TweenMax.to(lv.mtarg, 0.5, {y:'0%', ease:Power4.easeInOut});
	lv.mtarg = '#controlBtnMoveInnerDown';
	TweenMax.to(lv.mtarg, 0.3, {y:150, ease:Power4.easeInOut});
	//
	hideVidLoading();
	lv.vidplaying = 0;
	vid.pause();
	lv.mtarg = $('.playiconHold');
	TweenMax.to(lv.mtarg, 0.3, {delay:0.15, 'scale':1, 'opacity':1, ease:Power4.easeInOut});
	closeShare();
}
function bottomPanelClose(){
	lv.bottomPanelOpen = 0;
	//
	lv.mtarg = $('#blurCanvas'+lv.sectionCur);
	TweenMax.to(lv.mtarg, 0.3, {'display':'none', 'opacity':0, ease:Power2.easeInOut});
	//
	lv.mtarg = $('#sec'+lv.sectionCur).find('.bottomPanelWrap');
	TweenMax.to(lv.mtarg, 0.5, {y:'100%', ease:Power4.easeInOut});
	lv.mtarg = '#controlBtnMoveInnerDown';
	TweenMax.to(lv.mtarg, 0.3, {delay:0.3, y:0, ease:Power4.easeInOut});
	closeShare();
	lv.mtarg = '.uiTextBtns, #shareBtnWrap';
	TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
	lv.mtarg = '.controlArrow';
	TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
	lv.mtarg = '.itemNameTitle';
	TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
	//
}
//
lv.topPanelOpen = 0;
lv.mtarg = $('#topPanelWrap');
TweenMax.to(lv.mtarg, 0.3, {'display':'none', y:'-100%', ease:Power2.easeInOut});
function toggleTopPanel(){
	if(lv.sliderBusy == 1){
		return;
	}
	if(lv.topPanelOpen == 0){
		topPanelOpen();
		return;
	}
	//
	if(lv.topPanelOpen == 1){
		topPanelClose();
		return;
	}
	//
}
function topPanelOpen(){
	setThemeNav(lv.themeCur);
	bottomPanelClose();
	closeShare();
	hideHomeText();
	//
	lv.topPanelOpen = 1;
	lv.mtarg = $('#topPanelWrap');
	TweenMax.to(lv.mtarg, 0.6, {'display':'block', y:'0%', ease:Power1.easeInOut});
	//
	lv.mtarg = $('#controlBtnMoveInnerUp');
	TweenMax.to(lv.mtarg, 0.3, {y:-200, ease:Power2.easeInOut});
	lv.mtarg = $('#controlBtnMoveInnerDown');
	TweenMax.to(lv.mtarg, 0.3, {y:200, ease:Power2.easeInOut});
	lv.mtarg = $('#controlBtnMoveInnerLeft');
	TweenMax.to(lv.mtarg, 0.3, {x:-200, ease:Power2.easeInOut});
	lv.mtarg = $('#controlBtnMoveInnerRight');
	TweenMax.to(lv.mtarg, 0.3, {x:200, ease:Power2.easeInOut});
	//
	lv.mtarg = $('#controlBtnMoveInnerDown');
	TweenMax.to(lv.mtarg, 0.3, {delay:0.3, y:200, ease:Power2.easeInOut});
	//
	hideVidLoading();
	lv.vidplaying = 0;
	vid.pause();
	lv.mtarg = $('.playiconHold');
	TweenMax.to(lv.mtarg, 0.3, {delay:1, 'scale':1, 'opacity':1, ease:Power4.easeInOut});
	//
	lv.mtarg = $('#topPanelBlurCanvas');
	TweenMax.set(lv.mtarg, {'opacity':0, 'display':'none'});
	TweenMax.to(lv.mtarg, 1.2, {'display':'block', 'opacity':1, ease:Power2.easeInOut});
	vidSnapShotTopPanel();
}
function topPanelClose(){
	setCurTheme();
	closeShare();
	lv.topPanelOpen = 0;
	//
	lv.mtarg = $('#topPanelBlurCanvas');
	TweenMax.to(lv.mtarg, 0.4, {'display':'none', 'opacity':0, ease:Power2.easeInOut});
	//
	lv.mtarg = $('#topPanelWrap');
	TweenMax.to(lv.mtarg, 0.6, {'display':'none', y:'-100%', ease:Power4.easeIn});
	//
	lv.mtarg = $('#controlBtnMoveInnerUp');
	TweenMax.to(lv.mtarg, 0.3, {delay:0.4, y:0, ease:Power2.easeOut});
	lv.mtarg = $('#controlBtnMoveInnerDown');
	TweenMax.to(lv.mtarg, 0.3, {delay:0.4, y:0, ease:Power2.easeOut});
	lv.mtarg = $('#controlBtnMoveInnerLeft');
	TweenMax.to(lv.mtarg, 0.3, {delay:0.4, x:0, ease:Power2.easeOut});
	lv.mtarg = $('#controlBtnMoveInnerRight');
	TweenMax.to(lv.mtarg, 0.3, {delay:0.4, x:0, ease:Power2.easeOut});
	//
	lv.mtarg = '.uiTextBtns, #shareBtnWrap';
	TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
	lv.mtarg = '.controlArrow';
	TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
	lv.mtarg = '.itemNameTitle';
	TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
	//
	lv.mtarg = '#shareBtnWrap';
	//TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
	lv.mtarg = '#progressLineWrap';
	TweenMax.to(lv.mtarg, 0.3, {'opacity':0});
	lv.mtarg = '#subs';
	TweenMax.to(lv.mtarg, 0.3, {'opacity':0});
}
//
$('#clickMoveDown').on('click', function(){
	bottomPanelOpen();
});
$('#clickMoveUp').on('click', function(){
	topPanelOpen();
});
//
$('.bottomPanelClose').on('click', function(){
	bottomPanelClose();
});
//
$('#topPanelClose').on('click', function(){
	topPanelClose();
});
//
//
function vidSnapShot(){
	if(lv.isAndroid){
		return;
	}
	//
	lv.mcanvas =  document.getElementById('blurCanvas'+lv.sectionCur);
	lv.cw = $('#play1').width();
	lv.ch = $('#play1').height();
	lv.mcanvas.width = lv.cw;
	lv.mcanvas.height = lv.ch;	
	//		
	lv.mcontext = lv.mcanvas.getContext('2d');
	//
	if(lv.vidSnappable == 1){
		lv.mcontext.fillRect(0, 0, lv.cw, lv.ch);
		lv.mcontext.drawImage(vid, 0, 6, lv.cw, lv.ch);
		return;
	}
	//
	lv.mbimg = $('#sec'+lv.sectionCur).attr('data-poster');
	lv.bimg = new Image();
	lv.bimg.onload = function(){
		lv.mcontext.drawImage(lv.bimg, 0, 6, lv.cw, lv.ch);
	}
	lv.bimg.src = lv.mbimg;
	//
}
function vidSnapShotTopPanel(){
	if(lv.isAndroid){
		return;
	}
	//
	lv.mcanvas =  document.getElementById('topPanelBlurCanvas');
	lv.cw = $('#play1').width();
	lv.ch = $('#play1').height();
	lv.mcanvas.width = lv.cw;
	lv.mcanvas.height = lv.ch;	
	//		
	lv.mcontext = lv.mcanvas.getContext('2d');
	//
	if(lv.vidSnappable == 1){
		lv.mcontext.fillRect(0, 0, lv.cw, lv.ch);
		lv.mcontext.drawImage(vid, 0, 0, lv.cw, lv.ch);
		return;
	}
	//
	lv.mbimg = $('#sec'+lv.sectionCur).attr('data-poster');
	lv.bimg = new Image();
	lv.bimg.onload = function(){
		lv.mcontext.drawImage(lv.bimg, 0, 0, lv.cw, lv.ch);
	}
	lv.bimg.src = lv.mbimg;
	//
}
//
$('.themeBtnClick').on('mouseenter', function(){
	lv.mtarg = '#themesWrap .playicon';
	TweenMax.to(lv.mtarg, 0.3, {'borderColor':'rgb(255,255,255)'});
	lv.mtarg = $(this).parent().parent().find('.playicon');
	TweenMax.to(lv.mtarg, 0.3, {'borderColor':'rgb(185,254,111)'});
	lv.mtarg = $(this).parent().parent().find('.themeIconText');
	TweenMax.to(lv.mtarg, 0.3, {'color':'rgb(185,254,111)'});
});
$('.themeBtnClick').on('mouseleave', function(){
	lv.mtarg = $(this).parent().parent().find('.playicon');
	TweenMax.to(lv.mtarg, 0.3, {'borderColor':'rgb(255,255,255)'});
	lv.mtarg = $(this).parent().parent().find('.themeIconText');
	TweenMax.to(lv.mtarg, 0.3, {'color':'rgb(255,255,255)'});
	//
	lv.mtarg = '.itemIconActive';
	TweenMax.to(lv.mtarg, 0.3, {'borderColor':'rgb(185,254,111)'});
});
//
lv.debug = 0;
function doDebugMode(){
	lv.debug = 1;
	TweenMax.set('#main', {scale: 0.5, y:'-10%'});
	TweenMax.set('#secHold', {'overflow': 'visible'});
	TweenMax.set('#container', {'overflow': 'visible'});
}
function undoDebugMode(){
	lv.debug = 0;
	TweenMax.set('#main', {scale: 1, y:'0%'});
	TweenMax.set('#secHold', {'overflow': 'hidden'});
	TweenMax.set('#container', {'overflow': 'hidden'});
}
//doDebugMode();
//
////////////////////////////////////////////////////////
lv.allData = jsonObjects;
lv.objectsCustomOrder = jsonObjectsCustomOrder;
//
function logify(msg, style){
	if(style == 1){
		console.log('%c'+msg, 'background: #222; color: #bada55; padding:1px 5px;');
		return;
	}
	console.log(msg);
}
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
lv.logified = 1;
if(lv.logified == 1){
	logify('------------------------------------------------------------------------------------------------------------',0);
	logify('Themes Total:',0);
	logify(lv.themesTotal,1);
	logify('Themes Names:',0);
	logify(lv.themesNames,1);
	logify('Themes Objects Total:',0);
	logify(lv.themesObjects,1);
	logify('Objects Total:',0);
	logify(lv.objectsTotal,1);
	logify('------------------------------------------------------------------------------------------------------------',0);
}
//
//console.log('............. '+ getObjLength(lv.allData[0].objects));
//console.log('............. '+ JSON.stringify(lv.allData[0].objects));
//console.log(JSON.stringify(lv.allData));
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
//
lv.sections = {};
lv.sCnt = 0;
//
lv.objectDataFields = ['name','info','poster','img','video','video_sign-language','subs','url_name'];
// build sections
for(lv.l = 0; lv.l < lv.themesTotal; lv.l++){
	lv.nrObj = getObjLength(lv.allData[lv.l].objects);
	for(lv.l2 = 0; lv.l2 < lv.nrObj; lv.l2++){
		//
		lv.sCnt++;
		lv.sections[lv.sCnt] = 0;
		//
		lv.objectsData[lv.sCnt] = {};
		for(lv.l3 = 0; lv.l3 < lv.objectDataFields.length; lv.l3++){
			lv.objectsData[lv.sCnt][lv.objectDataFields[lv.l3]] = lv.allData[lv.l]['objects'][lv.l2][lv.objectDataFields[lv.l3]];
			lv.objectsData[lv.sCnt]['theme'] = lv.l+1;
		}
		//
	}
}
//
//
$(document).keydown(function(e) {
	switch(e.which) {
		case 39: /*right*/
		slideRight();
		break;
		/**/
		case 37: /*left*/
		slideLeft();
		break;
		/**/
		case 40: /*down*/
		toggleBottomPanel();
		break;din
		/**/
		case 38: /*up*/
		toggleTopPanel();
		break;
		/**/
		case 32: /*spacebar*/
		toggleVid();
		break;
		/**/
		case 13: /*enter*/
		toggleVid();
		break;
		/**/
		default: return;
	}
	hideHomeText();
	e.preventDefault();
});
//
function slideRight(){
	if(lv.topPanelOpen == 1){
		themesNav(lv.themeCur+1);
		return;
	}
	if(lv.sliderBusy == 1){
		//return;
	}
	sectionNav(lv.sectionCur+1);
}
function slideLeft(){
	if(lv.topPanelOpen == 1){
		themesNav(lv.themeCur-1);
		return;
	}
	if(lv.sliderBusy == 1){
		//return;
	}
	sectionNav(lv.sectionCur-1);
}
$('.navclick').on('click', function(){
	lv.mid = $(this).attr('mid');
	if(lv.mid == 'debug'){
		if(lv.debug == 0){
			doDebugMode();
		}else{
			undoDebugMode();
		}
	}else{
		lv.mid = Number($(this).attr('mid'));
		sectionNav(lv.mid);
	}
});
//
$('#clickMoveRight').on('click', function(){
	slideRight();
});
$('#clickMoveLeft').on('click', function(){
	slideLeft();
});
//
lv.sectionsTotal = 0;
lv.sectionsNrArray = [];
for (lv.i in lv.sections) {
	if (lv.sections.hasOwnProperty(lv.i)) {
		lv.sectionsTotal++;
		lv.sectionsNrArray.push(lv.sectionsTotal);
	}
}
lv.secTotalPerc = lv.sectionsTotal*100;
//
lv.sectionCur = 1;
lv.seccnt = 0;
//
lv.subSectionCur = 0;
//
function populateSlides(){
	//
	for(lv.i = 0; lv.i < lv.sectionsTotal; lv.i++){
		lv.slideNr = lv.i+1;
		//
		lv.toolBtn = $('#toolBtn').clone(true, true);
		$('#toolNav').append(lv.toolBtn);
		$('#toolNav').children().last().attr('id', 'toolBtn_'+lv.slideNr).attr('mid',lv.slideNr).html(lv.mnnr);
		//
		lv.mtarg = '#sec'+lv.slideNr;
		lv.mx = 100*(lv.i);
		TweenMax.set(lv.mtarg, {x: lv.mx+'%'});
		lv['xDest_section_'+lv.mnnr] = lv.mx;
		//
	}
	//
	setVidSrc(lv.objectsCustomOrder[0]['video'],lv.objectsCustomOrder[0]['subs']);
	//
	lv.themeCur = 1;
	lv.themeCnt = 0;
	lv.themesTotalPerc = lv.themesTotal*100;
	//
	lv.themeBtnPosIncX = [0,23,23,96,169,169];
	lv.themeBtnPosIncY = [0,-123,23,-50,23,-123];
	lv.themeBtnCnt = 0;
	lv.mainBtnCnt = 0;
	//
	lv.itemCur = 1;
	//
	for(lv.i1 = 0; lv.i1 < lv.themesTotal; lv.i1++){
		//
		lv.themeCnt++;
		lv.themeIndex = (lv.themeCnt-1);
		//
		TweenMax.set('#themeHold_'+lv.themeCnt, {x: (lv.themeIndex*100)+'%'});
		//
		lv.mdata = lv.allData[lv.themeIndex]['info'];
		$('#themeHold_'+lv.themeCnt+' .themeTextPlace').html(lv.mdata);
		//
		lv.themeBtnCnt = 0;
		for(lv.i2 = 0; lv.i2 < lv.themesObjects[lv.themeIndex]; lv.i2++){
			lv.themeBtnCnt++;
			lv.mainBtnCnt++;
			lv.themeBtnID = 'theme'+lv.themeCnt+'_itemBtn'+lv.themeBtnCnt;
			lv.mtarg = $('#'+lv.themeBtnID);
			if(lv.i2 != 0){
				TweenMax.set(lv.mtarg, {x: lv.themeBtnPosIncX[lv.i2]+'%',y:lv.themeBtnPosIncY[lv.i2]+'%'});
			}
		}
		//
		lv.newThemeIcon = $('#themeMiniIcon').clone(true, true);
		$('#themeMiniIconWrap').append(lv.newThemeIcon);
		$('#themeMiniIconWrap').children().last().attr('id', 'themeMiniIcon_'+lv.themeCnt);
		$('#themeMiniIcon_'+lv.themeCnt).find('.themeNavClick').attr('mid',lv.themeCnt);
		//
	}
	$('#themeMiniIcon_'+lv.themeCur+' img').attr('src','/assets/img/page_icon_selected.png').addClass('themeIconActive');
	//
	$('#themeItemBtn').css({'display':'none'});
	$('#themeMiniIcon').css({'display':'none'});
}
populateSlides();
//
//
TweenMax.set('#secWrap', {x:'-0%', y:'-0%'});
lv.navspeed = 1;
lv.navdelay = 0;
lv.navEase = 'Power4.easeInOut';
lv.navOnce = 1;
lv.slideBusy = 0;
function sectionNav(dest){
	clearTimeout(lv.toThemeNavi);
	if(dest > lv.sectionCur){
		if(lv.sectionCur == lv.sectionsTotal){
			return;
		}
	}
	if(dest < lv.sectionCur){
		if(lv.sectionCur == 1){
			return;
		}
	}
	lv.slideBusy = 1;
	lv.vidSnappable = 0;
	closeShare();
	lv.mtarg = '.uiTextBtns, #shareBtnWrap';
	TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
	lv.mtarg = '.controlArrow';
	TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
	//
	lv.sectionXDest = (dest-1)*100;
	TweenMax.to('#secWrap', lv.navspeed, {delay:lv.navdelay, x:'-'+lv.sectionXDest+'%', ease:lv.navEase, onComplete:doneSliding});
	lv.sectionCur = dest;
	startUpdater();
	//
	lv.xposCur = lv.sectionXDest;
	lv.navdelay = 0;
	handleControls();
	if(lv.navOnce == 1){
		lv.navOnce = 0;
		lv.navspeed = 1;
		return;
	}
	hideHomeText();
	Router.setnav();
}
//
function handleControls(){
	resetPlayStates();
	//
	$('#controlBtnMoveLeft').css({'display':'none'});
	if(lv.sectionCur > 1){
		$('#controlBtnMoveLeft').css({'display':'block'});
	}
	$('#controlBtnMoveRight').css({'display':'none'});
	if(lv.sectionCur < lv.sectionsTotal){
		$('#controlBtnMoveRight').css({'display':'block'});
	}
}
handleControls();
//
function spawnSlide(who){
	lv.mstarg = '#sec'+who;
	if ($(lv.mstarg+' .posterimg').css('background-image') == 'none') {
		lv.mposter = $(lv.mstarg).attr('data-poster');
		if(lv.mposter){
			$(lv.mstarg+' .posterimg').css({'background-image':'url("'+lv.mposter+'")'});
		}
	}
	if ($(lv.mstarg+' .iconimg').css('background-image') == 'none') {
		lv.mimg = $(lv.mstarg).attr('data-img');
		lv.mimg2 = $(lv.mstarg).attr('data-img_diamond');
		if(lv.mimg){
			$(lv.mstarg+' .iconimg').css({'background-image':'url("'+lv.mimg2+'")'});
			$(lv.mstarg+' .infoimg').css({'background-image':'url("'+lv.mimg+'")'});
		}
	}
	lv.msid = $(lv.mstarg).attr('data-id');
	if(lv.msid){
		if($(lv.mstarg).css('display') == 'none'){
			TweenMax.set(lv.mstarg, {'display':'block'});
		}
	}
}
//
function showNeeded(targ){
	//
	lv.xpos = $('#secWrap').prop('_gsTransform').xPercent;
	lv.xpos = Math.round(lv.xpos);
	lv.cxpos = (-lv.xpos)/100;
	lv.xpos1 =  Math.round(lv.cxpos)+1;
	lv.xpos2 = lv.xpos1+1;
	lv.xpos3 = lv.xpos1-1;
	//
	//TweenMax.set('.sexion', {'display':'none'});
	//
	if(targ == 'cur'){
		spawnSlide(lv.sectionCur);
		return;
	}
	spawnSlide(lv.xpos1);
	spawnSlide(lv.xpos2);
	spawnSlide(lv.xpos3);
}
//
//
lv.sliderBusy = 0;
function doneSliding(){
	if(lv.signLang == 0){
		lv.vsrc = 'video';
	}else{
		lv.vsrc = 'video_sign-language';
	}
	setVidSrc(lv.objectsCustomOrder[lv.sectionCur-1][lv.vsrc],lv.objectsCustomOrder[lv.sectionCur-1]['subs']);
	/*
	clearTimeout(lv.toHideVid);
	$('#play1').css({'display':'block'});
	*/
	showNeeded('cur');
	stopUpdater();
	lv.lockPanDir = 0;
	lv.slideBusy = 0;
	//
	setCurTheme();
	//
	lv.mtarg = '.uiTextBtns, #shareBtnWrap';
	TweenMax.to(lv.mtarg, 0.2, {'opacity':1, 'display':'block'});
	lv.mtarg = '.controlArrow';
	TweenMax.to(lv.mtarg, 0.2, {'opacity':1});
	lv.mtarg = '.itemNameTitle';
	TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
	//
}
function startUpdater(){
	/*
	// hide vid performance opti try
	lv.toHideVid = setTimeout(function(){
		$('#play1').css({'display':'none'});
	},400);
	*/
	showNeeded('all');
	lv.sliderBusy = 1;
	TweenMax.ticker.removeEventListener("tick", frameUpdate);
	TweenMax.ticker.addEventListener("tick", frameUpdate);
}
function stopUpdater(){
	lv.sliderBusy = 0;
	TweenMax.ticker.removeEventListener("tick", frameUpdate);
}
function frameUpdate(event) {
	showNeeded('all');
}
//
//
lv.limitLDef = 0;
lv.limitRDef = -(lv.secTotalPerc-100);  
lv.limitL = lv.limitLDef;
lv.limitR = lv.limitRDef;
lv.limitT = 0;
lv.limitD = -200;
lv.lockPanDir = 0;	
//
var myElement = document.getElementById('container');
var mc = new Hammer(myElement);
mc.get('pan').set({ direction: Hammer.DIRECTION_ALL });
//
mc.on("panleft panright panup pandown", function(ev) {
	lv.pandir = ev.type;
	//
	if(lv.pandir == 'panleft' || lv.pandir == 'panright'){
		lv.lockPanDir = 1;
	}
	if(lv.pandir == 'panup' || lv.pandir == 'pandown'){
		lv.lockPanDir = 2;
	}
});
mc.on("panstart", function(ev) {
	//
	if(lv.topPanelOpen == 1){
		// themes
		clearTimeout(lv.toEndPanThemes);
		lv.curXperc = $('#themesWrap').prop('_gsTransform').xPercent;
		lv.startXperc = lv.curXperc;
		lv.limitD = 0;
		lv.limitL = lv.limitLDef;
		lv.limitR = -(lv.themesTotalPerc-100);  
		return;
	}
	// slides
	resetPlayStates();
	clearTimeout(lv.toEndPan);
	lv.curXperc = $('#secWrap').prop('_gsTransform').xPercent;
	lv.startXperc = lv.curXperc;
	lv.limitD = 0;
	lv.limitL = lv.limitLDef;
	lv.limitR = lv.limitRDef;
	startUpdater();
	closeShare();
});
mc.on("pan", function(ev) {
	//
	if(lv.topPanelOpen == 1){
		if(lv.lockPanDir == 1){
			lv.posX = ev.deltaX;
			lv.vw = $('#themesHold').width();
			lv.dragMovePerc = (lv.posX/lv.vw)*175;
			//
			lv.moveXperc = $('#themesWrap').prop('_gsTransform').xPercent;
			//
			lv.dragPerc = lv.dragMovePerc+lv.curXperc;
			lv.movePanPerc = lv.dragPerc;
			if(lv.movePanPerc > lv.limitL){
				lv.movePanPerc = lv.limitL + (lv.movePanPerc - lv.limitL) / 6;
				if(lv.movePanPerc > lv.limitL+60){
					lv.movePanPerc = lv.limitL+60;
				}
			}
			if(lv.moveXperc < lv.limitR){
				lv.movePanPerc = lv.limitR+(lv.movePanPerc-lv.limitR)/6;
				if(lv.movePanPerc < lv.limitR-60){
					lv.movePanPerc = lv.limitR-60;
				}
			}
			//
			TweenMax.set('#themesWrap', {xPercent:lv.movePanPerc});
		}
		return;
	}
	//
	//
	if(lv.lockPanDir == 1){
		lv.posX = ev.deltaX;
		lv.vw = $('#secHold').width();
		lv.dragMovePerc = (lv.posX/lv.vw)*175;
		//
		lv.moveXperc = $('#secWrap').prop('_gsTransform').xPercent;
		//
		lv.dragPerc = lv.dragMovePerc+lv.curXperc;
		lv.movePanPerc = lv.dragPerc;
		if(lv.movePanPerc > lv.limitL){
			lv.movePanPerc = lv.limitL + (lv.movePanPerc - lv.limitL) / 6;
			if(lv.movePanPerc > lv.limitL+60){
				lv.movePanPerc = lv.limitL+60;
			}
		}
		if(lv.moveXperc < lv.limitR){
			lv.movePanPerc = lv.limitR+(lv.movePanPerc-lv.limitR)/6;
			if(lv.movePanPerc < lv.limitR-60){
				lv.movePanPerc = lv.limitR-60;
			}
		}
		//
		TweenMax.set('#secWrap', {xPercent:lv.movePanPerc});
	}
	//
});	
mc.on("panend", function(ev) {
	//
	if(lv.topPanelOpen == 1){
		//
		lv.curXperc = $('#themesWrap').prop('_gsTransform').xPercent;
		//
		lv.uVelocity = ev.velocityX;
		if(lv.uVelocity > 2 || lv.uVelocity < -2){
			if(lv.lockPanDir == 1){
				lv.veloDestX = lv.curXperc-(lv.uVelocity*10);
				lv.snappedX = Math.round(lv.veloDestX/100)*100;
				if(lv.snappedX > lv.limitL){
					lv.snappedX = lv.limitL;
				}
				if(lv.snappedX < lv.limitR){
					lv.snappedX = lv.limitR;
				}
				TweenMax.to('#themesWrap', 0.3, {x:lv.snappedX+'%', ease:lv.navEase});
				//
				lv.themesXDest = lv.snappedX;
				lv.themeCur = -((lv.snappedX/100)-1);
			}
		}else{
			lv.panDestX = -((lv.themeCur-1)*100);
			lv.pdir = '';
			if(lv.startXperc > lv.curXperc){
				lv.deltaXdist = lv.startXperc-lv.curXperc;
				lv.pdir = 'l';
			}
			if(lv.startXperc < lv.curXperc){
				lv.deltaXdist = lv.curXperc-lv.startXperc;
				lv.pdir = 'r';
			}
			if(lv.deltaXdist < 0){
				lv.deltaXdist = -lv.deltaXdist;
			}
			//console.log('st '+lv.startXperc+' en '+lv.curXperc+' dir '+lv.pdir);
			//console.log('dist '+lv.deltaXdist+' dir '+lv.pandir);
			lv.tme = 0.3;
			if(lv.deltaXdist > 13){
				if(lv.pdir == 'r'){
					lv.panDestX = lv.panDestX+100;
				}
				if(lv.pdir == 'l'){
					lv.panDestX = lv.panDestX-100;
				}
				hideHomeText();
				lv.tme = (100-lv.deltaXdist)*0.008;
			}
			if(lv.panDestX > lv.limitL){
				lv.panDestX = lv.limitL;
			}
			if(lv.panDestX < lv.limitR){
				lv.panDestX = lv.limitR;
			}
			TweenMax.to('#themesWrap', lv.tme, {x:lv.panDestX+'%', ease:Power2.easeOut});
			//
			//
			lv.themesXDest = lv.panDestX;
			lv.themeCur = -((lv.panDestX/100)-1);
		}
		//
		lv.toEndPanThemes = setTimeout(function(){
			doneThemeSliding();
		},600);
		//
		handleThemeControls();
		return;
	}
	//
	lv.curXperc = $('#secWrap').prop('_gsTransform').xPercent;
	//
	lv.uVelocity = ev.velocityX;
	if(lv.uVelocity > 2 || lv.uVelocity < -2){
		if(lv.lockPanDir == 1){
			lv.veloDestX = lv.curXperc-(lv.uVelocity*10);
			lv.snappedX = Math.round(lv.veloDestX/100)*100;
			if(lv.snappedX > lv.limitL){
				lv.snappedX = lv.limitL;
			}
			if(lv.snappedX < lv.limitR){
				lv.snappedX = lv.limitR;
			}
			TweenMax.to('#secWrap', 0.3, {x:lv.snappedX+'%', ease:lv.navEase});
			//
			lv.sectionXDest = lv.snappedX;
			lv.sectionCur = -((lv.snappedX/100)-1);
			Router.setnav();
		}
	}else{
		lv.panDestX = -((lv.sectionCur-1)*100);
		lv.pdir = '';
		if(lv.startXperc > lv.curXperc){
			lv.deltaXdist = lv.startXperc-lv.curXperc;
			lv.pdir = 'l';
		}
		if(lv.startXperc < lv.curXperc){
			lv.deltaXdist = lv.curXperc-lv.startXperc;
			lv.pdir = 'r';
		}
		if(lv.deltaXdist < 0){
			lv.deltaXdist = -lv.deltaXdist;
		}
		//console.log('st '+lv.startXperc+' en '+lv.curXperc+' dir '+lv.pdir);
		//console.log('dist '+lv.deltaXdist+' dir '+lv.pandir);
		lv.tme = 0.3;
		if(lv.deltaXdist > 13){
			if(lv.pdir == 'r'){
				lv.panDestX = lv.panDestX+100;
			}
			if(lv.pdir == 'l'){
				lv.panDestX = lv.panDestX-100;
			}
			hideHomeText();
			lv.tme = (100-lv.deltaXdist)*0.008;
		}
		if(lv.panDestX > lv.limitL){
			lv.panDestX = lv.limitL;
		}
		if(lv.panDestX < lv.limitR){
			lv.panDestX = lv.limitR;
		}
		TweenMax.to('#secWrap', lv.tme, {x:lv.panDestX+'%', ease:Power2.easeOut});
		//
		lv.sectionXDest = lv.panDestX;
		lv.sectionCur = -((lv.panDestX/100)-1);
		Router.setnav();
	}
	//
	lv.toEndPan = setTimeout(function(){
		doneSliding();
	},600);
	//
	handleControls();
});
//
//
// Themes Slider
TweenMax.set('#themesWrap', {x:'-0%'});
//
function themesNav(dest){
	if(dest > lv.themeCur){
		if(lv.themeCur == lv.themesTotal){
			return;
		}
	}
	if(dest < lv.themeCur){
		if(lv.themeCur == 1){
			return;
		}
	}
	//
	lv.themesXDest = (dest-1)*100;
	TweenMax.to('#themesWrap', lv.navspeed, {delay:lv.navdelay, x:'-'+lv.themesXDest+'%', ease:lv.navEase, onComplete:doneThemeSliding});
	lv.themeCur = dest;
	//
	lv.xposCurThemes = lv.themesXDest;
	handleThemeControls();
}
//
function setThemeNav(welk){
	lv.themeCur = welk;
	lv.themesXDest = (welk-1)*100;
	TweenMax.set('#themesWrap', {x:'-'+lv.themesXDest+'%'});
	handleThemeControls();
}
////
function setCurTheme(){
	lv.themeCur = lv.objectsCustomOrder[lv.sectionCur-1]['themeNr']; 
	lv.itemCur = lv.sectionCur-1; 
	//console.log('theme cur: '+lv.themeCur+' | item cur: '+lv.itemCur);
}
//
function doneThemeSliding(){
}
//
function handleThemeControls(){
	//
	$('#themeNavLeft').css({'display':'none'});
	if(lv.themeCur > 1){
		$('#themeNavLeft').css({'display':'block'});
	}
	$('#themeNavRight').css({'display':'none'});
	if(lv.themeCur < lv.themesTotal){
		$('#themeNavRight').css({'display':'block'});
	}
	//
	lv.objCur = lv.objectsCustomOrder[lv.sectionCur-1]['url_name'];
	console.log('.... '+lv.objCur);
	//
	$('.themeIconActive').attr('src','/assets/img/page_icon.png').removeClass('itemIconActive');
	$('#themesWrap .playicon').css({'border-color':'rgb(255,255,255)'}).removeClass('itemIconActive');
	lv.itemCurID = $("[moid='"+lv.objCur+"']").parent().parent().attr('id');
	$('#'+lv.itemCurID).find('.playicon').css({'border-color':'rgb(185,254,111)'}).addClass('itemIconActive');
	$('#themeMiniIcon_'+lv.themeCur+' img').attr('src','/assets/img/page_icon_selected.png').addClass('themeIconActive');
}
//
function slideRightThemes(){
	themesNav(lv.themeCur+1);
}
function slideLeftThemes(){
	themesNav(lv.themeCur-1);
}
$('#clickThemeNavRight').on('click', function(){
	slideRightThemes();
});
$('#clickThemeNavLeft').on('click', function(){
	slideLeftThemes();
});
$('.themeNavClick').on('click', function(){
	lv.mtid = parseInt($(this).attr('mid'));
	themesNav(lv.mtid);
});
//
$('#fontSizeBtn2').on('click', function(){
	$('#subs').addClass('cuecatchBig');
	$('.themeTextWrap').addClass('themeTextWrapBigFont');
	$('.feelFontSize').addClass('bigFont');
	$('#fontSizeBtn2').parent().css({'color':'rgb(185,254,111)'});
	$('#fontSizeBtn1').parent().css({'color':'rgb(255,255,255)'});
});
$('#fontSizeBtn1').on('click', function(){
	$('#subs').removeClass('cuecatchBig');
	$('.themeTextWrap').removeClass('themeTextWrapBigFont');
	$('.feelFontSize').removeClass('bigFont');
	$('#fontSizeBtn1').parent().css({'color':'rgb(185,254,111)'});
	$('#fontSizeBtn2').parent().css({'color':'rgb(255,255,255)'});
});
//
function doSignLang(){
	if(lv.signLang == lv.signLangLast){
		return;
	}
	if(lv.signLang == 0){
		setVidSrc(lv.objectsCustomOrder[lv.sectionCur-1]['video'],lv.objectsCustomOrder[lv.sectionCur-1]['subs']);
	}else{
		setVidSrc(lv.objectsCustomOrder[lv.sectionCur-1]['video_sign-language'],0);
	}
	lv.signLangLast = lv.signLang;
	//
	clearTimeout(lv.toSignLang);
	lv.toSignLang = setTimeout(function(){
		toggleVidFromMenu();
	},200);
	closeShare();
}
//
$('#signLangBtnOn').on('click', function(){
	lv.signLang = 1;
	doSignLang();
	$('#signLangBtnOn').parent().css({'color':'rgb(185,254,111)'});
	$('#signLangBtnOff').parent().css({'color':'rgb(255,255,255)'});
	topPanelClose();
});
$('#signLangBtnOff').on('click', function(){
	lv.signLang = 0;
	doSignLang();
	$('#signLangBtnOff').parent().css({'color':'rgb(185,254,111)'});
	$('#signLangBtnOn').parent().css({'color':'rgb(255,255,255)'});
	topPanelClose();
});
//
lv.colofonOpen = 0;
function colofonClose(){
	if(lv.colofonOpen == 0){
		return;
	}
	lv.colofonOpen = 0;
	TweenMax.fromTo('#colofonHold', 0.3, {scale:1, 'opacity':1}, { scale:0.9, 'opacity':0, ease:Power3.easeInOut});
	TweenMax.fromTo('#colofonWrap', 0.5, {'display':'block','opacity':1}, {delay:0.1, 'display':'none','opacity':0, ease:Power3.easeInOut});
}
$('#colofonBtn').on('click', function(){
	if(lv.colofonOpen == 1){
		return;
	}
	lv.colofonOpen = 1;
	TweenMax.fromTo('#colofonWrap', 0.5, {'display':'none','opacity':0}, {'display':'block','opacity':1, ease:Power3.easeInOut});
	TweenMax.fromTo('#colofonHold', 0.5, {scale:1.2, 'opacity':0}, {delay:0.1, scale:1, 'opacity':1, ease:Power3.easeInOut});
	TweenMax.fromTo('#colofonText', 0.2, {y:20, 'opacity':0}, {delay:0.3, y:0, 'opacity':1, ease:Power3.easeInOut});
	toggleVidFromMenu();
	hideHomeText();
});
$('#colofonClose').on('click', function(){
	colofonClose();
});
//
function setSharing(){
	lv.shareUrl = baseUrl+'/'+lv.objectsCustomOrder[lv.sectionCur-1]['url_name']+'/'+lv.objectsCustomOrder[lv.sectionCur-1]['url_name'];
	lv.shareTitle = lv.objectsCustomOrder[lv.sectionCur-1]['name'];
	console.log('theme cur: '+lv.themeCur+' | item cur: '+lv.itemCur, lv.shareUrl, lv.shareTitle);
	//
	lv.sharePoster = lv.objectsCustomOrder[lv.sectionCur-1]['poster'];
	$('#shareImg').attr('src',lv.sharePoster);
	$('#shareItemTitle').html(lv.shareTitle);
	//
	lv.href = 'http://www.facebook.com/sharer/sharer.php?u='+lv.shareUrl+'&title='+lv.shareTitle;
	$('#sharing_FB').attr('href',lv.href);
	lv.href = 'http://twitter.com/intent/tweet?status='+lv.shareTitle+'+'+lv.shareUrl;
	$('#sharing_TW').attr('href',lv.href);
	lv.href = 'https://plus.google.com/share?url='+lv.shareUrl;
	$('#sharing_GP').attr('href',lv.href);
	lv.href = 'https://www.linkedin.com/shareArticle?url='+lv.shareUrl+'&title='+lv.shareTitle;
	$('#sharing_LI').attr('href',lv.href);
}
//
lv.sharingOpen = 0;
$('#sharingBtn').on('click', function(){
	if(lv.slideBusy === 1){
		return;
	}
	lv.sharingOpen = 1;
	TweenMax.fromTo('#sharingWrap', 0.5, {'display':'none','opacity':0}, {'display':'block','opacity':1, ease:Power3.easeInOut});
	TweenMax.fromTo('#sharingHold', 0.5, {scale:1.2, 'opacity':0}, {delay:0.1, scale:1, 'opacity':1, ease:Power3.easeInOut});
	TweenMax.fromTo('#shareTextWrap', 0.3, {y:20, 'opacity':0}, {delay:0.3, y:0, 'opacity':1, ease:Power3.easeInOut});
	toggleVidFromMenu();
	hideHomeText();
	//
	setSharing();
	//
});
$('#sharingClose').on('click', function(){
	closeSharing();
});
function closeSharing(){
	if(lv.sharingOpen == 0){
		return;
	}
	TweenMax.fromTo('#sharingHold', 0.3, {scale:1, 'opacity':1}, { scale:0.9, 'opacity':0, ease:Power3.easeInOut});
	TweenMax.fromTo('#sharingWrap', 0.5, {'display':'block','opacity':1}, {delay:0.1, 'display':'none','opacity':0, ease:Power3.easeInOut});
	lv.sharingOpen = 0;
}
//
lv.shareOpen = 0;
TweenMax.set('#shareIconsWrap', {x:'40%', 'opacity':0, 'display':'none'});
$('#shareBtn').on('click', function(){
	if(lv.shareOpen == 0){
		lv.shareOpen = 1;
		TweenMax.to('#shareBtnWrap', 0.4, {x:-65, ease:Power3.easeInOut});
		TweenMax.to('#shareIconsWrap', 0.4, {x:'0%', 'opacity':1, 'display':'block', ease:Power3.easeInOut});
		return;
	}
	closeShare();
});
function closeShare(){
	if(lv.shareOpen == 1){
		lv.shareOpen = 0;
		TweenMax.to('#shareBtnWrap', 0.4, {x:0, ease:Power3.easeInOut});
		TweenMax.to('#shareIconsWrap', 0.4, {x:'40%', 'opacity':0, 'display':'none', ease:Power3.easeInOut});
		return;
	}
}
function PopupCenter(url, title, w, h) {
	var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
	var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;
	width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
	height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;
	var left = ((width / 2) - (w / 2)) + dualScreenLeft;
	var top = ((height / 2) - (h / 2)) + dualScreenTop;
	var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
	if (window.focus) {
		newWindow.focus();
	}
}				
$('.sharer').on('click', function(){
	lv.mlink = $(this).attr('href');
	PopupCenter(lv.mlink,'share','600','445'); 
	return false;
});
//
$('#logoClick').on('click', function(){
	colofonClose();
	closeSharing();
	topPanelClose();
	sectionNav(1);
	showHomeText();
	return false;
});
//
lv.homeTextDone = 0;
function hideHomeText(){
	if(lv.homeTextDone == 1){
		return;
	}
	lv.homeTextDone = 1;
	TweenMax.to('#homeTextWrap', 0.8, {'opacity':0, 'display':'none', ease:Power3.easeOut});
}
function showHomeText(){
	lv.homeTextDone = 0;
	TweenMax.to('#homeTextWrap', 0.8, {delay:1,'opacity':1, 'display':'block', ease:Power3.easeOut});
}
/*
$(document).on('touchstart mousedown', function(){
	hideHomeText();
});
*/
//
//
lv.mywidth = 1600; lv.myheight = 900;
$(window).resize(function(){
	lv.ww = $(window).width();
	lv.wh = $(window).height();
	lv.nsw = lv.ww/lv.mywidth;
	lv.nsh = lv.wh/lv.myheight;
	if(lv.nsw <= lv.nsh){
		lv.ns = lv.nsw;
	}else{
		lv.ns = lv.nsh;
	}
	//lv.nsw <= lv.nsh ? (lv.nsw = lv.nsh) : (lv.nsh = lv.nsw);
	if(lv.ns > 1){
		lv.ns = 1;
	}
	TweenMax.set('#container', {'scale':lv.ns});
});
$(window).resize();
//
//
/* ---------------------------------- Backbone history ---------------------------------- */
var current_uri = 'none';
var Router = Backbone.Router.extend({
	initialize: function(){
		var self = this;
		$(".internal").on('click', function(e){
			e.preventDefault();
			e.stopPropagation();
			var location = $(this).attr('href');
			self.navigate(location, {trigger: true});
		});
		$(".themeBtnClick").on('click', function(e){
			e.preventDefault();
			e.stopPropagation();
			//
			$('.itemIconActive').removeClass('itemIconActive');
			$(this).parent().parent().find('.playicon').addClass('itemIconActive');
			topPanelClose();
			lv.location = $(this).attr('href');
			lv.toThemeNavi = setTimeout(function(){
				self.navigate(lv.location, {trigger: true});
			},600);
			//
		});
	},
	routes: {
		'*path': 'root',
	},
	root: function() {
		var uri = Backbone.history.fragment;
		if(uri != "" && uri != current_uri) {
			current_uri = uri;
			var fragments = uri.split("/");
			var theme_uri = fragments[0];
			var object_uri = fragments[1];
			setPage(theme_uri, object_uri);
			return;
		}
		// initial page
		/*
		if(!uri || uri == ''){
			lv.initTheme = lv.allData[0]['url_name'];
			lv.initObj = lv.allData[0]['objects'][0]['url_name'];
			current_uri = lv.initTheme+'/'+lv.initObj;
			theme_uri = lv.initTheme;
			object_uri = lv.initObj;
			setPage(theme_uri, object_uri);
		}
		*/
	},
	setnav: function() {
		return;
		lv.self = this;
		lv.moname = $('div[data-id="'+lv.sectionCur+'"]').attr('data-slug');
		lv.mtname = $('div[data-id="'+lv.sectionCur+'"]').attr('data-tslug');
		current_uri = lv.mtname+'/'+lv.moname;
		theme_uri = lv.mtname;
		object_uri = lv.moname;
		lv.self.navigate(current_uri, {trigger: false});
	}
});
//
function setPage(theme_uri, object_uri) {
	//console.log('theme uri: '+theme_uri+' object uri: '+object_uri);
	//
	//go theme page
	if(!object_uri || object_uri == ''){
		if(theme_uri && theme_uri != ''){
			lv.mdiv = $('div[data-theme-slug="'+theme_uri+'"]').attr('data-theme-id');
			lv.mdiv = parseInt(lv.mdiv);
			if(!lv.mdiv){
				console.log('cant use that link');
				return;
			}
			lv.themeCur = lv.mdiv;
			topPanelOpen();
			hideHomeText();
			return;
		}
	}
	//go object page
	lv.mdiv = $('div[data-slug="'+object_uri+'"]').attr('data-id');
	lv.mdiv = parseInt(lv.mdiv);
	if(!lv.mdiv){
		console.log('cant use that link');
		return;
	}
	topPanelClose();
	colofonClose();
	sectionNav(lv.mdiv);
}	
/* ---------------------------------- DOM ready ----------------------------------------- */
$(function() {
	//
	Router = new Router;
	Backbone.history.start({
		pushState: true,
		silent: false
	});
	//
	FastClick.attach(document.body);
	TweenMax.set('.diamond', {rotation:45});
	TweenMax.set('.diamondInner', {rotation:-45});
	TweenMax.set('.bottomPanelWrap', {y:'100%'});
	//
	//$('#showDebugInfo').html(navigator.userAgent).css({'display':'table-cell'});
	lv.ua = navigator.userAgent.toLowerCase();
	lv.isAndroid = lv.ua.indexOf("android") > -1;
	//
	lv.loadAssets = [];
	for(lv.i = 0; lv.i < lv.objectsTotal; lv.i++){
		lv.loadObj = {};
		lv.loadObj['src'] = lv.objectsData[lv.i+1]['poster'];
		lv.loadAssets.push(lv.loadObj);
		lv.loadObj = {};
		lv.loadObj['src'] = lv.objectsData[lv.i+1]['img'];
		lv.loadAssets.push(lv.loadObj);
	}
	//
	var queue = new createjs.LoadQueue();
	queue.on("complete", handleComplete, this);
	queue.loadManifest(lv.loadAssets);
	function handleComplete() {
		//console.log('imgs loaded!');
	}
	//
	showNeeded('cur');
	setCurTheme();
	handleThemeControls();
	//
	function init(){
		lv.navActive = $('div[data-id="1"]').attr('data-slug');
		TweenMax.to('#mainHider', 0.5, {'opacity':0, 'display':'none', ease:Power2.easeIn, onComplete:function(){
			$('#mainHider').remove();
			$('#divTemplates').remove();
		}});
		TweenMax.set('#play1', {'opacity':1});
		//$('.sexion').css({'display':'block'});
		$('#homeTextWrap').css({'display':'block'});
	}
	//
	setTimeout(function(){
		init();
	},300);
});
