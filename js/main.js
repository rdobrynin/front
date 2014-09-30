/*
/* Here is restrict bootstrap on focus
 */

$(function() {

    console.log(localStorage.getItem('showID'));

    $('.dropdown').hover(function() {
        $(this).removeClass('open');
    });

    $("#top-menu li").click(function(){
        if ($("#top-menu li").hasClass('active')) {
            $("#top-menu li").removeClass('active');
        }
        $(this).addClass('active');
    });
//    $("#vm_submenu li").click(function(){
//        if ($("#vm_submenu li").hasClass('active')) {
//            $("#vm_submenu li").removeClass('active');
//        }
//        $(this).addClass('active');
//    });
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

    $('#test-alert-warning, #test-alert-success').hide();

//TEST

//    setTimeout(function() {
//        $('#test-alert-warning').fadeIn('fast');
//    }, 8000);
//
//
//    $(window).scroll(function(){
//        $(".alert-warning")
//            .stop()
//            .animate({"marginTop": ($(window).scrollTop() + 0) + "px"}, "slow" );
//    });

    $('.selectpicker').selectpicker({
        style: 'btn-select'
    });

    var clicks = 0;
    var string = $('#show-id').text();
    $('#show-id').click(function(){
        if(clicks == 0){
            $('#show-id-data').show();
            $(this).html('<a href="#">hide IP addresses</a>');
            localStorage.setItem('showID', true);
            clicks=1;
        }else{
            $('#show-id-data').hide();
            $(this).html('<a href="#">'+string+'</a>');
            localStorage.setItem('showID', false);
            clicks = 0;
        }
    });

});