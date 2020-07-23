<?php

ini_set('display_errors',1); //ブラウザーエラー表示

// データベースにアクセス
define('DB_DATEBASE','paidb');
define('DB_USERNAME','paiuser');
define('DB_PASSWORD','71107110');
define('PDO_DSN','mysql:host=paidb.ci3rclvferi0.ap-northeast-1.rds.amazonaws.com;dbname=' . DB_DATEBASE);
// root "passwordPASSWORD@999"


define('SITE_URL','http://'.$_SERVER['HTTP_HOST'].'/' );/* $_SERVER['HTTP_HOST'] 現在のアドレス、ポートを取得*/

require_once(__DIR__. '/../lib/functions.php');
require_once('autoload.php');

session_start();
?>
