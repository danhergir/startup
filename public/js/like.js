$('.like').on('click', function(event) {
    event.preventDefault();
    reviewId = $(this).closest(".reviewid").attr("data-reviewid");;
    var isLike = event.target.previousElementSibling == null;

    $.ajax({
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: urlLike,
        data: {isLike: isLike, reviewId: reviewId, _token:token},
        success: function(json) {
            if(!json.error) location.reload(true);
        },
        error: function(e){ console.log(e.responseText); }
    })
});

$(document).ready(function(){
    $(".guest-like").click(function(){
        $(".auth-message").show();
        $('.auth-message').delay(2000).hide(100);
    });
    $(".close-span").click(function(){
        $(".auth-message").hide();
    });
});
