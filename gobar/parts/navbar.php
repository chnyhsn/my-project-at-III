<link rel="stylesheet" href="<?= WEB_ROOT ?>css/navbar.css">
<link rel="icon" href="<?= WEB_ROOT ?>img/favicon.png">

<body class="hero-anime">
  <div class="navigation-wrap start-header start-style" style="background-color: #002a4c">
    <div class="navbox">
      <div class="row">
        <div class="col-xl-12 col-12 ">
          <nav class="navbar navbar-expand-md navbar-light">
            <li class="nav-item searchword small pl-4 pl-md-0 ml-0 ml-md-4">
              <img src="<?= WEB_ROOT ?>img/search.svg" alt="" />
            </li>
            <a class="navbar-brand" href="<?= WEB_ROOT ?>M/firstpage.php" target="_self"><img src="<?= WEB_ROOT ?>img/logowhite.svg" alt="" /></a>
            <div class="navslogn"><img src="<?= WEB_ROOT ?>img/navslogn.svg" alt=""></div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto py-4 py-md-0">
                <li class="nav-item searchword pl-4 pl-md-0 ml-0 ml-md-4">
                  <a>
                    <img src="<?= WEB_ROOT ?>img/search.svg" alt="" />
                    <a class="nav-link">搜尋酒吧</a>
                  </a>
                </li>
                <?php if (!isset($_SESSION['gobarUser'])) : ?>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="navlinkicon" href="#">
                      <img src="<?= WEB_ROOT ?>img/favorites.svg" alt="" />
                      <a class="nav-link" role="button" href="#" aria-haspopup="true" aria-expanded="false">我的收藏</a>
                    </a>
                  </li>
                <?php endif ?>
                <?php if (isset($_SESSION['gobarUser'])) : ?>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="navlinkicon" href="<?= WEB_ROOT ?>J/html/Platinum-Favorites.php">
                      <img src="<?= WEB_ROOT ?>img/favorites.svg" alt="" />
                      <a class="nav-link" role="button" href="<?= WEB_ROOT ?>J/html/Platinum-Favorites.php" aria-haspopup="true" aria-expanded="false">我的收藏</a>
                    </a>
                  </li>
                <?php endif ?>

                <?php if (!isset($_SESSION['gobarUser'])) : ?>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="navlinkicon" href="#">
                      <img src="<?= WEB_ROOT ?>img/Clock-right.svg" alt="" />
                      <a class="nav-link" href="#">我的訂單</a>
                    </a>
                  </li>
                <?php endif ?>
                <?php if (isset($_SESSION['gobarUser'])) : ?>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="navlinkicon" href="<?= WEB_ROOT ?>J/html/history.php">
                      <img src="<?= WEB_ROOT ?>img/Clock-right.svg" alt="" />
                      <a class="nav-link" href="<?= WEB_ROOT ?>J/html/history.php">我的訂單</a>
                    </a>
                  </li>
                <?php endif ?>

                <?php if (!isset($_SESSION['gobarUser'])) : ?>
                  <li class="nav-item member pl-4 pl-md-0 ml-0 ml-md-4 " href="#">
                    <a class="navlinkicon" href="<?= WEB_ROOT ?>M/newsign.php">
                      <img src="<?= WEB_ROOT ?>img/member.svg" alt="" />
                      <a class="nav-link" href="<?= WEB_ROOT ?>M/newsign.php">登入/註冊</a>
                    </a>
                  </li>
                <?php endif ?>
                <?php if (isset($_SESSION['gobarUser'])) : ?>
                  <li class="nav-item member pl-4 pl-md-0 ml-0 ml-md-4 " href="#">
                    <a class="navlinkicon" href="<?= WEB_ROOT ?>M/newsign.php">
                      <img src="<?= WEB_ROOT ?>img/member.svg" alt="" />
                      <a class="nav-link" href="<?= WEB_ROOT ?>M/newsign.php">會員中心</a>
                    </a>
                  </li>
                <?php endif ?>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <div class="navslide">
      <div class="searcharea">
        <form class="navsearchform" id="navkeywordform" name="navkeyformname" onsubmit="checkForm2();return false;">
          <div class="navkeywordbox">
            <input class="navinput1" name="navkeywordinput" id="navkeywordinput" type="text" placeholder="輸入關鍵字" />
          </div>
          <select class="navselect" name="" id="navselectareaid">
            <option value="">選擇地區</option>
            <option value="">萬華區</option>
            <option value="">中正區</option>
            <option value="">大安區</option>
            <option value="">信義區</option>
            <option value="">南港區</option>
            <option value="">大同區</option>
            <option value="">中山區</option>
            <option value="">松山區</option>
            <option value="">內湖區</option>
            <option value="">士林區</option>
            <option value="">北投區</option>
            <option value="">文山區</option>
          </select>
          <select class="navselect" name="" id="">
            <option value="">調酒類別</option>
            <option value="">威士忌</option>
            <option value="">琴酒</option>
            <option value="">啤酒</option>
            <option value="">綜合調酒</option>
            <option value="">無菜單調酒</option>
          </select>
          <select class="navselect" name="" id="">
            <option value="">酒吧風格</option>
            <option value="">工業風</option>
            <option value="">英倫風</option>
            <option value="">奢華風</option>
            <option value="">和風</option>
            <option value="">同志酒吧</option>
          </select>
            <button id="navsearchbuttonid" class="navsearchbutton" type="submit"> 搜尋酒吧 </button>
        </form>
      </div>
    </div>
  </div>

  <!-- Link to page
        ================================================== -->

  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
    integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
   -->

  <script>
    // tsai
    $(document).ready(function() {
      $("body.hero-anime").removeClass("hero-anime");
      $(".searchword").click(function() {
        $(".navslide").slideToggle();
      });
    });

    (function($) {
      "use strict";

      $(function() {
        var header = $(".start-style");
        $(window).scroll(function() {
          var scroll = $(window).scrollTop();

          if (scroll >= 10) {
            header.removeClass("start-style").addClass("scroll-on");
          } else {
            header.removeClass("scroll-on").addClass("start-style");
          }
        });
      });
      //Animation

      $(document).ready(function() {
        $("body.hero-anime").removeClass("hero-anime");
      });

      //Menu On Hover

      $("body").on("mouseenter mouseleave", ".nav-item", function(e) {
        if ($(window).width() > 750) {
          var _d = $(e.target).closest(".nav-item");
          _d.addClass("show");
          setTimeout(function() {
            _d[_d.is(":hover") ? "addClass" : "removeClass"]("show");
          }, 1);
        }
      });
    });

 // 這裡是模糊搜尋
 const navkeywordform = $('#navkeywordform')
        const navkeywordinput = $('#navkeywordinput')

        const navsearchbuttonid = document.getElementById('navsearchbuttonid');
        const navselectareaid = $('#navselectareaid');

        function checkForm2() {

            if (
                navkeywordinput.val() != ''
            ) {
                console.log('hi1')

                $.post('<?= WEB_ROOT ?>/W/pages/search-api.php', {
                        keyword: navkeywordinput.val(),
                    },
                    function(data) {
                        // success: true
                        if (data.success) {
                            if (data.keyword) {
                                location.href = `<?= WEB_ROOT ?>W/pages/search-result.php?keyword=${data.keyword}`
                            }
                        }
                    }, 'json');

            } else {
                console.log('hi2')
                window.location.href = '<?= WEB_ROOT ?>E/pages/map2.php';
            }
        }

  </script>
</body>