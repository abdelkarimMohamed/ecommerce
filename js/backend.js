$(function(){

	'use strict';

	//Dashboard

	$('.toggle-info').click(function(){
		$(this).toggleClass('Selected').parent().next('.panel-body').fadeToggle(100);
		if($(this).hasClass('Selected')){
			$(this).html('<i class="fa fa-minus fa-lg"></i>');
		}else{
			$(this).html('<i class="fa fa-plus fa-lg"></i>');
		}

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
	
	//Convert Password Field To Text Field On Hover

	var passField = $('.password');
	$('.show-pass').hover(function (){
		passField.attr('type','text');

	}, function(){
		passField.attr('type','password');

	});

	// Confirm Message On Button

	$('.confirm').click(function (){

		return confirm('Are You Sure?');

	});

	//Category View Option
	$('.cat h3').click(function (){
		$(this) .next('.full-view').fadeToggle(200);

	});

	$('.option span').click(function (){
		$(this).addClass('active').siblings('span').removeClass('active');
		if($(this).data('view')=='full'){
			$('.cat .full-view').fadeIn(200);
		}else{
			$('.cat .full-view').fadeOut(200);
		}
	});

	//show Delete Button On Child Cats 
		$('.child-link').hover(function(){
			$(this).find('.show-delete').fadeIn(400);
		},function(){
			$(this).find('.show-delete').fadeOut(400);
		});

});