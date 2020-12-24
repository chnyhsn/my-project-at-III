<?php
define('WEB_ROOT', '/GOBAR/');

//  php -S localhost:8000 -t ./
// define('WEB_ROOT', '/');

if(! isset($_SESSION)){
    session_start();
}

$db_host = 'localhost';  //主機 =127.0.0.1
$db_name = 'gobar';    //資料庫
$db_user = 'root';    //用戶
$db_pass = '';    //密碼

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";  //一定要用雙引號 key=valuue;

//pdo連線設定 陣列
$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8 ",
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
