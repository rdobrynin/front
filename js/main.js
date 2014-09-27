$(function() {
    $("#top-menu li").click(function(){
        if ($("#top-menu li").hasClass('active')) {
            $("#top-menu li").removeClass('active');
        }
        $(this).addClass('active');
    });
    $("#top-main-menu li").click(function(){
        if ($("#top-main-menu li").hasClass('active')) {
            $("#top-main-menu li").removeClass('active');
        }
        $(this).addClass('active');
    });

    $('.nav-tabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show');
        if($('.first-tab').hasClass('active')) {
            $('.first-tab').css('border-right', '1px solid #ddd');
        }
    });

    if($('.first-tab').hasClass('active')) {
        $('.first-tab').css('border-right', '1px solid #ddd');
    }

//    setTimeout(function() {
//        $('#test-alert-warning').fadeIn('fast');
//    }, 1000);

    $('#test-alert-warning, #test-alert-success').hide();

    $(window).scroll(function(){
        $(".alert-warning")
            .stop()
            .animate({"marginTop": ($(window).scrollTop() + 0) + "px"}, "slow" );
    });


});