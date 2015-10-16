
// JavaScript Document


// disable dropzone autodiscover
	// Dropzone.autoDiscover = false;

$(document).ready(function() {
	
	
	// Modal Popup on Homepage
	if ($('#popup-one-1-modal1').length > 0) {
		$('#popup-one-1-modal1').modal('show');
		$('#popup-one-1-modal1 a').click(function(){$('#popup-one-1-modal1').fadeOut();})
	}
	
	// next/submit button
	$('.next-button1, .submit-button').click(function(event){
		event.preventDefault();
		$('form.form-bootstrap').submit();
	});
	
	// physician-one.php & physician-three.php (upload photo)
	$('#before_photo').change(function(){$('form.form-bootstrap').submit();});
	
	
	/*
	
	// DROPDZONE
	if ($('#physician-three-1-blk2a').length > 0) {
	// $('input#before_photo').dropzone();
	// var myDropzone = new Dropzone("#form_physician-three", { 
		var myDropzone = new Dropzone("#physician-three-1-blk2a", { 
		// var myDropzone = new Dropzone("#before_photo", { 
				url: "/bootstrap/_action.php",
				// clickable: "input#before_photo",
				clickable: ".common-upload-portion1-button1",
			});
		myDropzone.on("addedfile", function(file) {
				console.log(file);
				$('form.form-bootstrap').submit();
			});
	}
	*/

	//bootbox.alert("Thank you!");
	var msg = getParameterByName('msg');
	if (msg=='thankyou') {
		$('#popup-one-1-modal1').hide();
		bootbox.alert("Thank you for your inquiry!  One of our professionals will be in contact with you to schedule your consultation.");
	}
	
	
	
	 var handler = StripeCheckout.configure({
		// key: 'pk_test_Znigdaq3kZnjRQcm5cj9M6B3',
		key: 'pk_live_Cjta64iHYng2Ztpmh6Pl8loe',
		image: 'https://www.newlooknow.com/sites/default/files/stripe-logo.png',
		token: function(token) {
		  // Use the token to create the charge with a server-side script.
		  // You can access the token ID with `token.id`
  		  // $('#edit-email').val(token.email);
		  // $('#edit-stripe-input1').val('Stripe');
  		  $('#stripe_token_id').val(token.id);
		  // $('input#edit-next').click();
		  
		  // TODO: submit form and save token information
		  window.location.href = "/bootstrap/_action.php?stripe_token=" + token.id;
		}
	  });
	
	$('#button_enter_payment').click(function(event) {
		
		event.preventDefault();
		
		// Stripe Payment
		// Open Checkout with further options
			handler.open({
			  name: 'NewLookNow',
			  description: 'Before & After Visualizer',
			  zipCode: false,
			  amount: $('#stripe_price').val() * 100,
			  // amount: $('#stripe_price').val(),
			});
	});
	
	$('form.validate').submit(function(event) {
		
			// alert('validating.'); 
			// event.preventDefault();
			// return false;
		var validate = true;
		$('input.required, textarea.required').each(function(){
			console.log($(this).attr('name')+'='+$(this).val())
			// alert($(this).attr('name')+'='+$(this).val())
			$(this).removeClass('validate-false');
			if ($(this).val() == '') {
				$(this).css('border', '1px solid red !important');
				$(this).addClass('validate-false');
				validate = false;
			}
			
			if ($(this).hasClass('checkbox-required') && !$(this).is(':checked')) {
				$(this).addClass('validate-false');
				validate = false;
			}
		});
		if (!validate) {
			alert('Please complete all required fields.');
			event.preventDefault();
			return false;
		}
	});
	
});
		function getParameterByName(name) {
			name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
			var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			results = regex.exec(location.search);
			return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
		}
