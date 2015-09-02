var selected = [];
var filters = {};
var filter_count = 0;
var filter_label_Leeftijd_van = "";
var filter_label_Leeftijd_tot = "";
var filter_label_Lengte_van = "";
var filter_label_Lengte_tot = "";
var filter_input_timer;
var scroll_wait = false;
var scroll_to_model = 0;
var search_ended = false;
var dfd_counter = 0;
//var filter_Confectie = [];

$(function() {
	Router = new Router;
	Backbone.history.start({
		pushState: true,
		silent: false
	});

    $(window).scroll(function(){
    	fixNav();
    });
    
    // if($(document).height() < $(window).height()){
    // 	$('footer').addClass('fixed');
    // }

 	$(document).keyup(function(e){
		if (e.keyCode == 27) {
			//hideAutoCompletes();
		}   
	});

	if($("body").hasClass('home')) {
		//doSearch().then(function(){
			//scrollPageTo();
		//});
	}

 	initStuff();
});

function initStuff(){
	var $window = $(window), $document = $(document);
	var cookie = '';
	$.get('/cookie/getcookie', function(data) {
		cookie = data;
		if(cookie != ''){
			selected = JSON.parse(cookie);
			initSelected();
			initModels();
			setSelectedNav();
			fixNav();
		} else {
			setCookie();
		}
	});
	$(".search")
	.find(".filter").on('mouseenter', function(){
		$(this).find('.choices').stop().slideDown();
		$(this).stop().addClass('active');
	}).on('mouseleave', function(){
		$(this).removeClass('active');
		$(this).find('.choices').hide();
	}).end()
	.find(".show-extra").on('click', function(e){
		e.preventDefault();
		$(".search-extra").stop().slideDown();
		$(this).hide();
	}).end()
	.find(".close-extra").on('click', function(e){
		e.preventDefault();
		$(".search-extra").stop().slideUp(function(){
			$(".show-extra").show();
		});
	}).end()
	.find('.choice:not(input)').on('click', function(e){
		if(! $(this).hasClass('choice-clothing')) {
			$goon = true;
			if($(this).hasClass('filter-label') && ! $(this).hasClass('active')) {
				$goon = false;
			}
			if($goon) {
				e.preventDefault();
				var filters_to_set = [];
				var self = e.currentTarget,
					type = $(self).data('type'),
					value = $(self).data('value');
				if(type == 'Specialiteit') {
					filters_to_set.push({type: 'Klasse', value: ''});
				}
				if(type == 'Klasse') {
					filters_to_set.push({type: 'Specialiteit', value: ''});
				}
				if(type == 'Confectie' && $(this).hasClass('confectie-label')) {
					filters_to_set.push({type: 'Geslacht', value: ''});
					filters_to_set.push({type: 'Leeftijd-van', value: ''});
					filters_to_set.push({type: 'Leeftijd-tot', value: ''});
				}
				filters_to_set.push({type: type, value: value});
				setFilter(filters_to_set);				
			}
		}
	}).end()
	.find('input.choice[type="text"]').on('keyup', function(e){
		var self = e.currentTarget,
			type = $(self).data('type'),
			value = $(self).val();
		clearTimeout(filter_input_timer);
		filter_input_timer = setTimeout(function(){
			setFilter([{type:type, value:value}]);
		}, 1000);

	}).end()
	.find('input.choice[type="checkbox"]').on('change', function(e){
		var self = e.currentTarget, 
		type = $(self).data('type'),
		value = $('[data-type="'+type+'"]:checked').map(function(){return $(this).data('value');}).get();
		var filters_to_set = [];
		if(type == 'Confectie') {
			console.log(value[0]);
			if(value[0].substr(0,1) == "k") {
				filters_to_set.push({type: 'Leeftijd-tot', value: '13'});
			}
			if(value[0].substr(0,1) == "h") {
				filters_to_set.push({type: 'Geslacht', value: 'Man'});
				filters_to_set.push({type: 'Leeftijd-van', value: '13'});
			}
			if(value[0].substr(0,1) == "d") {
				filters_to_set.push({type: 'Geslacht', value: 'Vrouw'});
				filters_to_set.push({type: 'Leeftijd-van', value: '13'});
			}
			filters_to_set.push({type:type, value:value.join()});
		}
		setFilter(filters_to_set);	
	});


	// inifinte scroll
	if($("body").hasClass('home')) {
		$window.on('scroll', function(e){
			// redesign
			var scroll_top = $window.scrollTop();
			var near_bottom_margin = 100;
			var near_bottom_check = (scroll_top + $window.height() > $document.height() - near_bottom_margin);
			if(near_bottom_check && ! scroll_wait) {
				scroll_wait = true;
				if(! search_ended) {
					$(".loader").show();
					doSearch('auto',20);
				}
			}
		});		
		//$window.triggerHandler('scroll');
	}

	$(".model-image.lazy").lazyload({
		effect : "fadeIn",
		effectspeed: 900 
	});

	$(".dot").on('click', function(e){
		e.preventDefault();
		$(window).scrollTop($(window).scrollTop()+1);		
		$(".dot").removeClass('active');
		if($(this).hasClass('first')) {
			$(".dot.first").addClass('active');
		}
		else {
			$(".dot.second").addClass('active');			
		}
		if($(this).hasClass('second')) {
			$(".first-slide").hide();
			$(".second-slide").show();
		}
		else {
			$(".first-slide").show();
			$(".second-slide").hide();			
		}
	});
}

