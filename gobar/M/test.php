<?php
require __DIR__. '/../parts/config.php';

$stmt = $pdo->query("SELECT * FROM `shop` WHERE `name` LIKE '%光%'");

$row = $stmt->fetchall();

echo json_encode($row,JSON_UNESCAPED_UNICODE);