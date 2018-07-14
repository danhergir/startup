$('.like').on('click', function(event) {
    event.preventDefault();
    reviewId = $(this).closest(".reviewid").attr("data-reviewid");
    var isLike = event.target.previousElementSibling == null;
    $.ajax({
        method: 'POST',
        url: urlLike,
        data: {isLike: isLike, reviewId: reviewId, _token:token},
        success: function(json) {
            if(!json.error) location.reload(true);
        },
        error: function(e){ console.log(e.responseText); }
    })
});
$('.dislike').on('click', function(event) {
    event.preventDefault();
    reviewId = $(this).closest(".reviewid").attr("data-reviewid");
    var isLike = event.target.previousElementSibling == false;
    $.ajax({
        method: 'POST',
        url: urlLike,
        data: {isLike: isLike, reviewId: reviewId, _token:token},
        success: function(json) {
            if(!json.error) location.reload(true);
        },
        error: function(e){ console.log(e.responseText); }
    })
});

$('.guest-like').click(function(){
    $(this).parent().find('.auth-message').show();
    $(this).parent().find('.auth-message').fadeOut(2000);
});
$('.close-span').click(function(){
    $(this).closest(".body-text").find('.auth-message').hide();
});


var data = [ 
    first_name = $('#first_name'),
    last_name = $('#last_name'),
    street_address = $('#street_address'),
    street_address2 = $('#street_address2'),
    country = $('#country'),
    city = $('#city'),
    state_province = $('#state_province'),
    phone = $('#phone')
];

var checkData = [
    first_name = $('#check_first_name'),
    last_name = $('#check_last_name'),
    street_address = $('#check_street_address'),
    street_address2 = $('#check_street_address2'),
    country = $('#check_country'),
    city = $('#check_city'),
    state_province = $('#check_state_province'),
    phone = $('#check_phone')
];

$('.checked').keydown(function() {
    $('#checkbox').prop('checked', false)
    $('.check').val('');
});

for(i = 0; i < 8; i++) {
    if($('#checkbox').is(':checked')) {
        $.each($('.check'), function() {
            $(checkData[i]).val($(data[i]).val());
        });
    }
}


$('#checkbox').change(function() { 
    if($('#checkbox').is(':checked')) {
        $(checkData[i]).val($(data[i]).val());
    } else {
        $('.check').val('');
    }
});