function getCurrentFilter(){
	resetResult();
	var dfd = new jQuery.Deferred();
	if(document.location.search != "") {
		var values = document.location.search.substr(1).split('&');
		var last_value = values[values.length - 1].split('=')[0];
		$.each(values ,function(c,q){
			var i = q.split('=');
			var label = i[0].toString();
			var value = decodeURIComponent(i[1].toString());
			setResult(label, value).then(function(data){
				if(data == last_value) {
					dfd.resolve(data);
				}
			});
			if(i[1]) filters[label] = value;
		});
	}
	else {
		deActivateFilters();
	}
	return dfd.promise();
}

function resetResult(){
	$(".choice-clothing").prop('disabled', false);
	$(".choice-clothing").prop('checked', false);
	$("#Leeftijd-van").val('');
	$("#Leeftijd-tot").val('');
	$("#Lengte-van").val('');
	$("#Lengte-tot").val('');
	$("#free-search").val('');
	filter_label_Leeftijd_van = "";
	filter_label_Leeftijd_tot = "";
	filter_label_Lengte_van = "";
	filter_label_Lengte_tot = "";

	$(".filter-label").each(function(){
		$(this).addClass('deactivate');
	});
}

function setResult(label, value){
	var dfd = new jQuery.Deferred();
	var return_label = label;
	if(label == "Specialiteit" || label == "Klasse") {
		label = "Categorie";
	}
	if(label == "q") {
		$("#free-search").val(value);
	}
	if(label == "Leeftijd-van") {
		$("#Leeftijd-van").val(value);
		filter_label_Leeftijd_van = value
		value = "Leeftijd";
		label = "Leeftijd";
	}
	if(label == "Leeftijd-tot") {
		$("#Leeftijd-tot").val(value);
		filter_label_Leeftijd_tot = value
		value = "Leeftijd";
		label = "Leeftijd";
	}
	if(label == "Lengte-van") {
		$("#Lengte-van").val(value);
		filter_label_Lengte_van = value
		value = "Lengte";
		label = "Lengte";
	}
	if(label == "Lengte-tot") {
		$("#Lengte-tot").val(value);
		filter_label_Lengte_tot = value
		value = "Lengte";
		label = "Lengte";
	}
	if(value == "SPECIAL") {
		value = "People";
	}
	if(value == "SPEC.PLUS") {
		value = "Models";
	}
	if(label == "Confectie") {
		setClothing(value);
		value = "Confectie";
	}

	$.post('/actions/translate_filter_value', {term: value}, function(data) {
		var selected_label = $("#label-"+label);
		if(selected_label.hasClass('close-on-select')) {
			selected_label.parent().find(".choices").hide();
		}
		selected_label.html(data);
		selected_label.addClass('active');
		selected_label.removeClass('deactivate');
		dfd.resolve(return_label);
	});
	return dfd.promise();

}

