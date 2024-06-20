// ----------------------
//ハンバーガーメニュー
// ----------------------
const hamburger = document.getElementById("mobile-menu-button");
const spHeaderMenu = document.querySelector(".js-drawer-menu");
const drawerMenuItems = document.querySelectorAll(".js-drawer-menu__item");
if (hamburger) {
  function toggleDrawer(isOpen) {
    const expanded = isOpen ? "false" : "true";
    const hidden = isOpen ? "true" : "false";
    hamburger.setAttribute("aria-expanded", expanded);
    spHeaderMenu.setAttribute("aria-hidden", hidden);
  }

  hamburger.addEventListener("click", function () {
    const isOpen = this.getAttribute("aria-expanded") === "true";
    toggleDrawer(isOpen);
  });

  drawerMenuItems.forEach((item) => {
    item.addEventListener("click", () => toggleDrawer(true));
  });

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      toggleDrawer();
    }
  });
}
// ----------------------
//スライド
// ----------------------
document.addEventListener("DOMContentLoaded", function () {
  if (document.querySelector(".js-img-swiper")) {
    const swiper1 = new Swiper(".js-img-swiper", {
      slidesPerView: 1, // コンテナ内に表示させるスライド数（CSSでサイズ指定する場合は 'auto'）
      spaceBetween: 0, // スライド間の余白（px）
      loop: true, // 無限ループさせる
      loopAdditionalSlides: 1, // 無限ループさせる場合に複製するスライド数
      speed: 3000, // スライドアニメーションのスピード（ミリ秒）
      autoplay: {
        delay: 3000,
      },
    });
  }
});
// ----------------------
//アコーディオン
// ----------------------
if (document.querySelector(".js-accordion__btn")) {
  document.querySelectorAll(".js-accordion__btn").forEach(function (button) {
    button.addEventListener("click", function () {
      var expanded = this.getAttribute("aria-expanded") === "true" || false;
      this.setAttribute("aria-expanded", !expanded);
      var body = this.nextElementSibling;
      if (body) {
        body.setAttribute("aria-hidden", expanded);
      }
    });
  });
}