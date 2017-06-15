$(function(){

	'use strict';

	//Switch Between Login & Signup

	$('.login-page h1 span').click(function(){
		$(this).addClass('selected').siblings().removeClass('selected');
		$('.login-page form').hide();
		$('.' + $(this).data('class')).fadeIn(100);

	});


	// Trigger The Selectboxit

	 $("select").selectBoxIt({
	 	autoWidth: false
	 });

	// Hide Placeholder On Form Focus
	$('[placeholder]').focus(function(){
		$(this).attr('date-text',$(this).attr('placeholder'));
		$(this).attr('placeholder','');

	}).blur(function(){
		$(this).attr('placeholder',$(this).attr('date-text'));

	});

	//Add Asterisk(*)  on required field

	$("input").each (function (){

		if($(this).attr('required') === 'required'){
			$(this).after('<span class="asterisk">*</span>');
			
		}

	});
	

	// Confirm Message On Button

	$('.confirm').click(function (){

		return confirm('Are You Sure?');

	});

	$('.live').keyup(function(){
		$($(this).data('class')).text($(this).val());
	});
	

});