<?php include __DIR__ . '/../../parts/config.php'; ?>
<?php

$now = date("Y-m-d");
// $now = date("Y-m-d H:i:s");


// echo json_encode($orders, JSON_UNESCAPED_UNICODE);

$sql = sprintf("SELECT `orders`.* , `shop`.`address`, `shop`.`mobile`FROM `shop` JOIN `orders` ON `shop`.`name`=`orders`.`shop` WHERE `orders`.`date` < '%s' ORDER BY `date` DESC; ", $now);
$stmt = $pdo->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include __DIR__ . '/../../parts/html-head.php'; ?>
<?php include __DIR__ . '/../../parts/scripts.php'; ?>
<?php include __DIR__ . '/../../parts/navbar.php'; ?>

<link rel="stylesheet" href="../css/history-noshow2.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100&display=swap" rel="stylesheet" />

<body>

    <div class="header"></div>

    <main>
        <div class="mainblock container-fluid w-75">
            <div class="row">

                <div class="col-6 col-xl-6">
                    <div class="topname">
                        <a href="<?= WEB_ROOT ?>/J/html/history.php">
                            <p>即將前往</p>
                        </a>
                    </div>
                </div>

                <div class="col-6 col-xl-6">
                    <div class="topname1">
                        <p>歷史紀錄</p>
                    </div>
                </div>

            </div>

            <div class="card-area column position-relative pt-5 pb-5">

                <?php foreach ($rows as $r) : ?>
                    <div class="card2 d-flex position-relative">
                        <div class="date col-1 col-xl-2">
                            <p class="date-text"><?= substr($r["date"], 0, 4), '/', substr($r["date"], 5, 2) ?></p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="139" height="141" viewBox="0 0 139 141">
                                <g id="Group_464" data-name="Group 464" transform="translate(0 0.339)">
                                    <rect id="Rectangle_1464" data-name="Rectangle 1464" width="139" height="139" rx="15" transform="translate(0 1.661)" fill="#fff" />
                                    <path id="Rectangle_1463" data-name="Rectangle 1463" d="M15,0H124a15,15,0,0,1,15,15V55a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V15A15,15,0,0,1,15,0Z" transform="translate(0 -0.339)" fill="#ff8d00" />
                                    <text id="_18" data-name="18" transform="translate(31 119.661)" fill="#ff8d00" font-size="64" font-family="NotoSansTC-Bold, Noto Sans TC" font-weight="700">
                                        <tspan x="0" y="0"><?= substr($r["date"], 8, 2) ?></tspan>
                                    </text>
                                    <text id="FRIDAY" transform="translate(23 39.661)" fill="#fff" font-size="30" font-family="NotoSansTC-Bold, Noto Sans TC" font-weight="700">
                                        <tspan x="15" y="0"><?= substr($r["weekdays"], 0, 3) ?></tspan>
                                    </text>
                                </g>
                            </svg>
                        </div>

                        <div class="photo col-xl-2">
                            <img src="<?= WEB_ROOT ?>data/img/<?= $r['shop'] ?>.jpg" alt="" style="width: 250px; height: 212px;">
                        </div>

                        <div class="name col-xl-3">
                            <h1><?= $r["shop"] ?></h1>
                            <p>訂位時段 : <?= $r["time"] ?></p>
                            <p>訂位人數 : <?= $r["people"] ?> 位</p>
                        </div>
                        <?php if ($r["noshow"] == 'xxx') : ?>
                            <div class="img-ink">
                                <img src="../Gobar-svg-png/PNG/印章.png" alt="" width="300px" height="300px">
                            </div>
                            <div class="noshowtext">
                                <p>NO SHOW</p>
                            </div>
                            <div class="black">

                            </div>
                        <?php endif; ?>
                        <div class="col-1 col-xl-1"></div>
                        <div class="answer col-1 col-xl-3">
                            <div class="textbox2">
                                <a href="">
                                    <p>查看詳情</p>
                                </a>
                            </div>
                            <div class="textbox1">
                                <a href="">
                                    <p>給予評價</p>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>

</body>

<?php include __DIR__ . '/../../parts/about.php'; ?>