<?php include __DIR__ . '/../../parts/config.php'; ?>
<?php

$sql = sprintf("SELECT `email`,`phone`, `birthday`, `address` FROM `member` ");
$stmt = $pdo->query($sql);
$member = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo json_encode($orders, JSON_UNESCAPED_UNICODE);
?>

<?php include __DIR__ . '/../../parts/html-head.php'; ?>

<link rel="stylesheet" href="../css/favorite-copy.css" />
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
            <img src="./GOBAR/J/Gobar-svg-png/SVG/黃金.svg" alt="" width="100" height="100">
            <p>年度會員</p>
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
              <img src="../htdocs/GOBAR/J/Gobar-svg-png/SVG/黃金.svg" alt="" width="100" height="100">
              <p>年度會員</p>
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
            <p class="web">登出</p>
          </div>
        </div>

        <div class="aboutme1">
          <a href="../html/favorites-copy.php"></a>
          <p>關於我</p>
        </div>

        <div class="aboutme2">
          <a href="../html/trust2.php">
            <p>信用評價</p>
          </a>
        </div>

        <div class="bottom-area col-12">
          <div class="left-area">
            <div class="bottom-text d-flex">
              <div class="bottom-word">
                <p>電子信箱</p>
              </div>
              <div class="text">
                <p><?= $member[0]["email"] ?></p>
              </div>
              <div class="change d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 23 23">
                  <path id="Path_110" data-name="Path 110" d="M11.721,4.423l-8.183,8.4L0,23l10.173-3.317L18.356,11.5ZM22.115,3.76,19.24.885a2.681,2.681,0,0,0-3.981,0L12.827,3.317l6.635,6.856,2.654-2.654A2.8,2.8,0,0,0,23,5.529,2.73,2.73,0,0,0,22.115,3.76Z" fill="#fff" />
                </svg>

                <p>修改</p>

              </div>
            </div>

            <div class="bottom-text d-flex">
              <div class="bottom-word">
                <p>聯絡電話</p>
              </div>
              <div class="text">
                <p><?= $member[0]["phone"] ?></p>
              </div>
            </div>

            <div class="bottom-text d-flex">
              <div class="bottom-word">
                <p>通訊地址</p>
              </div>
              <div class="text">
                <p><?= $member[0]["address"] ?></p>
              </div>
            </div>

            <div class="bottom-text d-flex">
              <div class="bottom-word">
                <p>出生日期</p>
              </div>
              <div class="text">
                <p><?= $member[0]["birthday"] ?></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>

<?php include __DIR__ . '/../../parts/about.php'; ?>

</html>