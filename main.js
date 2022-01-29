// 'use strict';
// 上記は各関数ごとに関数の先頭で用いる

const createModal = function () {
  "use strict";
  const triggers = document.querySelectorAll(".img-box__result-img");
  triggers.forEach((trigger) => {
    console.log(trigger);
  });
};

window.onload = createModal;
