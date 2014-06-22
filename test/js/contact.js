jQuery(function() {
    jQuery('.error').hide();

    var data = ['','','',''];
    var onOff = {
    	username: false,
    	email: false,
    	theme: false,
    	body: false
    }

	var $name = jQuery("input#name");
	$name.blur(function() {
		if ( $(this).val() != '' ) {
			data[0] = right($(this), 'username');
			$('#contact_username').hide();
		} else {
			error($(this), 'username');
			$('#contact_username').show();
		}
	});

	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	var $email = $('input#email');
	$email.blur(function() {
		if ( $(this).val() != '' && emailReg.test($(this).val()) ) {
			data[1] = right($(this), 'email');
			$('#contact_email').hide();
		} else {
			error($(this), 'email');
			$('#contact_email').show();
		}
	});

	var $theme = $('input#subject');
	$theme.blur(function() {
		if ( $(this).val() != '' ) {
			data[2] = right($(this), 'theme');
			$('#contact_theme').hide();
		} else {
			error($(this), 'theme');
			$('#contact_theme').show();
		}
	});

	var $msg = $('#msg');
	$msg.blur(function() {
		if ( $.trim( $(this).val() ) != '' ) {
			data[3] = right($(this), 'body');
			$('#contact_body').hide();
		} else {
			error($(this), 'body');
			$('#contact_body').show();
		}
	});

	function error(obj,attr) {
		onOff[attr] = false;
		obj.css('borderColor','red');
	}
	function right(obj,attr) {
		onOff[attr] = true;
		obj.css('borderColor','#ececec');

		return obj.val();
	}

	$('#submit_btn').click(function() {
		for(var attr in onOff) {
			if ( !onOff[attr] ) {
				return false;
			}
		}
		var dataStr = 'username=' + data[0] + '&email=' + data[1] + '&theme=' + data[2] + '&body='  + data[3] ;

		jQuery.ajax({
	      	type: "POST",
	      	url: "/contact/leave",
	      	data: dataStr,
	      	success: function() {
	      		// alert('success');
	       	 	jQuery('#contactform').html("<div id='message'></div>");
	       	 	jQuery('#message').html("<strong>你的留言已提交</strong>")
	        	.append("<p>感谢你的留言</p>")
	        	.hide()
	        	.fadeIn(1500, function() {
	          		jQuery('#message');
	        	});
	      	}
	    });
	    return false;
	})
});