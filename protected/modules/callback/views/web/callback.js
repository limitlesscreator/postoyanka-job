function callbackSendForm(form, data, hasError) {
    if (hasError) return false;

    $.ajax({
        url: yupeCallbackSendUrl,
        type: 'POST',
        data: form.serialize(),
		beforeSend: function(){
			$('#callback-send').attr('disabled', 'disabled');
		},
        success: function (response) {
            if (response.result) {
                document.getElementById("callback-form").reset();
            }
/*			$('#modal-body-content-text').html(response.data);
            $('#callback-link').click();
            $('#notifications').html('<div>' + response.data + '</div>').fadeIn().delay(3000).fadeOut();
			$('#callback-send').removeAttr('disabled');*/
            window.location.href = "http://art-corporat.ru/spasibo-za-zayavku";
        },
        error: function () {
            $('#callback-request').click();
            $('#notifications').html(yupeCallbackErrorMessage).fadeIn().delay(3000).fadeOut();
        }
    });
    return false;
}