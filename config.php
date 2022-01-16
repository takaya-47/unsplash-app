<?php
// マスターには表示されないはず
use Unsplash\HttpClient;

/**
 * アクセスキーとシークレットを使用してクライアントを構成します
 * @return void
 */
function init(): void
{
  HttpClient::init([
    'applicationId'  => getenv('UNSPLASH_ACCESS_KEY'),
    'secret'  => getenv('UNSPLASH_SECRET_KEY'),
    'callbackUrl'  => 'https://localhost:8080',
    'utmSource' => 'ChooseBackground'
  ]);
}
