<?php include __DIR__ . '/../../parts/config.php'; ?>
<?php

$now = date("Y-m-d");
// $now = date("Y-m-d H:i:s");

$sql = sprintf("SELECT `orders`.* , `shop`.`address`, `shop`.`mobile`FROM `shop` JOIN `orders` ON `shop`.`name`=`orders`.`shop` WHERE `orders`.`date` >= '%s' ORDER BY `date` ASC ; ", $now);
$stmt = $pdo->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo json_encode($orders, JSON_UNESCAPED_UNICODE);
?>

<?php include __DIR__ . '/../../parts/html-head.php'; ?>

<link rel="stylesheet" href="../css/history.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100&display=swap" rel="stylesheet" />

<?php include __DIR__ . '/../../parts/scripts.php'; ?>
<?php include __DIR__ . '/../../parts/navbar.php'; ?>

<body>

    <div class="header"></div>

    <main>
        <div class="mainblock container-fluid w-75">
            <div class="row">
                <div class="col-6 col-xl-6">
                    <div class="topname">
                        <p>即將前往</p>
                    </div>
                </div>

                <div class="col-6 col-xl-6">
                    <div class="topname1">
                        <a href="<?= WEB_ROOT ?>/J/html/history-noshow2.php">
                            <p>歷史紀錄</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-area column position-relative pt-5 pb-5">
                <?php foreach ($rows as $r) : ?>
                    <div class="card1 d-flex">
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
                        <div class="col-1 col-xl-1"></div>
                        <div class="answer col-1 col-xl-3">
                            <div class="textbox2">
                                <a href="">
                                    <p>查看詳情</p>
                                </a>
                            </div>
                            <div class="textbox1">
                                <button id="cancel-btn" class="cancel-btn btn" type="button" data-toggle="modal" data-target="#exampleModalCenter-<?= $r['sid'] ?>">
                                    取消訂位
                                </button>
                                <div class="qrcode-modal modal fade" id="exampleModalCenter-<?= $r['sid'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content2">
                                            <div class="modal-body2">
                                                <div class="warning">
                                                    <img src="<?= WEB_ROOT ?>J/Gobar-svg-png/PNG/警告.png" alt="">
                                                </div>
                                                <p class="modaltitle title-30">是否確定取消訂位?</p>
                                                <div class="d-flex">
                                                    <button class="m-btn" type="button" data-dismiss="modal" aria-label="Close">返回</button>
                                                    <button id="del" type="submit" onsubmit="delete_it(<?= $r['sid'] ?>); return false;" class="m-btn del-btn" data-sid="<?= $r['sid'] ?>" data-type="delete">
                                                        確定
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>
            </div>
        </div>
    </main>

    <script>
        $('.del-btn').click((e) => {
            e.preventDefault();
            console.log('hi', $('#del').data("sid"))


            $.get('history-del.php', {
                sid: $('#del').data('sid'),
                type: $('#del').data('type'),
            }, function(response) {
                console.log(response);
                alert('您的訂位已取消')
                location.href = "../../J/html/history.php."
            }, 'json');

        });
    </script>

</body>

<?php include __DIR__ . '/../../parts/about.php'; ?>

</html>