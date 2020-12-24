<?php include __DIR__ . '/../../parts/config.php'; ?>

<?php
$sql = sprintf("SELECT * FROM `shop` ORDER BY `sid` ASC");

$stmt = $pdo->query($sql);

$rows = $stmt->fetchAll();

// echo json_encode($rows, JSON_UNESCAPED_UNICODE);
?>

<?php include __DIR__ . '/../../parts/html-head.php'; ?>







<script src="https://masonry.desandro.com/masonry.pkgd.js"></script>
<script type="text/javascript" src="http://code.google.com/apis/gears/gears_init.js"></script>

<link rel="stylesheet" href="../css/map2.css" />
<link rel="stylesheet" href="../js/map.js" />
<?php include __DIR__ . '/../../parts/scripts.php'; ?>
<?php include __DIR__ . '/../../parts/navbar.php'; ?>

<header></header>

<body>
  <section>
    <div class="golden-line d-flex">
      <div class="left col-xl-3 col-sm-6">
        <div class="dropdown-all d-flex">
          <div class="dropdown">
            <button class="dropdown-btn btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              依價位
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">由高至低</a>
              <a class="dropdown-item" href="#">由低至高</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropdown-btn btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              依人氣
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">由高至低</a>
              <a class="dropdown-item" href="#">由低至高</a>
            </div>
          </div>
        </div>
        <div class="search-all">
          <?php foreach ($rows as $r) : ?>
            <div class="search">
              <a href="product-detail.php?sid=<?= $r['sid'] ?>">
                <div class="pic web">
                  <img src="<?= WEB_ROOT ?>data/img/<?= $r['sid'] ?>.jpg" alt="" />
                </div>

                <div class="name-like d-flex justify-content-between">
                  <div class="name">
                    <h2><?= $r['name'] ?></h2>
                  </div>
                  <div class="like">
                    <svg xmlns="http://www.w3.org/2000/svg" width="41.07" height="37.42" viewBox="0 0 41.07 37.42">
                      <path id="Path_848" data-name="Path 848" d="M20.535,37.42C9.494,29.948,3.7,23.151,1.328,17.463-5.035,2.217,13.138-5.073,20.535,3.926c7.4-9,25.57-1.709,19.208,13.536C37.368,23.151,31.577,29.948,20.535,37.42Z" fill="#fff" />
                    </svg>
                  </div>
                </div>
                <div class="address">
                  <p><?= $r['address'] ?></p>
                </div>
                <div class="star-price d-flex justify-content-between">
                  <div class="star d-flex">
                    <svg id="Rating" xmlns="http://www.w3.org/2000/svg" width="105.368" height="16.683" viewBox="0 0 105.368 16.683">
                      <path id="_5" data-name="5" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(87.807 0)" fill="#fff" />
                      <path id="_4" data-name="4" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(65.855 0)" fill="#fff" />
                      <path id="_3" data-name="3" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(43.904 0)" fill="#fff" />
                      <path id="_2" data-name="2" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(21.952 0)" fill="#fff" />
                      <path id="_1" data-name="1" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(0 0)" fill="#fff" />
                    </svg>
                  </div>
                  <div class="star-num">
                    <p><?= $r['evaluation'] ?></p>
                  </div>
                  <div class="price">
                    <p>$<?= $r['price'] ?>起</p>
                  </div>
                </div>
              </a>
            </div>

          <?php endforeach ?>
        </div>
      </div>
      <div class="right col-xl-9 col-sm-6">
        <div id="app" class="container">
          <div id="map" class="google-api embed-responsive embed-responsive-16by9">
          </div>
        </div>
      </div>
    </div>



  </section>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzWsl0DRqMvWAZzlfqJyoNJYS6AjaFBU8"></script>
  <script type="text/javascript">
    function initMap(lat, lng) {
      map = new google.maps.Map(document.getElementById("map"), {
        center: {
          lat: 25.033107551743626,
          lng: 121.56274007557415,
        },
        zoom: 16,
      });
      eqfeed_callback(jsonData)
    }
    let jsonData = [{
        "coordinates": [25.02922479310193, 121.55793887523211]
      },
      {
        "coordinates": [25.03017780646895, 121.55864652468848]
      },
      {
        "coordinates": [25.032896250497124, 121.56371671294588]
      },
      {
        "coordinates": [25.0252243115941, 121.56405305950831]
      },
      {
        "coordinates": [25.04063288121306, 121.57561525566084]
      },
      {
        "coordinates": [25.03559121545551, 121.56920683229094]
      },
      {
        "coordinates": [25.037577653744, 121.55868281791454]
      },
      {
        "coordinates": [25.03355183560994, 121.55559992119882]
      },
      {
        "coordinates": [25.032458736603246, 121.55954320931441]
      },
      {
        "coordinates": [25.032342075952695, 121.5587600104621]
      },
      {
        "coordinates": [25.032225384609244, 121.55829867477901]
      },
      {
        "coordinates": [25.031109536381724, 121.55789734612104]
      },
      {
        "coordinates": [25.037320928110056, 121.56746572721127]
      },
      {
        "coordinates": [25.031099810937384, 121.55814411092341]
      },
      {
        "coordinates": [25.032964085970015, 121.56301933815787]
      },
      {
        "coordinates": [25.034169501000544, 121.55938225893257]
      },

    ];

    const eqfeed_callback = function(results) {
      for (let i = 0; i < results.length; i++) {
        const coords = results[i].coordinates;
        const latLng = new google.maps.LatLng(coords[0], coords[1]);
        new google.maps.Marker({
          position: latLng,
          icon: {
            url: '../../J/Gobar-svg-png/SVG/map-bar.svg',
            scaledSize: new google.maps.Size(50, 60)
          },
          animation: google.maps.Animation.BOUNCE,
          map: map,
        });
      }
    };
    // 瀏覽器支援 HTML5 定位方法
    if (navigator.geolocation) {
      // HTML5 定位抓取
      navigator.geolocation.getCurrentPosition(function(position) {
          mapServiceProvider(position.coords.latitude, position.coords.longitude);
        },
        function(error) {
          switch (error.code) {
            case error.TIMEOUT:
              alert('連線逾時');
              break;

            case error.POSITION_UNAVAILABLE:
              alert('無法取得定位');
              break;

            case error.PERMISSION_DENIED: // 拒絕
              alert('請允許手機的GPS定位功能!');
              break;

            case error.UNKNOWN_ERROR:
              alert('不明的錯誤，請稍候再試');
              break;
          }
        });
    } else { // 不支援 HTML5 定位
      // 若支援 Google Gears
      if (window.google && google.gears) {
        try {
          // 嘗試以 Gears 取得定位
          var geo = google.gears.factory.create('beta.geolocation');
          geo.getCurrentPosition(successCallback, errorCallback, {
            enableHighAccuracy: true,
            gearsRequestAddress: true
          });
        } catch (e) {
          alert('定位失敗請稍候再試');
        }
      } else {
        alert('請允許手機的GPS定位功能!');
      }
    }

    // 取得 Gears 定位發生錯誤
    function errorCallback(err) {
      var msg = 'Error retrieving your location: ' + err.message;
      alert(msg);
    }

    // 成功取得 Gears 定位
    function successCallback(p) {
      mapServiceProvider(p.latitude, p.longitude);
    }

    // 顯示經緯度
    function mapServiceProvider(latitude, longitude) {
      // alert('經緯度：' + latitude + ', ' + longitude);
      initMap();
    }

    // 
  </script>


</body>
<?php include __DIR__ . '/../../parts/about.php'; ?>

</html>