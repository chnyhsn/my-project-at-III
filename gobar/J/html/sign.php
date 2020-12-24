<?php include __DIR__ . '/../../parts/config.php'; ?>
<?php include __DIR__ . '/../../parts/html-head.php'; ?>

<link rel="stylesheet" href="../css/sign.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100&display=swap" rel="stylesheet" />

<?php include __DIR__ . '/../../parts/scripts.php'; ?>
<!-- <?php include __DIR__ . '/../../parts/navbar.php'; ?>   -->

<body>

  <!-- Button trigger modal -->

  <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="91" height="78.999" viewBox="0 0 91 78.999">
      <g id="Group_699" data-name="Group 699" transform="translate(-6210 11879.999)">
        <g id="Group_392" data-name="Group 392" transform="translate(6242.096 -11880.197)">
          <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="9.5" cy="9" rx="9.5" ry="9" transform="translate(3.904 0.198)" fill="#000" />
          <rect id="Rectangle_24" data-name="Rectangle_24" width="27" height="15" rx="7.5" transform="translate(-0.096 22.198)" fill="#000" />
        </g>
        <g id="Group_396" data-name="Group 396" transform="translate(6203 -11872)">
          <text id="登入_註冊" data-name="登入/註冊" transform="translate(7 65)" fill="#000" font-size="20" font-family="NotoSansTC-Regular, Noto Sans TC" letter-spacing="0.03em">
            <tspan x="0" y="0">登入/註冊</tspan>
          </text>
        </g>
      </g>
    </svg>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            <svg id="logo" data-name="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="120" height="106" viewBox="0 0 120.992 106.866">

              <defs>
                <clipPath id="clip-path">
                  <rect id="Rectangle_1593" data-name="Rectangle 1593" width="120.992" height="106.866" fill="none" />
                </clipPath>
              </defs>

              <g id="Group_600" data-name="Group 600" clip-path="url(#clip-path)">
                <path id="Path_382" data-name="Path 382" d="M0,93.81V90.441q0-5.322,2.8-8.31a10.076,10.076,0,0,1,7.734-2.986,10.719,10.719,0,0,1,7.926,2.986q2.1,2.108,2.106,6.318H15.583q0-4.554-4.862-4.557a5.08,5.08,0,0,0-2.47.556,4.278,4.278,0,0,0-1.513,1.283,5.739,5.739,0,0,0-.765,2.143,16.567,16.567,0,0,0-.306,2.374q-.039.958-.039,2.566t.019,2.163q.02.555.116,1.8a6.729,6.729,0,0,0,.3,1.78q.212.536.613,1.378A2.565,2.565,0,0,0,7.7,101.122a6.492,6.492,0,0,0,3.562,1,4.825,4.825,0,0,0,4.709-2.834V97.448H12.673V93h7.849v8.233a8.429,8.429,0,0,1-3.751,4.212,11.85,11.85,0,0,1-5.821,1.417q-5.781,0-8.366-3.236T0,93.81" fill="#fff" />
                <path id="Path_383" data-name="Path 383" d="M46.062,91.743V93.81q0,6.855-2.585,9.955t-8.289,3.1q-5.706,0-8.252-3.1T24.39,93.695v-1.99q0-6.357,2.585-9.458t8.194-3.1q5.609,0,8.251,3.14t2.642,9.458M40.74,93.695V92.279a15.389,15.389,0,0,0-.919-5.858q-1.073-2.529-4.595-2.529-3.561,0-4.633,2.529a15.439,15.439,0,0,0-.88,5.858v1.416q0,4.939,1.378,6.662A4.239,4.239,0,0,0,32.68,101.6a5.678,5.678,0,0,0,2.527.517,5.746,5.746,0,0,0,2.508-.5,4.471,4.471,0,0,0,1.608-1.227,5.122,5.122,0,0,0,.881-1.914,17.815,17.815,0,0,0,.536-4.786" fill="#ff8d00" />
                <path id="Path_384" data-name="Path 384" d="M70.489,98.788a7.1,7.1,0,0,1-7.772,7.848H59.04q-4.518,0-6.413-1.569t-1.9-5.438V79.375H62.257q3.9,0,5.878,1.953a7.417,7.417,0,0,1,1.971,5.513,5.849,5.849,0,0,1-1.053,3.523,6.329,6.329,0,0,1-2.316,2.067q3.751,1.763,3.752,6.357m-8.653-8.769a2.948,2.948,0,0,0,0-5.9H56.055v5.9Zm3.331,8.5a4.871,4.871,0,0,0-.651-2.775,2.646,2.646,0,0,0-2.335-.939H56.055v4.288a2.619,2.619,0,0,0,.784,2.183,4.247,4.247,0,0,0,2.585.613h2.757q2.985,0,2.986-3.37" fill="#fff" />
                <path id="Path_385" data-name="Path 385" d="M96.6,106.635H91.05l-1.531-4.709H80.367l-1.493,4.709H73.322l8.731-24.963a4.239,4.239,0,0,1,1.282-1.8,2.959,2.959,0,0,1,1.742-.5,2.774,2.774,0,0,1,1.666.459,3.881,3.881,0,0,1,1.129,1.838Zm-8.308-9.188-3.217-10.8-3.369,10.8Z" fill="#ff8d00" />
                <path id="Path_386" data-name="Path 386" d="M120.992,106.636h-6.164l-5.322-10.108h-3.829v10.108h-5.322v-21.4a6.048,6.048,0,0,1,1.416-4.46q1.416-1.4,4.748-1.4h4.518a8.343,8.343,0,0,1,8.845,8.73,7.981,7.981,0,0,1-1.436,4.766,7.446,7.446,0,0,1-3.541,2.777Zm-7.524-15.717a4.094,4.094,0,0,0,1.092-2.91,3.843,3.843,0,0,0-1.054-2.815,3.767,3.767,0,0,0-2.813-1.072H108.05a2.115,2.115,0,0,0-2.373,2.412v5.553h5.016a3.634,3.634,0,0,0,2.775-1.168" fill="#fff" />
                <path id="Path_387" data-name="Path 387" d="M68.069,36.18A24.279,24.279,0,1,1,43.791,11.9,24.278,24.278,0,0,1,68.069,36.18" fill="#ff8d00" />
                <path id="Path_388" data-name="Path 388" d="M76.934,0A35.935,35.935,0,0,0,60.38,4.027a36.193,36.193,0,1,0-1.484,65V60.247a29.806,29.806,0,1,1,7.514,4.139A36.122,36.122,0,0,0,79.97,36.18V33.144H56.6a3.036,3.036,0,0,0,0,6.072H73.746A30.083,30.083,0,0,1,61.828,60.248v8.783A36.17,36.17,0,1,0,76.934,0M40.755,36.18a36.12,36.12,0,0,0,13.556,28.2,30.1,30.1,0,1,1,.008-56.414A36.126,36.126,0,0,0,40.755,36.18" fill="#fff" />
              </g>

            </svg>
          </h5>
        </div>

        <div class="modal-sign">
          <h3>會員登入</h3>
        </div>

        <div class="sign-text d-flex">
          <div class="line"></div>
          <p>用以下用以下帳號登入</p>
          <div class="line"></div>
        </div>

        <div class="icon d-flex">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="51" viewBox="0 0 50 51">
            <g id="FB" transform="translate(-987 -357)">
              <g id="Group_596" data-name="Group 596">
                <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(987 357)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1">
                  <ellipse cx="25" cy="25.5" rx="25" ry="25.5" stroke="none" />
                  <ellipse cx="25" cy="25.5" rx="24.5" ry="25" fill="none" />
                </g>
                <path id="Subtraction_1" data-name="Subtraction 1" d="M13.687,26H11A11,11,0,0,1,0,15V11A11,11,0,0,1,11,0h4A11,11,0,0,1,26,11v4a11,11,0,0,1-8.745,10.768V17.59h3.027l.433-3.46h-3.46V11.968c0-.805.2-1.73,1.73-1.73h1.838V7.1c-.163,0-.415-.015-.735-.034C19.57,7.038,18.861,7,18.12,7a4.163,4.163,0,0,0-4.433,4.541v2.595H10.66v3.46h3.028V26Z" transform="translate(999 369)" fill="#3872eb" />
              </g>
            </g>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="51" height="51" viewBox="0 0 51 51">

            <defs>
              <linearGradient id="linear-gradient" x1="0.089" y1="0.11" x2="0.945" y2="1" gradientUnits="objectBoundingBox">
                <stop offset="0" stop-color="#6f88ff" />
                <stop offset="0.377" stop-color="#ff4695" />
                <stop offset="1" stop-color="#ffdc80" />
              </linearGradient>
            </defs>

            <g id="IG" transform="translate(-1085 -357)">
              <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(1085 357)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1">
                <circle cx="25.5" cy="25.5" r="25.5" stroke="none" />
                <circle cx="25.5" cy="25.5" r="25" fill="none" />
              </g>
              <path id="Path_236" data-name="Path 236" d="M13.168,2.341a40.376,40.376,0,0,1,5.267.146,6.786,6.786,0,0,1,2.487.439A5.138,5.138,0,0,1,23.41,5.413,6.786,6.786,0,0,1,23.849,7.9c0,1.317.146,1.756.146,5.267a40.375,40.375,0,0,1-.146,5.267,6.786,6.786,0,0,1-.439,2.487,5.138,5.138,0,0,1-2.487,2.487,6.786,6.786,0,0,1-2.487.439c-1.317,0-1.756.146-5.267.146A40.375,40.375,0,0,1,7.9,23.849a6.786,6.786,0,0,1-2.487-.439,5.138,5.138,0,0,1-2.487-2.487,6.786,6.786,0,0,1-.439-2.487c0-1.317-.146-1.756-.146-5.267A40.376,40.376,0,0,1,2.487,7.9a6.786,6.786,0,0,1,.439-2.487A5.255,5.255,0,0,1,3.95,3.95,2.474,2.474,0,0,1,5.413,2.926,6.786,6.786,0,0,1,7.9,2.487a40.376,40.376,0,0,1,5.267-.146m0-2.341A43.231,43.231,0,0,0,7.754.146,9.033,9.033,0,0,0,4.536.732,5.728,5.728,0,0,0,2.195,2.195,5.728,5.728,0,0,0,.732,4.536,6.666,6.666,0,0,0,.146,7.754,43.231,43.231,0,0,0,0,13.168a43.231,43.231,0,0,0,.146,5.413A9.033,9.033,0,0,0,.732,21.8a5.728,5.728,0,0,0,1.463,2.341A5.728,5.728,0,0,0,4.536,25.6a9.033,9.033,0,0,0,3.219.585,43.231,43.231,0,0,0,5.413.146,43.231,43.231,0,0,0,5.413-.146A9.033,9.033,0,0,0,21.8,25.6a6.138,6.138,0,0,0,3.8-3.8,9.033,9.033,0,0,0,.585-3.219c0-1.463.146-1.9.146-5.413a43.231,43.231,0,0,0-.146-5.413A9.033,9.033,0,0,0,25.6,4.536a5.728,5.728,0,0,0-1.463-2.341A5.728,5.728,0,0,0,21.8.732,9.033,9.033,0,0,0,18.581.146,43.231,43.231,0,0,0,13.168,0m0,6.438a6.622,6.622,0,0,0-6.73,6.73,6.73,6.73,0,1,0,6.73-6.73m0,11.12a4.311,4.311,0,0,1-4.389-4.389,4.311,4.311,0,0,1,4.389-4.389,4.311,4.311,0,0,1,4.389,4.389,4.311,4.311,0,0,1-4.389,4.389M20.191,4.536A1.609,1.609,0,1,0,21.8,6.145a1.624,1.624,0,0,0-1.609-1.609" transform="translate(1097 369)" fill-rule="evenodd" fill="url(#linear-gradient)" />
            </g>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="51" viewBox="0 0 50 51">
            <g id="line" transform="translate(-1184 -357)">
              <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(1184 357)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1">
                <ellipse cx="25" cy="25.5" rx="25" ry="25.5" stroke="none" />
                <ellipse cx="25" cy="25.5" rx="24.5" ry="25" fill="none" />
              </g>
              <g id="Group_351" data-name="Group 351" transform="translate(1194 368)">
                <path id="Path_235" data-name="Path 235" d="M-130.6-166.465A16.619,16.619,0,0,0-141.079-170a16.619,16.619,0,0,0-10.483,3.535,11.227,11.227,0,0,0-4.438,8.74,11.151,11.151,0,0,0,4,8.365,16.127,16.127,0,0,0,8.774,3.781v3.256a.874.874,0,0,0,.874.874c1.512,0,5.606-1.856,9.062-4.519a22.2,22.2,0,0,0,4.917-5.078,11.9,11.9,0,0,0,2.219-6.679,11.227,11.227,0,0,0-4.438-8.74Zm-15.813,12.425h-2.969a.708.708,0,0,1-.8-.646v-6.087c0-.381.35-.637.871-.637s.871.256.871.637v5.141h2.023c.369,0,.627.327.627.8s-.264.8-.627.8Zm2.8-.646c0,.375-.366.646-.871.646s-.871-.266-.871-.646v-6.087c0-.381.35-.637.871-.637s.871.256.871.637Zm5.957,0c0,.375-.366.646-.871.646a.986.986,0,0,1-.932-.52l-1.521-2.844v2.718c0,.375-.366.646-.871.646s-.871-.266-.871-.646v-6.078c0-.387.35-.646.871-.646.564,0,.82.176,1.14.786l1.313,2.537v-2.687c0-.381.35-.637.871-.637s.871.256.871.637Zm3.794-3.784a.688.688,0,0,1,.646.749.68.68,0,0,1-.646.73h-1.161v1.358h2.388c.375,0,.646.339.646.805a.7.7,0,0,1-.646.787h-3.334a.708.708,0,0,1-.8-.646v-6.078a.708.708,0,0,1,.8-.646h3.334a.7.7,0,0,1,.646.787c0,.467-.272.805-.646.805h-2.388v1.349Zm0,0" transform="translate(156 170)" fill="#00c300" />
              </g>
            </g>
          </svg>
        </div>

        <div class="sign-text d-flex">
          <div class="line"></div>
          <p>用GoBar帳號登入</p>
          <div class="line"></div>
        </div>

        <div class="account">
          <div class="input-group flex-nowrap">
            <input type="text" id="account" class="form-control" placeholder="輸入手機或電子郵件" aria-label="Username" aria-describedby="addon-wrapping">
            <div id="err1" class="err"></div>
          </div>
        </div>

        <div class="password">
          <div class="input-group flex-nowrap">
            <input id="inputpassword" type="text" class="form-control" placeholder="輸入密碼" aria-label="Username" aria-describedby="addon-wrapping">
            <div id="err2" class="err"></div>
          </div>
        </div>

        <button id="send" type="button" class="btn btn-orange">會員登入</button>
        <div id="errormsg"></div>

        <div class="member-text d-flex">
          <p><input class="w3-check" type="checkbox" checked="checked">
            <label>記住帳號</label></p>
          <p>忘記密碼</p>
        </div>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">加入會員</button>

      </div>
    </div>
  </div>

  <script src="<?= WEB_ROOT ?>/J/js/sign.js"></script>

  <script>
    const email = $('#email'),
      password = $('#password'),
      info_bar = $('#info_bar')

    function checkForm() {

      $.post('sign-api.php', {
        email: email.val(),
        password: password.val()
      }, function(data) {
        if (data.success) {
          info_bar
            .removeClass('alert-danger')
            .addClass('alert-success')
            .text('登入成功');
          location.href = 'Platinum-favorite.php';
        } else {
          info_bar
            .removeClass('alert-success')
            .addClass('alert-danger')
            .text('登入失敗');
        }
        info_bar.slideDown();

        setTimeout(function() {
          info_bar.slideUp();
        }, 2000);
      }, 'json');
    }
  </script>

</body>

</html>