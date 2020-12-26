$('#send-form' ).on('click', function() {
    let name = $('#name').val().trim();
    let messager = $('#messager').val().trim();
    let phone = $('#phone').val().trim();
    let expereance = $('#experience').val().trim();

    $.ajax({
        url: 'ajax/mail.php',
        type: 'POST',
        cache: false,
        data: {'name':name, 'messager':messager, 'phone':phone, 'expereance':expereance},
        dataType: 'html',
        beforeSend: function() {
            $('send-form').prop('disabled', true);
        },
        success: function(data) {
            $('send-form').prop('disabled', false);
        }
    })
})
