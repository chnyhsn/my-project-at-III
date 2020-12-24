<?php
include __DIR__ . '/../../parts/config.php';



$output = [
    'success' => false,
];

// 如果keyword是空的就結束
if (empty($_POST['keyword'])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

//將keyword賦值給一個變數
$keyword = $_POST['keyword'];

$output['success'] = true;
$output['keyword'] = $keyword;
echo json_encode($output, JSON_UNESCAPED_UNICODE);