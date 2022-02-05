// モーダルを表示する関数
window.addEventListener('DOMContentLoaded', () => {
  // 検索結果の画像をすべて取得する
  const triggers = document.querySelectorAll(".img-box__result-img");

  triggers.forEach((trigger) => {
    trigger.addEventListener('click', (e) => {
      // モーダル内の画像表示領域にクリックされた画像のURLをセット
      const targetContent = document.querySelector(".modal__image");
      const clickedImageUrl = e.target.getAttribute("src");
      targetContent.setAttribute("src", clickedImageUrl);

      // モーダルウィンドウを取得してモーダルを表示する
      const mask = document.querySelector(".mask");
      const modal = document.querySelector(".modal");
      mask.classList.add("showModal");
      modal.classList.add("showModal");
    });
  });
});

// 「閉じる」ボタンでモーダルを非表示にする関数
window.addEventListener('DOMContentLoaded', () => {
  const closeButton = document.querySelector(".modal__button__close");
  closeButton.addEventListener('click', () => {
    document.querySelector(".mask").classList.remove("showModal");
    document.querySelector(".modal").classList.remove("showModal");
  });
});

// マスク部分をクリックしてモーダルを非表示にする関数
window.addEventListener('DOMContentLoaded', () => {
  const mask = document.querySelector(".mask");
  mask.addEventListener('click', () => {
    document.querySelector(".mask").classList.remove("showModal");
    document.querySelector(".modal").classList.remove("showModal");
  })
});