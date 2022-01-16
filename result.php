<?php
require_once('vendor/autoload.php');
require_once('./config.php');
require_once("./logic.php");

// index.phpの検索フォームで送信された検索文字列を受け取る
$search = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $search = $_POST["search"];
}
// 受け取った文字列で検索メソッドを実行し、結果の配列を受け取る
$result_array = search_photo($search);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>検索結果</title>
</head>

<body>
  <div>
    <h2>検索結果</h2>
    <div class="result">
      <? foreach ($result_array as $url) { ?>
        <?= var_dump($url); ?>
        <!-- <img src="$url" alt="検索結果" class="result_item" /> -->
      <? } ?>
    </div>
  </div>
</body>

</html>