function deActivateFilters(){

	$(".filter-label").each(function(){
		if($(this).hasClass('deactivate')) {
			var label = $(this).data('label');
			$(this).html(label);
			$(this).removeClass('active');
			$(this).parent().removeClass('active');
			$(this).parent().find('.choices').stop().hide();
		}
	});
}


function setClothing(value) {
	var values = value;
	values = values.split(",");
	$(".choice-clothing").prop('disabled', true);
	$.each(values, function(e,v){
		$(".choice-clothing-"+v.substr(0,1)).prop('disabled', false);
		$("#Confectie-"+v).prop('checked', true);
	});
}

function setFilter(filters_to_set) {
	$.each(filters_to_set, function(index, val) {
		var type = val.type;
		var value = val.value;
		if(value) {
			filters[type] = value
		}
		else if(filters[type]) {
			delete filters[type];
		}
		else if(type == "Leeftijd") {
			delete filters["Leeftijd-van"];
			delete filters["Leeftijd-tot"];
		}
		else if(type == "Lengte") {
			delete filters["Lengte-van"];
			delete filters["Lengte-tot"];
		}
		else if(type == "Categorie") {
			delete filters["Klasse"];
			delete filters["Specialiteit"];
		}
		if(index == filters_to_set.length-1) {
			navigateTo();
		}
	});
}

function navigateTo(){
	var fragment = Backbone.history.getFragment($(this).attr('href'));
    if (Backbone.history.fragment == fragment) { 
        Backbone.history.fragment = null;
    }
    if (Backbone.history.fragment == "?" || $.param(filters).length == 0) { 
		Router.navigate('/', {trigger: true});
    }
    else {
		Router.navigate('/?'+$.param(filters), {trigger: true});    	
    }
	$('html, body').stop().animate({scrollTop : 0}, 300);
	$(".lazy").fadeOut();
}

function removeSelected(model) {
	var i = selected.indexOf(model);

	if(i != -1) {
		selected.splice(i, 1);
		setCookie();
		setSelectedNav();
	}
}


function addSelected(model) {
	var i = selected.indexOf(model);
	if(i == -1) {
		selected.push(model);
		setCookie();
		setSelectedNav();
	}
}

function removeProposalSelected(rule_id) {
	$(".proposal-add-remark").slideUp();
	$.post('/voorstel/save_selected', {rule_id:rule_id, selected:0}, function(data) {});
}

function addProposalSelected(rule_id) {
	$(".proposal-add-remark").slideDown();
	$.post('/voorstel/save_selected', {rule_id:rule_id, selected:1}, function(data) {});
}

function fixNav(){
	if ($(window).scrollTop() > 130) {
		$("body").addClass('fixed');
	}
	else {
		$("body").removeClass('fixed');
	}
}

function setSelectedNav() {
	if(selected.length > 0) {
		$(".no-selected-models").stop().hide();
		$(".selected-models").stop().show();
		$(".noof-models").html(selected.length);
		if(selected.length == 1 && ($(".selected-models-label").html() == 'models' || $(".selected-models-label").html() == 'modellen')) {
			$(".selected-models-label").html('model');
		}
		else {
			$(".selected-models-label").html($(".selected-models-label").data('label'));
		}
	}
	else {
		$(".no-selected-models").stop().show();
		$(".selected-models").stop().hide();		
	}
}

