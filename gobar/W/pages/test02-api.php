<?php 

require __DIR__ . '/../../parts/config.php';

if(! isset($_SESSION)){
    session_start();
}

$output = [
    'success' => false,
    'code' => 0,
    'error' => '沒有表單資料',
];

if (empty($_POST['date'])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$sql = "INSERT INTO `orders`(`date`) VALUES (?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['date']
]);

if ($stmt->rowCount() == 1) {  //roWCount==1 代表新增成功    0沒有新增成功
    $output['success'] = true;
    $output['error'] = '';
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);