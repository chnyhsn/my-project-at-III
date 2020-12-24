<?php
include __DIR__ . '/../../parts/config.php';
$output = [
    'success' => false,
];

if (empty($_POST['email'])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}


$sql = "SELECT * FROM `member` WHERE `email`=? AND `password`=SHA1(?)";
$output['sql'] = $sql;
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['email'],
    $_POST['password'],
]);

if ($stmt->rowCount() > 0) {
    $output['success'] = true;
    $_SESSION['gobarUser'] = $stmt->fetch();
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
