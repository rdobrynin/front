var pixelRatio = !!window.devicePixelRatio ? window.devicePixelRatio : 1;
$(window).on("load", function() {
    if (pixelRatio > 1) {
        $('.logo').attr('src', $('.logo').attr('src').replace(".png","@2x.png"));

        $('body').addClass('retina');
    }
});