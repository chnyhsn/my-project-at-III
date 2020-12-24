<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require __DIR__ . '/../../parts/config.php';
        $sql = "SELECT `name`, `evaluation`, `address`, `mobile`, `business_hours` FROM `shop`  ";
        $smst = $pdo->query($sql);
        $shops = $smst->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($shops, JSON_UNESCAPED_UNICODE);
        
    ?>
    <?php include __DIR__ . '/../../parts/scripts.php'; ?>
    <script>
    
    </script>
</body>
</html>