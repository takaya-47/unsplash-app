<?php

use Unsplash\Search;

const PAGE_NUMBER = 1;
const PER_PAGE = 10;
const ORIENTATION = 'landscape';
const REQUEST_LIMIT_PER_HOUR = 3; // デモモードの場合、実際は50だけど開発中のため3に設定

/**
 * 検索ワードにより検索した結果を配列で返します
 * @param string  $search
 * @return array
 */
function search_photos($search): array
{
  // 検索ワードで検索メソッド実行
  $page_result = Search::photos($search, PAGE_NUMBER, PER_PAGE, ORIENTATION, null, null);
  $total_items = $page_result->getTotal();
  $total_pages = $page_result->getTotalPages();

  // 検索結果が無ければその時点で結果を返す
  if (!$total_items) {
    return [];
  }

  // 検索結果ページ数が１ページのみの場合、上記の検索結果を返却
  if ($total_pages === PAGE_NUMBER) {
    return $page_result->getResults();
  }

  // 検索結果ページ数が２ページ以上の場合、すべてのページの検索結果を取得して返却
  if ($total_pages > PAGE_NUMBER) {
    // 最初の検索結果を検索結果に詰める
    $result_list = $page_result->getResults();
    // ２ページ目以降の検索結果を検索結果に詰める
    for ($i = 2; $i <= REQUEST_LIMIT_PER_HOUR; $i++) {
      $next_page_result = Search::photos($search, $i, PER_PAGE, ORIENTATION, null, null);
      $result_list = array_merge($result_list, $next_page_result->getResults());
    }
    return $result_list;
  }
}
