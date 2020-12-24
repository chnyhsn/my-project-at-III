<?php
require __DIR__ . '/../../parts/config.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '沒有表單資料',
];

$output['get'] = $_GET;

// echo json_encode($output, JSON_UNESCAPED_UNICODE);

// exit;

$sql = "DELETE FROM `orders` WHERE `sid` = ? ";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_GET['sid']
]);

echo json_encode($output, JSON_UNESCAPED_UNICODE);
