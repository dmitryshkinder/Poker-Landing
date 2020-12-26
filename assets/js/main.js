$('.questions_card').on('click', (e) => {
    $(e.currentTarget).children('.questions_card-text').toggle('fast')
    console.log($(e.currentTarget).find('.questions_card-img').css('transform'))
    if ($(e.currentTarget).find('.questions_card-img').css('transform')!=='none') {
        $(e.currentTarget).find('.questions_card-img').css('transform', 'none')
    } else {
        $(e.currentTarget).find('.questions_card-img').css({
            'transform': 'rotate(180deg)',
            'transition': 'all 400ms'
        })
    }

})

var $root = $('html, body');
$('a[href*="#"]').click(function() {
    $root.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 400);
    return false;
});

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});