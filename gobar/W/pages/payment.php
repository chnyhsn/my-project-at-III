

<?php include __DIR__ . '/../../parts/config.php'; ?>
    <?php 
        
      $sql = sprintf("SELECT `shop`,`date`,`weekdays`, `people`, `time` FROM `orders` ORDER BY `sid` desc limit 1 ; ");
      $stmt = $pdo->query($sql);
      $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
        // echo json_encode($orders, JSON_UNESCAPED_UNICODE);
    ?>

<?php include __DIR__ . '/../../parts/html-head.php'; ?>

<link rel="stylesheet" href="../css/payment.css" />
<link rel="stylesheet" href="../css/card.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>

<?php include __DIR__ . '/../../parts/scripts.php'; ?>
<?php include __DIR__ . '/../../parts/navbar.php'; ?>
    



  <body>
    <header></header>

    <div class="web golden-line1"></div>
    <div class="web golden-line2"></div>

    <div class="container-fluid">
      <div class="glass-position">
        <div class="progress-area">
          <div class="progress-line">
            <p>確認中</p>
          </div>
          <div class="progress-line">
            <p>付款中</p>
          </div>
          <div class="progress-line">
            <p>已完成</p>
          </div>
        </div>

        <div class="glass">
          <img src="../img/progress-line3.png" alt="" />
          <div>
            <div class="animate-position">
              <span class="top"></span>
            </div>
            <div class="animate-position1">
              <span class="line"></span>
            </div>
            <div class="animate-position2">
              <span class="fix-yellow"></span>
            </div>
          </div>
        </div>
      </div>

      <!--  -->

      <div class="title-40M ml-4 col-xl-12 col-12">
        <p class="web">訂金付款</p>
      </div>
      <div class="row justify-content-center">

      

        <div class="order-info col-xl-8 col-12">
          <div class="row area-box">
            <div class="date ml-4 col-xl-2 col-4">
              <p class="text-20B"><?= substr($orders[0]["date"], 0, 4) ,'/',substr($orders[0]["date"],5 ,2 )?></p>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="100"
                height="100"
                viewBox="0 0 194 194"
              >
                <g
                  id="Group_459"
                  data-name="Group 459"
                  transform="translate(-630 -854)"
                >
                  <rect
                    id="Rectangle_1458"
                    data-name="Rectangle 1458"
                    width="194"
                    height="194"
                    rx="15"
                    transform="translate(630 854)"
                    fill="#fff"
                  />
                  <path
                    id="Rectangle_1462"
                    data-name="Rectangle 1462"
                    d="M15,0H179a15,15,0,0,1,15,15V69a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V15A15,15,0,0,1,15,0Z"
                    transform="translate(630 854)"
                    fill="#ff8d00"
                  />
                  <text
                    id="_18"
                    data-name="18"
                    transform="translate(673 1016)"
                    fill="#ff8d00"
                    font-size="93"
                    font-family="NotoSansTC-Bold, Noto Sans TC"
                    font-weight="700"
                  >
                    <tspan x="0" y="0"><?=substr($orders[0]["date"], 8, 2)?></tspan>
                  </text>
                  <text
                    id="FRIDAY"
                    transform="translate(684 904)"
                    fill="#fff"
                    font-size="42"
                    font-family="NotoSansTC-Bold, Noto Sans TC"
                    font-weight="700"
                  >
                    <tspan x="0" y="0"><?=substr($orders[0]["weekdays"],0,3)?></tspan>
                  </text>
                </g>
              </svg>
            </div>
            <div class="bar-pic col-xl-3 col-11">
              <img src="<?= WEB_ROOT ?>data/img/<?=$orders[0]['shop']?>.jpg" alt="" />
            </div>
            <div class="info col-xl-4 col-10">
              <p id="bar-name" class="shop-name text-20"><?= $orders[0]["shop"] ?></p>
              <div class="info-text">
                <p class="text-20">訂位時段 : <?= $orders[0]["time"] ?></p>
                <p class="text-20">訂位人數 :  <?= $orders[0]["people"] ?> 位</p>
                <p class="text-20">預付訂金 : <?= $orders[0]["people"] *100 ?> 元</p>
              </div>
            </div>

            <div class="edit col-xl-2 col-6">
            
              <button id="edit-btn" class="edit-btn" onclick="history.back()" value="回到上一頁">修改訂位</button>
            
            </div>
          </div>
        </div>
      </div>
     

      <div class="row justify-content-center mt-5">
        <div class="cardd col-xl-4 col-11">
          <div class="card-type row mb-3">
            <div class="accept col-xl-2 col-3">
              <p>可接受</p>
            </div>
            <div class="visa col-xl-3 col-3">
              <img src="../img/visa.png" alt="" />
            </div>
            <div class="master col-xl-2 col-2">
              <img src="../img/mastercard.png" alt="" />
            </div>
            <div class="jcb col-xl-2 col-2">
              <img src="../img/jcb.png" alt="" />
            </div>
          </div>

          <div class="card-area">
            <div class="preload">
              <div class="creditcard">
                <div class="front">
                  <div id="ccsingle"></div>
                  <svg
                    version="1.1"
                    id="cardfront"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px"
                    y="0px"
                    viewBox="0 0 750 471"
                    style="enable-background: new 0 0 750 471"
                    xml:space="preserve"
                  >
                    <g id="Front">
                      <g id="CardBackground">
                        <g id="Page-1_1_">
                          <g id="amex_1_">
                            <path
                              id="Rectangle-1_1_"
                              class="lightcolor grey"
                              d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                                            C0,17.9,17.9,0,40,0z"
                            />
                          </g>
                        </g>
                        <path
                          id="Path_6157"
                          class="darkcolor greydark"
                          data-name="Path 6157"
                          d="M.5,95.273V312h800V95.273c-126.458-61.416-182.047,38.222-229.758,77.121C558.256,182.576,541.4,192.6,521.3,200.427c-59.585,23.21-145.033,23.666-205.693-65.05C282.659,87.195,210.024,32.017,131.738,32.019,87.764,32.019,42,49.431.5,95.273"
                          transform="translate(-0.5 160)"
                        />
                        <circle
                          id="Ellipse_95"
                          class="darkcolor greydark"
                          data-name="Ellipse 95"
                          cx="38.5"
                          cy="38.5"
                          r="38.5"
                          transform="translate(345 205)"
                        ></circle>
                        <circle
                          id="Ellipse_96"
                          class="darkcolor greydark"
                          data-name="Ellipse 96"
                          cx="25"
                          cy="25"
                          r="25"
                          transform="translate(460 290)"
                        />
                        <circle
                          id="Ellipse_97"
                          class="darkcolor greydark"
                          data-name="Ellipse 97"
                          cx="18"
                          cy="18"
                          r="18"
                          transform="translate(530 175)"
                        />
                      </g>
                      <text
                        transform="matrix(1 0 0 1 60.106 295.0121)"
                        id="svgnumber"
                        class="st2 st3 st4"
                      >
                        1234 5678 9012 3456
                      </text>
                      <text
                        transform="matrix(1 0 0 1 54.1064 428.1723)"
                        id="svgname"
                        class="st2 st5 st6"
                      >
                        KEVIN CHOU
                      </text>
                      <text
                        transform="matrix(1 0 0 1 54.1074 389.8793)"
                        class="st7 st5 st8"
                      >
                        cardholder name
                      </text>
                      <text
                        transform="matrix(1 0 0 1 479.7754 388.8793)"
                        class="st7 st5 st8"
                      >
                        expiration
                      </text>
                      <text
                        transform="matrix(1 0 0 1 65.1054 241.5)"
                        class="st7 st5 st8"
                      >
                        card number
                      </text>
                      <g>
                        <text
                          transform="matrix(1 0 0 1 574.4219 433.8095)"
                          id="svgexpire"
                          class="st2 st5 st9"
                        >
                          01/25
                        </text>
                        <text
                          transform="matrix(1 0 0 1 479.3848 417.0097)"
                          class="st2 st10 st11"
                        >
                          VALID
                        </text>
                        <text
                          transform="matrix(1 0 0 1 479.3848 435.6762)"
                          class="st2 st10 st11"
                        >
                          THRU
                        </text>
                        <polygon
                          class="st2"
                          points="554.5,421 540.4,414.2 540.4,427.9 		"
                        />
                      </g>
                      <g id="cchip">
                        <g>
                          <path
                            class="st13"
                            d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                              c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z"
                          />
                        </g>
                        <g>
                          <g>
                            <rect
                              x="82"
                              y="70"
                              class="st12"
                              width="2.5"
                              height="60"
                            />
                          </g>
                          <g>
                            <rect
                              x="167.4"
                              y="70"
                              class="st12"
                              width="2.5"
                              height="60"
                            />
                          </g>
                          <g>
                            <path
                              class="st12"
                              d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                                            c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                                            C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                                            c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                                            c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z"
                            />
                          </g>
                          <g>
                            <rect
                              x="82.8"
                              y="82.1"
                              class="st12"
                              width="25.8"
                              height="2.5"
                            />
                          </g>
                          <g>
                            <rect
                              x="82.8"
                              y="117.9"
                              class="st12"
                              width="26.1"
                              height="2.5"
                            />
                          </g>
                          <g>
                            <rect
                              x="142.4"
                              y="82.1"
                              class="st12"
                              width="25.8"
                              height="2.5"
                            />
                          </g>
                          <g>
                            <rect
                              x="142"
                              y="117.9"
                              class="st12"
                              width="26.2"
                              height="2.5"
                            />
                          </g>
                        </g>
                      </g>
                    </g>
                    <g id="Back"></g>
                  </svg>
                </div>

                <div class="back">
                  <svg
                    version="1.1"
                    id="cardback"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px"
                    y="0px"
                    viewBox="0 0 750 471"
                    style="enable-background: new 0 0 750 471"
                    xml:space="preserve"
                  >
                    <g id="Front">
                      <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                    </g>
                    <g id="Back">
                      <g id="Page-1_2_">
                        <g id="amex_2_">
                          <path
                            id="Rectangle-1_2_"
                            class="darkcolor greydark"
                            d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                                        C0,17.9,17.9,0,40,0z"
                          />
                        </g>
                      </g>
                      <rect y="61.6" class="st2" width="750" height="78" />
                      <g>
                        <path
                          class="st3"
                          d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                                    C707.1,246.4,704.4,249.1,701.1,249.1z"
                        />
                        <rect
                          x="42.9"
                          y="198.6"
                          class="st4"
                          width="664.1"
                          height="10.5"
                        />
                        <rect
                          x="42.9"
                          y="224.5"
                          class="st4"
                          width="664.1"
                          height="10.5"
                        />
                        <path
                          class="st5"
                          d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z"
                        />
                      </g>
                      <text
                        transform="matrix(1 0 0 1 621.999 227.2734)"
                        id="svgsecurity"
                        class="st6 st7"
                      >
                        666
                      </text>
                      <g class="st8">
                        <text
                          transform="matrix(1 0 0 1 518.083 280.0879)"
                          class="st9 st6 st10"
                        >
                          security code
                        </text>
                      </g>
                      <rect
                        x="58.1"
                        y="378.6"
                        class="st11"
                        width="375.5"
                        height="13.5"
                      />
                      <rect
                        x="58.1"
                        y="405.6"
                        class="st11"
                        width="421.7"
                        height="13.5"
                      />
                      <text
                        transform="matrix(1 0 0 1 59.5073 228.6099)"
                        id="svgnameback"
                        class="st12 st13"
                      >
                        Kevin Chou
                      </text>
                    </g>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-12 mt-3">
          <div class="form-container">
            <div class="field-container">
              <label for="cardnumber">信用卡卡號</label>
              <input
                id="cardnumber"
                type="text"
                pattern="[0-9]*"
                inputmode="numeric"
              />
              <svg
                id="ccicon"
                class="ccicon"
                width="750"
                height="471"
                viewBox="0 0 750 471"
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              ></svg>
            </div>
            <div class="field-container">
              <label for="name">持卡人姓名</label>
              <input id="name" maxlength="20" type="text" autocomplete="off" />
            </div>
            <div class="field-container">
              <label for="expirationdate">有效年月 (mm/yy)</label>
              <input
                id="expirationdate"
                type="text"
                pattern="[0-9]*"
                inputmode="numeric"
              />
            </div>

            <div class="field-container">
              <label for="securitycode">背面末三碼</label>
              <input
                id="securitycode"
                type="text"
                pattern="[0-9]*"
                inputmode="numeric"
              />
            </div>
          </div>
          <div class="confirm mt-5 d-flex justify-content-end">
            <p id="errormsg"></p>
            <button id="confirm-btn" class="confirm-btn col-4">確認付款</button>
          </div>
        </div>
      </div>
    </div>


    <script src="../js/card.js"></script>
    
    
  </body>
  <?php include __DIR__ . '/../../parts/about.php'; ?>
</html>
