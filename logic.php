<?php
use Unsplash\Search;

/**
 * 検索ワードにより検索した結果を配列で返します
 * @param string  $search
 * @return array
 */
function search_photo($search): array
{
  $page_result = Search::photos($search);
  return $page_result->getResults();
}