

window.addEventListener('DOMContentLoaded', function () {
    // モーダル（ポップアップ）
    const modalBtn = document.querySelectorAll('.js-modal-open');
    const modalWindow = document.querySelectorAll('.js-modal');
    const modalClose = document.querySelectorAll('.js-modal-close');
  for (let i = 0; i < modalBtn.length; i++) {
    modalBtn[i].addEventListener('click', function (e) {

      modalWindow.forEach(element => {
        element.style.display = 'none';
      });
      modalWindow[i].style.display="block";
    })
    modalClose[i].addEventListener('click', function () {
        modalWindow[i].style.display="none";
    })
  }
});
