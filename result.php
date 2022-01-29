<?php
require_once('vendor/autoload.php');
require_once('./config.php');
init();

require_once("./logic.php");

// index.phpの検索フォームで送信された検索文字列を受け取る
$search = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $search = $_POST["search"];
}
// 受け取った文字列で検索メソッドを実行し、結果の配列を受け取る
$result_list = search_photos($search);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- リセットCSSを適用 -->
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
  <!-- コンパイル済みのSassを適用 -->
  <link rel="stylesheet" href="./style.css" />
  <title>検索結果</title>
</head>

<body>
  <div>
    <h2>検索結果</h2>
    <div class="result">
      <? if (empty($result_list)) { ?>
        <p>検索結果はありません</p>
      <? } else { ?>
        <? foreach ($result_list as $result) { ?>
          <div class="img-box">
            <img src="<?= $result['urls']['regular'] ?>" alt="検索結果" class="img-box__result-img">
          </div>
        <? } ?>
      <? } ?>
    </div>
  </div>

  <script type="text/javascript" src="./main.js"></script>
</body>

</html>