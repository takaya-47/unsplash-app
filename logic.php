<?php
use Unsplash\Search;

const PAGE_NUMBER = 1;
const PER_PAGE = 20;
const ORIENTATION = 'landscape';

/**
 * 検索ワードにより検索した結果を配列で返します
 * @param string  $search
 * @return array
 */
function search_photo($search): array
{
  $page_result = Search::photos($search, PAGE_NUMBER, PER_PAGE, ORIENTATION, null, null);
  if ($page_result->getTotal() === 0) {
    return [];
  } else {
    return $page_result->getResults();
  }
}