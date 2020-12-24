<?php include __DIR__ . '/../../parts/config.php'; ?>

<?php

$sql = sprintf("SELECT `orders`.* , `shop`.`address`, `shop`.`mobile`FROM `shop` JOIN `orders` ON `shop`.`name`=`orders`.`shop` ORDER BY `sid` desc limit 1 ; ");
$stmt = $pdo->query($sql);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo json_encode($orders, JSON_UNESCAPED_UNICODE);
// exit;

?>

<?php include __DIR__ . '/../../parts/html-head.php'; ?>

<link rel="stylesheet" href="../css/order-info.css" />

<?php include __DIR__ . '/../../parts/scripts.php'; ?>
<?php include __DIR__ . '/../../parts/navbar.php'; ?>




<body>
  <header></header>

  <div class="container-fluid">
    <div class="title col-xl-12 col-12">
      <p class="phone-title title-40M">訂位資訊</p>
      <p class="remind-text text-20">
        訂位逾時未達店家超過三次，訂位功能將停權兩週
      </p>
    </div>
    <div class="black-bg">
      <div class="web dots1">
        <img src="../img/dots1.png" alt="" />
      </div>
      <div class="web dots2">
        <img src="../img/dots2.png" alt="" />
      </div>

      <div class="info-area row">
        <div class="shop-info col-xl-5 col-12">
          <img src="<?= WEB_ROOT ?>data/img/<?= $orders[0]['shop'] ?>.jpg" alt="" />
          <p class="shop-name title-40M mt-5"><?= $orders[0]["shop"] ?></p>
          <div class="phone-text">
            <p class="address text-20 mb-1">
              地址 : <?= $orders[0]["address"] ?>
            </p>
            <p class="phone-number text-20">電話 : <?= $orders[0]["mobile"] ?></p>
          </div>
        </div>
        <div class="col-xl-4 col-10 text-infom">
          <div class="small-calendar">
            <p class="web text-40B ml-4">
              <?= substr($orders[0]["date"], 0, 4), '/', substr($orders[0]["date"], 5, 2) ?>
            </p>

            <svg class="web" xmlns="http://www.w3.org/2000/svg" width="194" height="194" viewBox="0 0 194 194">
              <g id="Group_459" data-name="Group 459" transform="translate(-630 -854)">
                <rect id="Rectangle_1458" data-name="Rectangle 1458" width="194" height="194" rx="15" transform="translate(630 854)" fill="#fff" />
                <path id="Rectangle_1462" data-name="Rectangle 1462" d="M15,0H179a15,15,0,0,1,15,15V69a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V15A15,15,0,0,1,15,0Z" transform="translate(630 854)" fill="#ff8d00" />
                <text id="_20" data-name="20" transform="translate(673 1016)" fill="#ff8d00" font-size="93" font-family="NotoSansTC-Bold, Noto Sans TC" font-weight="700">
                  <tspan x="0" y="0"><?= substr($orders[0]["date"], 8, 2) ?></tspan>
                </text>
                <text id="FRIDAY" transform="translate(680 904)" fill="#fff" font-size="42" font-family="NotoSansTC-Bold, Noto Sans TC" font-weight="700">
                  <tspan x="0" y="0"><?= substr($orders[0]["weekdays"], 0, 3) ?></tspan>
                </text>
              </g>
            </svg>

            <div class="text-30L info">
              <p class="phone text-40B">訂位日期 :
                <?= substr($orders[0]["date"], 0, 4),
                  '/',
                  substr($orders[0]["date"], 5, 2),
                  '/',
                  substr($orders[0]["date"], 8, 2) ?>
              </p>
              <p>訂位時段 : <?= $orders[0]["time"] ?></p>
              <p>訂位人數 : <?= $orders[0]["people"] ?> 位</p>
              <p>訂位姓名 : <?= $orders[0]["name"] ?> 先生/小姐</p>
              <p>連絡電話 : <?= $orders[0]["phone"] ?></p>
              <p>電子信箱 : <?= $orders[0]["email"] ?></p>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-10 qrcode">
          <div class="">
            <button type="button" class="btn qurcode-btn" data-toggle="modal" data-target="#exampleModalCenter"></button>
          </div>
          <!-- Button trigger modal -->

          <!-- Modal -->
          <div class="qrcode-modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p class="title-30 modal-title" id="exampleModalCenterTitle">
                    訂位QRCODE
                  </p>
                  <button type="button" class="close bgg" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div id="qrcode-size"></div>
                </div>
                <div class="modal-footer">
                  <p class="text-20">訂單編號 : DFGKEJ123</p>
                </div>
              </div>
            </div>
          </div>
          <!-- <img src="../img/Qrcode.png" alt=""> -->
          <p class="qr-text text-20M ml-2">訂位QR CODE</p>

          <div>
            <button id="cancel-btn" class="cancel-btn btn" type="button" data-toggle="modal" data-target="#exampleModalCenter-2">
              取消訂位
            </button>
            <!-- Modal -->
            <div class="qrcode-modal modal fade" id="exampleModalCenter-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content2">
                  <div class="modal-body2">
                    <div class="warning">
                      <img src="../img/警告.png" alt="" />
                    </div>
                    <p class="modaltitle title-30">是否確定取消訂位?</p>
                    <div class="d-flex">
                      <button class="m-btn" type="button" data-dismiss="modal" aria-label="Close">返回</button>
                      <button id="del" type="submit" onsubmit="delete_it(<?= $orders[0]['sid'] ?> )" class="m-btn" data-sid="<?= $orders[0]['sid'] ?>" data-type="delete">
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
    </div>
  </div>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>

  <script>
    $("#qrcode-size").qrcode({
      width: 350,
      height: 350,
      text: "http://www.google.com",
    });







    $('#del').click((e) => {
      e.preventDefault();
      console.log('hi', $('#del').data("sid"))


      $.get('del-order-api.php', {
        sid: $('#del').data('sid'),
        type: $('#del').data('type'),
      }, function(response) {
        console.log(response);
        alert('您的訂位已取消')
        location.href = "<?= WEB_ROOT ?>J/html/history.php."
      }, 'json');

    });
  </script>
</body>
<?php include __DIR__ . '/../../parts/about.php'; ?>

</html>