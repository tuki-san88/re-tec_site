"use strict";

// ----------------------
//ハンバーガーメニュー
// ----------------------
var hamburger = document.getElementById("mobile-menu-button");
var spHeaderMenu = document.querySelector(".js-drawer-menu");
var drawerMenuItems = document.querySelectorAll(".js-drawer-menu__item");
if (hamburger) {
  var toggleDrawer = function toggleDrawer(isOpen) {
    var expanded = isOpen ? "false" : "true";
    var hidden = isOpen ? "true" : "false";
    hamburger.setAttribute("aria-expanded", expanded);
    spHeaderMenu.setAttribute("aria-hidden", hidden);
    document.body.style.overflow = isOpen ? "" : "hidden";
  };
  hamburger.addEventListener("click", function () {
    var isOpen = this.getAttribute("aria-expanded") === "true";
    toggleDrawer(isOpen);
  });
  drawerMenuItems.forEach(function (item) {
    item.addEventListener("click", function () {
      return toggleDrawer(true);
    });
  });
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      toggleDrawer();
    }
  });
}