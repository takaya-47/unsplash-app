<?php

use Unsplash\HttpClient;
use Dotenv\Dotenv;

/**
 * アクセスキーとシークレットを使用してクライアントを構成します
 * @return void
 */
function init(): void
{
  // 環境変数が使えるように事前に読み込む
  $dotenv = Dotenv::createImmutable(__DIR__);
  $dotenv->load();

  HttpClient::init([
    'applicationId'  => $_ENV['UNSPLASH_ACCESS_KEY'],
    'secret'  => $_ENV['UNSPLASH_SECRET_KEY'],
    'callbackUrl'  => 'https://localhost:8080',
    'utmSource' => 'ChooseBackground'
  ]);
}