function initSelected(){
	$.each(selected, function(index, val) {
		$("."+val).addClass('active');
	});
	changeSelectedLabel();
}

function initModels(){
	$(".model .footer, .add-to-selection").unbind().on('click', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		if($(this).hasClass('active')) {
			if($(this).hasClass('footer-selection')) {
				if(! $.cookie('hide_remove_selection')) {
					showWarningSelectionRemove(id);
				}
				else {
					$(".model-"+id).fadeOut();
					removeSelected(id);
					if($(this).hasClass('proposal-select')){
						removeProposalSelected($(this).data('rule-id'));					
					}
				}
			}
			else {
				$(this).removeClass('active');
				removeSelected(id);
				if($(this).hasClass('proposal-select')){
					removeProposalSelected($(this).data('rule-id'));					
				}
			}
		} 
		else {
			$(this).addClass('active');
			$(".selection").addClass('highlight');
			setTimeout(function(){
				$(".selection").removeClass('highlight');
			}, 1000);
			addSelected(id);
			if($(this).hasClass('proposal-select')){
				addProposalSelected($(this).data('rule-id'));					
			}

			$(".proposal-add-remark").slideDown();
		}
		changeSelectedLabel();
	});
}

function changeSelectedLabel(){
	var remove_label = $(".add-to-selection").data('remove-label');
	var add_label = $(".add-to-selection").data('add-label');
	if($(".add-to-selection").hasClass('active')) {
		$(".add-to-selection").html(remove_label);
	}
	else {
		$(".add-to-selection").html(add_label);		
	}
}

function setCookie(){
	$.post('/cookie/setcookie', {selected: JSON.stringify(selected)}, function(data) {
		if(selected.length == 0 && window.location.pathname == "/selectie") {
			document.location.href = "/selectie";
		}		
		if(selected.length == 0 && window.location.pathname == "/voorstel/selectie") {
			document.location.href = "/voorstel/selectie";
		}		
	});
}

function doSearch(skip, take) {
	var dfd = new jQuery.Deferred();
	if(skip == 0) {
		search_ended = false;
		getCurrentFilter().then(function(){
			deActivateFilters();
		});
		$(".models").hide();
		$(".loader").show();
	}
	if(skip == undefined) {
		skip = 0;
	}
	else if(skip == 'auto') {
		skip = $(".model").length;
	}
	if(take == undefined) take = 20;
	$(".loader").show();
	$.post('/search/'+skip+'/'+take, filters, function(data) {
		if(skip == 0){
			$(".models").html($(data).html());
		} else if($(data).html() != "") {
			$(".models").append($(data).html());
		}
		$(".loader").hide();
		localStorage.setItem('models', $(".models").clone().html());
		scroll_wait = false;
		$(".models").fadeIn();
		$("img.lazy:eq("+skip+")").lazyload({
			effect : "fadeIn",
			effectspeed: 900 
		});
		$("img.lazy:gt("+skip+")").lazyload({
			effect : "fadeIn",
			effectspeed: 900 
		});
		initSelected();
		initModels();
		if(skip >= $(".found-count").data('found')) {
			search_ended = true;
			$('footer.hide').slideDown();
		}
		dfd.resolve(data);
	});
	return dfd.promise();
}

function scrollToModel(skip) {
	var models = localStorage.getItem('models');
	$(".models").html(models);
	initModels();
	scrollPageTo(skip);
	$("img.lazy").hide();
	$("img.lazy").lazyload();
	$("img.lazy").fadeIn(1200, function(){
		$("img.lazy").css({'opacity':1});
	});
	$("body").removeClass('find_model');
}

function scrollPageTo(skip){
	if($(".skip"+skip).length > 0) {
		var top = $(".skip"+skip).offset().top - 235;
		$('html, body').scrollTop(top);
		skip = 0;
		$(".models").fadeIn();
		$(".loader").hide();
	}
}

