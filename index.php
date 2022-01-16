<?php
require_once ('vendor/autoload.php');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- リセットCSSを適用 -->
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
  <!-- コンパイル済みのSassを適用 -->
  <link rel="stylesheet" href="./style.css" />
  <title>UnsplashApp</title>
</head>

<body>
  <form action="./result.php" method="POST" class="form">
    <h2>写真検索</h2>
    <p>
      <input type="text" name="search" class="form_input" placeholder="検索キーワードを入力" />
    </p>
    <p><input type="submit" value="検索" class="form_submit" /></p>
  </form>

  <div>
    <h2>選んだ写真</h2>
    <div class="select">
      <img src="https://images.unsplash.com/photo-1637294859377-d4804ba23c48?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3028&q=80" alt="表示画像" class="select_item" />
    </div>
  </div>
</body>

</html>