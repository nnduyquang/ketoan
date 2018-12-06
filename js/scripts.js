var plugins = {
    menuSideBar: $('.sidebar'),
    slider: $('#slider'),
};
$(document).ready(function () {
    function sidebar() {
        var trigger = $('#trigger,#close');
        trigger.on('click', function () {
            $(this).toggleClass('active');
            plugins.menuSideBar.toggleClass('closed');
            $('#blurrMe').toggleClass('blurred')
        })
        $('#wrap-container').on('click', function () {
            if ($('#blurrMe').hasClass('blurred')) {
                $('#blurrMe').toggleClass('blurred')
                plugins.menuSideBar.toggleClass('closed');
            }
        })
    }

    sidebar();

    function runSlider() {
        plugins.slider.nivoSlider({
            effect: 'fade',
            animSpeed: 500,
            pauseTime: 3000,
            pauseOnHover: true,
            controlNav: false,
        });
    }

    if (plugins.slider.length) {
        runSlider();
    }
    $('input[name=search-key]').on('keydown', function (e) {
        var input_text = $(this).val();
        if (e.which == 13) {
            if (input_text == '')
                e.preventDefault();
            else {
                $('form[name=search-home]').submit();
            }
        }
    })
});