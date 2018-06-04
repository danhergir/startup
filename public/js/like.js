$('.like').on('click', function(event) {
    event.preventDefault();
    reviewId = $(this).closest(".reviewid").attr("data-reviewid");;
    var isLike = event.target.previousElementSibling == null;

    $.ajax({
        method: 'POST',
        url: urlLike,
        data: {isLike: isLike, reviewId: reviewId, _token:token},
        error: function(e){ console.log(e.responseText); }
    })
});