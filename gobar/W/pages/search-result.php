<?php include __DIR__ . '/../../parts/config.php'; ?>

<?php

// get keyword
$keyword = $_GET['keyword'];

$sql = "SELECT * FROM `shop` WHERE `name` LIKE '%$keyword%'";
$stmt = $pdo->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>



<?php include __DIR__ . '/../../parts/html-head.php'; ?>

<link rel="stylesheet" href="../css/search-result.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100&display=swap" rel="stylesheet" />

<?php include __DIR__ . '/../../parts/scripts.php'; ?>
<?php include __DIR__ . '/../../parts/navbar.php'; ?>

<body>

    <main>

        <div class="header"></div>

        <div class="container-fluid">
            <div class="bigtitle">
                <p>搜尋結果</p>
            </div>
            <div class="dropdown-all">
                <div class="dropdown">
                    <button class="dropdown-btn btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    依價位
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="dropdown-items">
                            <a  href="">由高至低</a>
                        </div>
                        <div class="dropdown-items">
                            <a  href="">由低至高</a>
                        </div>
                        
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropdown-btn btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    依人氣
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="dropdown-items">
                            <a  href="">由高至低</a>
                        </div>
                        <div class="dropdown-items">
                            <a  href="">由低至高</a>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="card-area d-flex col-xl-12" ">
                <?php foreach ($rows as $r) : ?>
                    <div class="card2 col-xl-3 col-12 px-0">
                    <a href="<?= WEB_ROOT ?>E/pages/product-detail.php?sid=<?= $r['sid'] ?>">
                            <img src="<?= WEB_ROOT ?>data/img/<?= $r['sid'] ?>.jpg" alt="" width="378" height="365">
                            <div class="card1">
                                <h2><?= $r['name'] ?></h2>
                                <p><?= $r['address'] ?></p>
                                <div class="cardmoney d-flex justify-content-between align-items-center">
                                    <div class="barphoto">
                                        <img src="<?= WEB_ROOT ?>J/Gobar-svg-png/SVG/star.svg" alt="" width="160">
                                    </div>
                                    <p class="stars"><?= $r['evaluation'] ?></p>
                                    <h2>$<?= $r['price'] ?>起</h2>
                                </div>
                            </div>
                    </a>    
                    </div>
                    
                <?php endforeach ?>  
            </div>
           
        </div>

    </main>

    

</body>

<?php include __DIR__ . '/../../parts/about.php'; ?>

</html>