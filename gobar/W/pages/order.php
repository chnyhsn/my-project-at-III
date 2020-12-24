    <?php include __DIR__ . '/../../parts/config.php'; ?>

    <?php

    //判斷是否有登入會員 如未登入會導到登入頁
    if (!isset($_SESSION['gobarUser'])) {
      header('Location:../../M/newsign.php');
      exit;
    }
    ?>

    <?php include __DIR__ . '/../../parts/html-head.php'; ?>

    <link rel="stylesheet" href="../css/order.css" />
    <link rel="stylesheet" href="../css/calendar.css" />

    <?php include __DIR__ . '/../../parts/scripts.php'; ?>
    <?php include __DIR__ . '/../../parts/navbar.php'; ?>

    <header></header>

    <body>

      <!-- 自動跳出是否同意規範視窗 -->
      <!-- Modal -->
      <div class="qrcode-modal modal fade" id="myModal222" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content2">
            <div class="modal-body2">
              <div class="warning">
                <p>
                  ▸ 請務必確認用餐時間與人數後再進行訂位與付款。
                  <br>
                  ▸ 如欲修改人數/取消訂單，請於用餐 6 小時前至我的訂單，修改/取消訂單資料，
                  取消訂單後，將會進行訂金退款。
                  <br>
                  ▸ 用餐前 6 小時之內，恕無法取消訂位與退費。
                  <br>
                  ▸ 若無取消訂位，用餐時間已過也未出席，將記違規一點，違規累滿三點，將實施停權四週之處分。
                </p>
              </div>
              <p class="modaltitle title-30">是否同意GOBAR上述規範?</p>
              <div class="d-flex">
                <button class="disagree-btn" onclick="history.back()" value="回到上一頁">不同意</button>
                <button class="agree-btn" type="button" data-dismiss="modal" aria-label="Close">同意</button>
              </div>
            </div>
          </div>
        </div>
      </div>

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
            </div>
          </div>
        </div>

        <div class="title-40M row">
          <p class="web col-xl-2 col-12">我要訂位</p>
        </div>

        <div class="row conent-area">
          <div class="col-xl-5 col-10">
            <div class="phone-shop title-30">
              <p id="bar-name"><?= $_GET['name'] ?></p>
            </div>

            <!--    web 日曆    -->
            <div class="calendar-area web">
              <div class="row justify-content-center">
                <div class="date-display d-flex">
                  <span class="mr-3">YEAR</span>
                  <div id="years" class="box"></div>
                </div>
                <div class="date-display d-flex">
                  <span class="mr-3">MONTH</span>
                  <div id="mon" class="box"></div>
                </div>
                <div class="date-display d-flex">
                  <span class="mr-3">DATE</span>
                  <div id="dat" class="box"></div>
                </div>
              </div>
              <div class="d-flex">
                <div class="orange-area">
                  <p id="big-date"></p>
                  <p id="weekdays"></p>
                  <p id="gobar" class="gobar title-20B">GOBAR<br />CALENDAR</p>
                </div>

                <div class="calendar">
                  <div class="title mt-2">
                    <a href="" id="prev"><i class="fas fa-chevron-circle-left"></i></a>
                    <h4 class="white mt-2" id="calendar-title">Month</h4>
                    <h4 class="white mt-2" id="calendar-year">Year</h4>
                    <a href="" id="next"> <i class="fas fa-chevron-circle-right"></i> </a>
                  </div>
                  <div class="body">
                    <div class="lightgrey body-month mt-2">
                      <ul>
                        <li>SUN</li>
                        <li>MON</li>
                        <li>TUE</li>
                        <li>WED</li>
                        <li>THU</li>
                        <li>FRI</li>
                        <li>SAT</li>
                      </ul>
                    </div>
                    <div id="bodyList" class="darkgrey body-list">
                      <ul id="days"></ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="phone-from col-xl-4 col-10">
            <form action="" class="order-form" id="from1">
              <div class="mt-0">
                <!--     phone 日曆    -->
                <div class="phone label-text">
                  <label for="">*為必填</label>
                </div>
                <div class="phone input-area2 mt-0 mb-5">
                  <div class="from-text">
                    <p>*訂位日期 <span>|</span></p>
                  </div>
                  <input id="select-date" type="date" class="inputbox" autocomplete="off" />
                </div>

                <div class="web label-text">
                  <label for="">*為必填</label>
                </div>
                <div class="input-area2 mt-0 mb-4">
                  <div class="from-text">
                    <p>*訂位人數 <span>|</span></p>
                  </div>
                  <select id="persons" class="inputbox">
                    <option>請選擇</option>
                    <option>1 位</option>
                    <option>2 位</option>
                    <option>3 位</option>
                    <option>4 位</option>
                    <option>5 位</option>
                    <option>6 位</option>
                    <option>7 位</option>
                    <option>8 位</option>
                    <option>9 位</option>
                    <option>10 位</option>
                  </select>
                </div>
              </div>
              <div class="mt-0">
                <div class="label-text">
                  <label for="">線上訂位限10人以內，超過10人請來電 </label>
                </div>
                <div class="input-area2 mt-0">
                  <div class="from-text">
                    <p>*預約時段 <span>|</span></p>
                  </div>
                  <select id="time" class="inputbox">
                    <option>請選擇</option>
                    <option value="20:00">20:00</option>
                    <option value="20:30">20:30</option>
                    <option value="21:00">21:00</option>
                    <option value="21:30">21:30</option>
                    <option value="22:00">22:00</option>
                    <option value="22:30">22:30</option>
                    <option value="23:00">23:00</option>
                    <option value="23:30">23:30</option>
                  </select>
                </div>
              </div>
              <div class="input-area2">
                <div class="from-text">
                  <p>*訂位姓名 <span>|</span></p>
                </div>
                <input id="name" class="inputbox" type="text" autocomplete="off" />
                <div id="err1" class="err"></div>
              </div>

              <div class="input-area2">
                <div class="from-text">
                  <p>*連絡電話 <span>|</span></p>
                </div>
                <input id="phonenumber" class="inputbox" type="tel" maxlength="10" autocomplete="off" oninput="value=value.replace(/[^\d]/g,'')" />
                <div id="err2" class="err"></div>
              </div>
              <div class="input-area2">
                <div class="from-text">
                  <p>*電子信箱 <span>|</span></p>
                </div>
                <input id="email" class="inputbox" type="email" autocomplete="off" />
                <div id="err3" class="err"></div>
              </div>

            </form>
          </div>

          <div class="col-xl-3 col-10">
            <form action="" class="text-area mt-1">
              <label for="">備註:</label>
              <br />
              <textarea name="" id="remarks" rows="11"></textarea>
            </form>

            <p id="errormsg"></p>


            <button type="submit" id="send" class="next-btn">下一步</button>

          </div>
        </div>
      </div>




      <script src="../js/calendar.js"></script>
      <script src="../js/order.js"></script>

      <script>
        // const str = document.referrer;
        // const barSid = str.substr(54)
        // console.log(barSid);


        $(document).ready(function() {
          $("#myModal222").modal("show");

        });

        const barName = document.getElementById('bar-name');
        const phone = document.getElementById('phonenumber');
        const remarks = $('#remarks');
        $('#send').click(function(e) {
          e.preventDefault();

          const email_re = /([\w\-]+\@[\w\-]+\.[\w\-]+)/;
          let ymd = `${years.innerHTML}-${mon.innerHTML}-${dat.innerHTML}`

          if (ymd != '' &&
            weekdays.innerHTML != '' &&
            time.valu != '' &&
            persons.value != '' &&
            name.value != '' &&
            phonenumber.value != '' &&
            email_re.test(email.value)) {
            $.post('order-api.php', {
              shop: barName.innerHTML,
              date: ymd,
              weekdays: weekdays.innerHTML,
              time: time.value,
              people: persons.value,
              name: name.value,
              phone: phonenumber.value,
              email: email.value,
              remarks: remarks.val(),
            }, function(response) {
              console.log(response);
              if (JSON.parse(response).success) {
                location.href = "<?= WEB_ROOT ?>W/pages/payment.php"
              }

            })
          }
        });
      </script>
    </body>
    <?php include __DIR__ . '/../../parts/about.php'; ?>

    </html>