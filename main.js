// 'use strict';
// 上記は各関数ごとに関数の先頭で用いる

const createModal = () => {
  "use strict";

  // 検索結果の画像をすべて取得する
  const triggers = document.querySelectorAll(".img-box__result-img");

  triggers.forEach((trigger) => {
    trigger.addEventListener('click', (e) => {
      // モーダル内の画像表示領域にクリックされた画像のURLをセット
      const targetContent = document.querySelector(".modal__image");
      const clickedImageUrl = e.target.getAttribute("src");
      targetContent.setAttribute("src", clickedImageUrl);

      // モーダルウィンドウを取得してモーダルを表示する
      const modal = document.querySelector(".mask");
      modal.classList.add("toggle");
    })
  })
}

const closeModal = () => {
  "use strict";

  const closeButton = document.querySelector(".modal__button__close");
}

window.onload = createModal;
window.onload = closeModal;
