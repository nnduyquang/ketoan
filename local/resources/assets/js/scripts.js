var plugins = {
    menuSideBar: $('.sidebar'),
    slider: $('#slider'),
    sendMail:$('#btnSendMail')
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
    function getBaseURL() {
        var url = location.href;  // entire url including querystring - also: window.location.href;
        var baseURL = url.substring(0, url.indexOf('/', 14));
        if (baseURL.indexOf('http://localhost') != -1) {
            // Base Url for localhost
            var url = location.href;  // window.location.href;
            var pathname = location.pathname;  // window.location.pathname;
            var index1 = url.indexOf(pathname);
            var index2 = url.indexOf("/", index1 + 1);
            var baseLocalUrl = url.substr(0, index2);
            return baseLocalUrl + "/";
        }
        else {
            // Root Url for domain name
            return baseURL + "/";
        }
    }

    function runSendMail(){
        $('.loadingSending').css('display', 'inline-block');
        $('.input-text').removeClass('is-invalid');
        var data = new FormData($(this).get(0));
        data.append('name', $("input[name='name']").val());
        data.append('email', $("input[name='email']").val());
        data.append('contentmail', $("textarea[name='contentmail']").val());
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: getBaseURL() + "sendmail/send",
            dataType: 'json',
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                if (data.success) {
                    $('.loadingSending').css('display', 'none');
                    $('.successSending').css('display', 'inline-block');
                    $('.successSending').fadeIn(500);
                    $('.button-group span').css('display', 'inline-block');
                    $('.button-group span').fadeIn(500);
                    setTimeout("$('.successSending').fadeOut(1500);", 3000);
                    setTimeout("$('.button-group span').fadeOut(1500);", 3000);
                    $("input[name='name']").val("");
                    $("input[name='email']").val("");
                    $("textarea[name='contentmail']").val("");
                }
                else {
                    $('.loadingSending').css('display', 'none');
                    var errors = data.validator;
                    if (errors.hasOwnProperty('email')) {
                        $('.ip-email .input-text').addClass('is-invalid');
                        $('.ip-email .invalid-feedback').html(errors['email']);
                    }
                    if (errors.hasOwnProperty('name')) {
                        $('.ip-name .input-text').addClass('is-invalid');
                        $('.ip-name .invalid-feedback').html(errors['name']);
                    }
                }
            }
        });
    }

    if (plugins.sendMail.length) {
        plugins.sendMail.click(function () {
            runSendMail();
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