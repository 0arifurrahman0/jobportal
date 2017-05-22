$(function(){

	// ajax preloader
	$body = $("body");

	$(document).on({
	    ajaxStart: function() { $body.addClass("loading"); },
	    ajaxStop: function() { $body.removeClass("loading"); }    
	});

	// Bootstrap Carousel
	$('.carousel').carousel({

		interval: 2000

	});

	// Bootstrap Collapse Plus Minus Iocn Change
	function toggleIcon(e) {
		$(e.target)
		.prev('.panel-heading')
		.find(".icon-toggle")
		.toggleClass('fa-plus-square fa-minus-square');
	}

	$('.panel-group').on('hidden.bs.collapse', toggleIcon);
	$('.panel-group').on('shown.bs.collapse', toggleIcon);




});

// seeker personal edit form show
$('#personal-edit').click(function(e){

	var body = $('body');

	body.find('.personal-body').hide();

	$.ajax({
		method:'GET',
		url: '/seeker/personal',
		cache: false
	}).done(function(res){
		$('#get-se-personal').append(res);
	});

});

// seeker career edit form show
$('#se-career-edit').click(function(e){

	var body = $('body');

	body.find('.se-career-body').hide();

	$.ajax({
		method:'GET',
		url: '/seeker/career',
		cache: false
	}).done(function(res){
		$('#get-se-career').append(res);
	});

});

// seeker preferred edit form show
$('#se-preferred-edit').click(function(e){

	var body = $('body');

	body.find('.se-preferred-body').hide();

	$.ajax({
		method:'GET',
		url: '/seeker/preferred',
		cache: false
	}).done(function(res){
		$('#get-se-preferred').append(res);
	});

});

/*
* Upload avatar
*/	
$('#upload-avatar').on('submit', function(e){
			
	e.preventDefault(e);
	
	var method = $(this).attr('method');
	
	var url = $(this).attr('action');
	
	var data =  new FormData(this);
	
	$.ajax({
		
		method: method,
		url: url,
		data: data,
		contentType: false,
		processData: false,
		mimeType: 'multipart/form-data',
		dataType: 'json',
		cache: false
		
	}).done(function(res){

		$('#avatar-report').html(res.success);

		window.setTimeout(function(){location.reload()},500);

	}).fail(function(res){
		
		if( res.status === 422 ) {

		$errors = res.responseJSON;

		errorsHtml = '<div class="alert alert-danger"><ol>';

		$.each( $errors, function( key, value ) {
			errorsHtml += '<li>' + value[0] + '</li>'; 
		});
		errorsHtml += '</ol></div>';
			
		$( '#avatar-report' ).html( errorsHtml );
		}
		
	});
	
});


/*
* seeker academic edit form show
*/	
$('#academic-edit').click(function(e){

	var body = $('body');

	body.find('.academic-body').hide();

	$.ajax({
		method:'GET',
		url: '/seeker/academic',
		cache: false
	}).done(function(res){
		$('#get-se-academic').append(res);
	});

});

/*
* seeker training edit form show
*/	
$('#training-edit').click(function(e){

	var body = $('body');

	body.find('.training-body').hide();

	$.ajax({
		method:'GET',
		url: '/seeker/training',
		cache: false
	}).done(function(res){
		$('#get-se-training').append(res);
	});

});

/*
* seeker professional edit form show
*/	
$('#professional-edit').click(function(e){

	var body = $('body');

	body.find('.professional-body').hide();

	$.ajax({
		method:'GET',
		url: '/seeker/professional',
		cache: false
	}).done(function(res){
		$('#get-se-professional').append(res);
	});

});

/*
* seeker employment edit form show
*/	
$('#employment-edit').click(function(e){

	var body = $('body');

	body.find('.employment-body').hide();

	$.ajax({
		method:'GET',
		url: '/seeker/employment',
		cache: false
	}).done(function(res){
		$('#get-se-employment').append(res);
	});

});

/*
* seeker language edit form show
*/	
$('#language-edit').click(function(e){

	var body = $('body');

	body.find('.language-body').hide();

	$.ajax({
		method:'GET',
		url: '/seeker/language',
		cache: false
	}).done(function(res){
		$('#get-se-language').append(res);
	});

});

/*
* seeker reference edit form show
*/	
$('#reference-edit').click(function(e){

	var body = $('body');

	body.find('.reference-body').hide();

	$.ajax({
		method:'GET',
		url: '/seeker/reference',
		cache: false
	}).done(function(res){
		$('#get-se-reference').append(res);
	});

});

// employer profile edit form show

$('#employer-profile').click(function(e){

	var body = $('body');

	$('.employer-show').html('');

	body.find('#empPhoto').hide();

	$.ajax({
		method:'GET',
		url: '/employer/profile',
		cache: false
	}).done(function(res){
		$('.employer-show').append(res);
	});

});

// employer new job form show

$('#postNewJob').click(function(e){

	var body = $('body');

	$('.employer-show').html('');

	body.find('#empPhoto').hide();

	$.ajax({
		method:'GET',
		url: '/employer/job',
		cache: false
	}).done(function(res){
		$('.employer-show').append(res);
	});

});