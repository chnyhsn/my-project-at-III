<?php include __DIR__ . '/../../parts/config.php'; ?>
<?php

$sql = sprintf("SELECT * FROM `orders` WHERE `noshow`='xxx'");
$stmt = $pdo->query($sql);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo json_encode($orders, JSON_UNESCAPED_UNICODE);
?>

<?php include __DIR__ . '/../../parts/html-head.php'; ?>

<link rel="stylesheet" href="../css/Platinum-trust.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100&display=swap" rel="stylesheet" />

<?php include __DIR__ . '/../../parts/scripts.php'; ?>
<?php include __DIR__ . '/../../parts/navbar.php'; ?>

<body>

  <div class="header"></div>

  <div class="goldline">
    <div id="Member-Centre" class="container-fluid position-relative">
      <div class="big-area row col-12">
        <div class="top-area d-flex">
          <div class="photo col-12 col-xl-2 px-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" viewBox="0 0 160 160">
              <g id="Group_628" data-name="Group 628" transform="translate(-241 -243)">
                <g id="Group_620" data-name="Group 620" transform="translate(41)">
                  <circle id="Ellipse_32" data-name="Ellipse 32" cx="80" cy="80" r="80" transform="translate(200 243)" fill="#236ca6" />
                  <path id="Union_7" data-name="Union 7" d="M0,80V70C0,59,18,50,40,50s40,9,40,20V80ZM20,20A20,20,0,1,1,40,40,20,20,0,0,1,20,20Z" transform="translate(240 283)" fill="#fff" />
                </g>
                <g id="Group_621" data-name="Group 621" transform="translate(36)">
                  <circle id="Ellipse_86" data-name="Ellipse 86" cx="13.5" cy="13.5" r="13.5" transform="translate(311 376)" fill="#ee9235" />
                  <g id="Group_616" data-name="Group 616" transform="translate(-210 81.5)">
                    <rect id="Rectangle_1102" data-name="Rectangle 1102" width="15" height="2" transform="translate(527 307)" fill="#fff" />
                    <rect id="Rectangle_1103" data-name="Rectangle 1103" width="15" height="2" transform="translate(535.5 300.5) rotate(90)" fill="#fff" />
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <!-- phone logout-->
          <div class="phone out col-5 px-0">
            <svg class="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 28 28">
              <defs>
                <clipPath id="clip-path">
                  <rect width="28" height="28" fill="none" />
                </clipPath>
              </defs>
              <g id="Export" clip-path="url(#clip-path)">
                <rect id="Rectangle_570" data-name="Rectangle 570" width="30" height="30" fill="none" />
                <path id="Path_151" data-name="Path 151" d="M2.687,2.687v20.6H15.525v2.687H0V0H15.524V2.687ZM14.629,21.5l-2.09-2.09,4.777-4.777H6.27V11.643H17.614L12.539,6.867l2.09-2.09,8.061,8.061Z" transform="translate(2)" fill="#fff" />
              </g>
            </svg>
            <p class="phone">登出</p>
          </div>
          <!--  -->
          <!-- web -->
          <div class="web name col-xl-2 px-0">
            <p class="web nametop">王曉明</p>
            <p class="web namebottom">訂單累計10筆</p>
            <p class="web namebottom">年度累計3筆</p>
          </div>

          <div class="web name2 col-xl-2 px-0">
            <img src="../Gobar-svg-png/SVG/白金.svg" alt="" width="100" height="100" />
            <p>白金會員</p>
          </div>
          <!--  -->
          <!-- phone -->
          <div class="phone name col-12 col-xl-2 px-0">
            <div class="user col-7">
              <p class="nametop">王曉明</p>
              <p class="namebottom">訂單累計10筆</p>
              <p class="namebottom">年度累計3筆</p>
            </div>
            <div class="name2 col-7 col-xl-2 px-0 d-flex">
              <img src="../Gobar-svg-png/SVG/白金.svg" alt="" width="100" />
              <p>白金會員</p>
            </div>
          </div>
          <!--  -->
          <div class="black-area col-12 col-xl-4 px-0">
            <div class="black-text">
              <h1>白金會員最新優惠</h1>
              <div class="black-text2">
                <p>
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11">
                    <circle id="Ellipse_88" data-name="Ellipse 88" cx="5.5" cy="5.5" r="5.5" fill="#ffd6a2" />
                  </svg>
                  預定酒吧訂金免支付
                </p>
                <p>
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11">
                    <circle id="Ellipse_88" data-name="Ellipse 88" cx="5.5" cy="5.5" r="5.5" fill="#ffd6a2" />
                  </svg>
                  憑預定ＱＲＣode，可享店家飲品9折一杯
                </p>
              </div>
            </div>
          </div>

          <div class="web out col-1 col-xl-2 px-0 d-flex">
            <svg class="web" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 28 28">
              <defs>
                <clipPath id="clip-path">
                  <rect width="28" height="28" fill="none" />
                </clipPath>
              </defs>
              <g id="Export" clip-path="url(#clip-path)">
                <rect id="Rectangle_570" data-name="Rectangle 570" width="30" height="30" fill="none" />
                <path id="Path_151" data-name="Path 151" d="M2.687,2.687v20.6H15.525v2.687H0V0H15.524V2.687ZM14.629,21.5l-2.09-2.09,4.777-4.777H6.27V11.643H17.614L12.539,6.867l2.09-2.09,8.061,8.061Z" transform="translate(2)" fill="#fff" />
              </g>
            </svg>
            <a href="<?= WEB_ROOT ?>/W/pages/logout.php">
              <p class="web">登出</p>
            </a>
          </div>
        </div>

        <div class="aboutme1">
          <a href="<?= WEB_ROOT ?>/J/html/Platinum-about.php">
            <p>關於我</p>
          </a>
        </div>

        <div class="aboutme2">
          <a href="#">
            <p>信用評價</p>
          </a>
        </div>

      </div>

      <div class="bottom-area d-flex col-12 col-xl-12 px-0">
        <div class="b-left-area col-12 col-xl-3">
          <div class="star">

            <svg xmlns="http://www.w3.org/2000/svg" width="220" height="26" viewBox="0 0 220 26">
              <g id="Group_803" data-name="Group 803" transform="translate(-234 -566)">
                <path id="Polygon_2" data-name="Polygon 2" d="M14,0l4.76,7.976L28,9.931l-6.3,6.885L22.652,26,14,22.279,5.348,26,6.3,16.816,0,9.931,9.24,7.976Z" transform="translate(234 566)" fill="#ffeb00" />
                <path id="Polygon_2-2" data-name="Polygon 2" d="M14,0l4.76,7.976L28,9.931l-6.3,6.885L22.652,26,14,22.279,5.348,26,6.3,16.816,0,9.931,9.24,7.976Z" transform="translate(282 566)" fill="#ffeb00" />
                <path id="Polygon_2-3" data-name="Polygon 2" d="M14,0l4.76,7.976L28,9.931l-6.3,6.885L22.652,26,14,22.279,5.348,26,6.3,16.816,0,9.931,9.24,7.976Z" transform="translate(330 566)" fill="#ffeb00" />
                <path id="Polygon_2-4" data-name="Polygon 2" d="M14,0l4.76,7.976L28,9.931l-6.3,6.885L22.652,26,14,22.279,5.348,26,6.3,16.816,0,9.931,9.24,7.976Z" transform="translate(378 566)" fill="#ffeb00" />
                <path id="Path_5809" data-name="Path 5809" d="M14,0l4.76,7.976L28,9.931l-6.3,6.885L22.652,26,14,22.279,5.348,26,6.3,16.816,0,9.931,9.24,7.976Z" transform="translate(426 566)" fill="#fff" />
              </g>
            </svg>

            <p>本月您已違規二次</p>
            <p>違規三次將被停權4週!</p>

          </div>
        </div>

        <div class="b-left-area col-12 col-xl-7">
          <div class="b-left-text">
            <h2>違規次數-2次</h2>
          </div>

          <div class="black-area d-flex col-12 position-relative">

            <svg xmlns="http://www.w3.org/2000/svg" width="93" height="94" viewBox="0 0 93 94">
              <g id="Group_464" data-name="Group 464" transform="translate(-0.307 -0.307)">
                <rect id="Rectangle_1464" data-name="Rectangle 1464" width="93" height="93" rx="15" transform="translate(0.307 1.307)" fill="#fff" />
                <path id="Rectangle_1463" data-name="Rectangle 1463" d="M15,0H78A15,15,0,0,1,93,15V37a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V15A15,15,0,0,1,15,0Z" transform="translate(0.307 0.307)" fill="#ff8d00" />
                <text id="_18" data-name="18" transform="translate(20.308 80.307)" fill="#ff8d00" font-size="42" font-family="NotoSansTC-Bold, Noto Sans TC" font-weight="700">
                  <tspan x="0" y="0"><?= substr($orders[0]["date"], 8, 2) ?></tspan>
                </text>
                <text id="FRIDAY" transform="translate(15.308 23.307)" fill="#fff" font-size="16" font-family="NotoSansTC-Bold, Noto Sans TC" font-weight="700">
                  <tspan x="15" y="0"><?= substr($orders[0]["weekdays"], 0, 3) ?></tspan>
                </text>
              </g>
            </svg>

            <img src="<?= WEB_ROOT ?>data/img/<?= $orders[0]["sid"] ?>.jpg" alt="" width="160" height="140">

            <div class="black-text">
              <h2><?= $orders[0]["shop"] ?></h2>
              <p>訂位時段 : <?= $orders[0]["time"] ?></p>
              <p>訂位人數 : <?= $orders[0]["people"] ?> 位</p>
            </div>

            <div class="error">
              <img src="../Gobar-svg-png/PNG/印章.png" alt="" width="200">
            </div>

            <div class="errorp">
              <p>NO SHOW</p>
            </div>

          </div>

          <div class="black-area d-flex col-12 position-relative">

            <svg xmlns="http://www.w3.org/2000/svg" width="93" height="94" viewBox="0 0 93 94">
              <g id="Group_464" data-name="Group 464" transform="translate(-0.307 -0.307)">
                <rect id="Rectangle_1464" data-name="Rectangle 1464" width="93" height="93" rx="15" transform="translate(0.307 1.307)" fill="#fff" />
                <path id="Rectangle_1463" data-name="Rectangle 1463" d="M15,0H78A15,15,0,0,1,93,15V37a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V15A15,15,0,0,1,15,0Z" transform="translate(0.307 0.307)" fill="#ff8d00" />
                <text id="_18" data-name="18" transform="translate(20.308 80.307)" fill="#ff8d00" font-size="42" font-family="NotoSansTC-Bold, Noto Sans TC" font-weight="700">
                  <tspan x="0" y="0"><?= substr($orders[1]["date"], 8, 2) ?></tspan>
                </text>
                <text id="FRIDAY" transform="translate(15.308 23.307)" fill="#fff" font-size="16" font-family="NotoSansTC-Bold, Noto Sans TC" font-weight="700">
                  <tspan x="15" y="0"><?= substr($orders[1]["weekdays"], 0, 3) ?></tspan>
                </text>
              </g>
            </svg>

            <img src="<?= WEB_ROOT ?>data/img/<?= $orders[1]["sid"] ?>.jpg" alt="" width="160" height="140">

            <div class="black-text">
              <h2><?= $orders[1]["shop"] ?></h2>
              <p>訂位時段 : <?= $orders[1]["time"] ?></p>
              <p>訂位人數 : <?= $orders[1]["people"] ?> 位</p>
            </div>

            <div class="error">
              <img src="../Gobar-svg-png/PNG/印章.png" alt="" width="200">
            </div>

            <div class="errorp">
              <p>NO SHOW</p>
            </div>

          </div>
        </div>

      </div>

    </div>
  </div>

</body>

<?php include __DIR__ . '/../../parts/about.php'; ?>

</html>