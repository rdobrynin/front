/*
/* Here is restrict bootstrap on focus
 */
;(function ($, window, undefined) {
    var $allDropdowns = $();
    $.fn.dropdownHover = function (options) {
        if('ontouchstart' in document) return this; // don't want to affect chaining
        $allDropdowns = $allDropdowns.add(this.parent());

        return this.each(function () {
            var $this = $(this),
                $parent = $this.parent(),
                defaults = {
                    delay: 500,
                    instantlyCloseOthers: true
                },
                data = {
                    delay: $(this).data('delay'),
                    instantlyCloseOthers: $(this).data('close-others')
                },
                showEvent   = 'show.bs.dropdown',
                hideEvent   = 'hide.bs.dropdown',
                settings = $.extend(true, {}, defaults, options, data),
                timeout;

            $parent.hover(function (event) {
                if(!$parent.hasClass('open') && !$this.is(event.target)) {
                    return true;
                }

                openDropdown(event);
            }, function () {
                timeout = window.setTimeout(function () {
                    $parent.removeClass('open');
                    $this.trigger(hideEvent);
                }, settings.delay);
            });

            $this.hover(function (event) {
                if(!$parent.hasClass('open') && !$parent.is(event.target)) {
                    return true;
                }
                openDropdown(event);
            });
            $parent.find('.dropdown-submenu').each(function (){
                var $this = $(this);
                var subTimeout;
                $this.hover(function () {
                    window.clearTimeout(subTimeout);
                    $this.children('.dropdown-menu').show();
                    // always close submenu siblings instantly
                    $this.siblings().children('.dropdown-menu').hide();
                }, function () {
                    var $submenu = $this.children('.dropdown-menu');
                    subTimeout = window.setTimeout(function () {
                        $submenu.hide();
                    }, settings.delay);
                });
            });

            function openDropdown(event) {
                $allDropdowns.find(':focus').blur();

                if(settings.instantlyCloseOthers === true)
                    $allDropdowns.removeClass('open');
                window.clearTimeout(timeout);
                $parent.addClass('open');
                $this.trigger(showEvent);
            }
        });
    };

    $(document).ready(function () {
        $('[data-hover="dropdown"]').dropdownHover();
    });
})(jQuery, this);


$(function() {




    $("#top-menu li").click(function(){
        if ($("#top-menu li").hasClass('active')) {
            $("#top-menu li").removeClass('active');
        }
        $(this).addClass('active');
    });
    $("#vm_submenu li").click(function(){
        if ($("#vm_submenu li").hasClass('active')) {
            $("#vm_submenu li").removeClass('active');
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

    $('#show-id').click(function () {
        $('#show-id-data').toggle();
    });


});