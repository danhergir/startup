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


$('.checked').keydown(function() {
    $('#checkbox').prop('checked', false)
});

if($('#checkbox').is(':checked')) {
    $(".checked-form:eq(0) .row").each(function(i,r) {
        $(".checked-form:eq(1) .row:eq("+$(r).index()+") input").val(function(I){return $(r).find(".col:eq("+$(this).parent().index()+")>input").val();});
    });
}

$('#checkbox').change(function() { 
    if($('#checkbox').is(':checked')) {
        $(".checked-form:eq(0) .row").each(function(i,r) {
            $(".checked-form:eq(1) .row:eq("+$(r).index()+") input").val(function(I){return $(r).find(".col:eq("+$(this).parent().index()+")>input").val();});
        });
    } else {
        $('.check').val('');
    }
})


