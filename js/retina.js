var pixelRatio = !!window.devicePixelRatio ? window.devicePixelRatio : 1;
$(window).on("load", function() {
    if (pixelRatio > 1) {
        $('.logo').attr('src', $('.logo').attr('src').replace(".png","@2x.png"));
        $('.running').attr('src', $('.running').attr('src').replace(".gif","@2x.gif"));
        $('body').addClass('retina');
    }
});