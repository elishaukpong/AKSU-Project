$(function() {

    // $('.onboard-next-button').click(function() {
    //     $parent = $(this).parent().parent().parent();
    //     $parent.fadeOut(1000, function() {
    //         $parent.next().fadeIn()
    //     });
    // })

    // $('.onboard-prev-button').click(function() {
    //     $parent = $(this).parent().parent().parent();
    //     $parent.fadeOut(1000, function() {
    //         $parent.prev().fadeIn();
    //     });
    // })

    $('.onboard-prev-button').click(nextOrPreviousSlide);
    $('.onboard-next-button').click(nextOrPreviousSlide);

    function nextOrPreviousSlide() {

        $parent = $(this).parent().parent().parent();

        if ($(this).hasClass("onboard-prev-button")) {
            fadeContent($parent, 'prev');
        } else {
            fadeContent($parent, 'next');
        }
    }

    function fadeContent(parent, fadeDirection) {
        parent.fadeOut(1000, () => fadeDirection === 'prev' ? parent.prev().fadeIn() : parent.next().fadeIn());
    }
});
