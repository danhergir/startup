$('.like').on('click', function(event) {
    event.preventDefault();
    reviewId = $(this).closest(".reviewid").attr("data-reviewid");;
    var isLike = event.target.previousElementSibling == null;

    $.ajax({
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/like',
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
