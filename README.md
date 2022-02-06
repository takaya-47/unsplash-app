# 概要
キーワードから画像検索ができるアプリケーション

# 要件定義
## 要件
1. 画像をキーワード検索できること
2. 検索結果画像をクリックするとモーダルが表示されること

## 使用技術
- HTML
- CSS(Sass)
- JavaScript
- PHP
- API(Unsplash)
- Git, GitHub

# 設計
1. HTMLで画面を作成
    - トップページ
        ・タイトル
        ・検索フォーム
        ・検索ボタン

    - 検索結果ページ
        ・タイトル
        ・検索結果画像の表示領域（横３で下に並べる）
    - （画像クリック時）モーダルウィンドウ
        ・選択した画像表示部位
        ・「閉じる」ボタン

2. CSSでスタイルを整える（最低限）

3. JavaScriptでモーダル作成

4. Unsplash APIに開発者登録
(https://unsplash.com/documentation#creating-a-developer-account)

5. Unsplash APIの公式ライブラリをcomposerでインストール
(https://github.com/unsplash/unsplash-php)

6. PHPで画像検索処理、表示処理
