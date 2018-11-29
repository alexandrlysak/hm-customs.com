function sendManagerMessage()
{
	var title = jQuery('#callbackForm input[name=title]').val();
	var email = jQuery('#callbackForm input[name=email]').val();
	var message = jQuery('#callbackForm textarea[name=message]').val();
    if (title == '' || email == '' || message == '') {
        //alert('Please enter all data');
        jQuery('#callbackForm .wpcf7-response-output').html('<span style="color: red;">Please enter all data</span>').show();
        return false;
    }

	jQuery.ajax({
        type: 'POST',
        url: '/frontend/ajax',
        dataType: 'JSON',
        headers: {'X-CSRF-Token': jQuery('input[name=_token]').val()},
        data: {
            action: 'sendManagerMessage',
            title: title,
            email: email,
            message: message
        },
        
        success: function(response) {
            if (response.code == 1) {
                jQuery('#callbackForm .wpcf7-response-output').html('<span style="color: green;">Success send message</span>').show();
            } else if (response.code == 0) {
                jQuery('#callbackForm .wpcf7-response-output').html('<span style="color: red;">'+response.message+'</span>').show();
            } else {
                jQuery('#callbackForm .wpcf7-response-output').html('<span style="color: red;">Error send message</span>').show();
            }

            jQuery('#callbackForm').trigger('reset');
            
            
        },
        error: function (response) {
            jQuery('#callbackForm .wpcf7-response-output').html('<span style="color: red;">Error send message</span>').show();
        },
    });
}

jQuery(document).ready(function() {
    jQuery(".popup").fancybox({});
});