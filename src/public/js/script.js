/******/ (() => { // webpackBootstrap
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
window.addEventListener('DOMContentLoaded', function () {
  // モーダル（ポップアップ）
  var modalBtn = document.querySelectorAll('.js-modal-open');
  var modalWindow = document.querySelectorAll('.js-modal');
  var modalClose = document.querySelectorAll('.js-modal-close');
  var _loop = function _loop(i) {
    modalBtn[i].addEventListener('click', function (e) {
      modalWindow.forEach(function (element) {
        element.style.display = 'none';
      });
      modalWindow[i].style.display = "block";
    });
    modalClose[i].addEventListener('click', function () {
      modalWindow[i].style.display = "none";
    });
  };
  for (var i = 0; i < modalBtn.length; i++) {
    _loop(i);
  }
});
/******/ })()
;