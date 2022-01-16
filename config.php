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
    'applicationId'  => $_ENV['UNSPLASH_ACCESS_KEY'],
    'secret'  => $_ENV['UNSPLASH_SECRET_KEY'],
    'callbackUrl'  => 'https://localhost:8080',
    'utmSource' => 'ChooseBackground'
  ]);
}
