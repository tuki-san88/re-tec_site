jQuery(document).ready(function($) {
    var slides = $('.main-slider .slide');
    var currentIndex = 0;
    var fadeDuration = 1000; // フェードの持続時間（ミリ秒）

    function showSlide(index) {
        slides.stop(true, true).fadeOut(fadeDuration).removeClass('active'); // 現在のスライドをフェードアウトしてクラスを削除
        slides.eq(index).stop(true, true).fadeIn(fadeDuration).addClass('active'); // 次のスライドをフェードインしてクラスを追加
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    // 初期スライドを表示
    slides.hide(); // 最初にすべてのスライドを非表示
    showSlide(currentIndex);

    // 5秒ごとにスライドを切り替える
    setInterval(nextSlide, 5000);
});
