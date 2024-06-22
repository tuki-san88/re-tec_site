jQuery(document).ready(function($) {
    // カスタムスライダー
    var customSlides = $('.custom-slider .custom-slide');
    var customCurrentIndex = 0;

    function showNextCustomSlide() {
        customSlides.eq(customCurrentIndex).fadeOut(1000).removeClass('active');
        customCurrentIndex = (customCurrentIndex + 1) % customSlides.length;
        customSlides.eq(customCurrentIndex).fadeIn(1000).addClass('active');
    }

    customSlides.hide().eq(customCurrentIndex).show().addClass('active');
    setInterval(showNextCustomSlide, 3000);
});
