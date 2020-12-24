<?php include __DIR__ . '/../parts/config.php'; ?>
<?php include __DIR__ . '/../parts/html-head.php'; ?>
<?php include __DIR__ . '/../parts/scripts.php'; ?>
<?php include __DIR__ . '/../parts/navbar.php'; ?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> -->
<!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://masonry.desandro.com/masonry.pkgd.js"></script> -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>M/css/companypag.css">
<link rel="stylesheet" href="../js/product.js">
<link rel="stylesheet" href="../css/product_rwd.css">

<body>
    <div id="companypagetop" class="companypagbox"></div>
    <section>
        <div class=" store">
            <div class="store-name d-flex">
                <input class="inputstore-name" placeholder="✎輸入店家名稱"></input>
            </div>
            <form class="titlepc" action="" method="post" enctype="multipart/form-data" onclick="field.click()">
                <input type="file" class="inputbigpc" name="avatar" accept="image/*" onchange="previewFile()"></input>
                <img id="inputbigimg" src="<?= WEB_ROOT ?>img/addimg.svg" alt="Image preview...">

            </form>
            <div class="information-bar position-absolute d-block w-100">
                <div class="information">
                    <div class="star">
                        <svg xmlns="http://www.w3.org/2000/svg" width="295" height="33" viewBox="0 0 295 33">
                            <g id="Group_804" data-name="Group 804" transform="translate(-317.5 -916.06)">
                                <path id="Polygon_1" data-name="Polygon 1" d="M16.616,1.674a1,1,0,0,1,1.768,0l4.485,8.49a1,1,0,0,0,.718.519l9.517,1.6a1,1,0,0,1,.546,1.688l-6.738,6.832a1,1,0,0,0-.277.849l1.4,9.462a1,1,0,0,1-1.43,1.044L17.941,27.9a1,1,0,0,0-.882,0L8.394,32.16a1,1,0,0,1-1.43-1.044l1.4-9.462a1,1,0,0,0-.277-.849L1.35,13.974A1,1,0,0,1,1.9,12.286l9.517-1.6a1,1,0,0,0,.718-.519Z" transform="translate(317.5 916.06)" fill="gold" />
                                <path id="Polygon_1-2" data-name="Polygon 1" d="M16.616,1.674a1,1,0,0,1,1.768,0l4.485,8.49a1,1,0,0,0,.718.519l9.517,1.6a1,1,0,0,1,.546,1.688l-6.738,6.832a1,1,0,0,0-.277.849l1.4,9.462a1,1,0,0,1-1.43,1.044L17.941,27.9a1,1,0,0,0-.882,0L8.394,32.16a1,1,0,0,1-1.43-1.044l1.4-9.462a1,1,0,0,0-.277-.849L1.35,13.974A1,1,0,0,1,1.9,12.286l9.517-1.6a1,1,0,0,0,.718-.519Z" transform="translate(382.5 916.06)" fill="gold" />
                                <path id="Polygon_1-3" data-name="Polygon 1" d="M16.616,1.674a1,1,0,0,1,1.768,0l4.485,8.49a1,1,0,0,0,.718.519l9.517,1.6a1,1,0,0,1,.546,1.688l-6.738,6.832a1,1,0,0,0-.277.849l1.4,9.462a1,1,0,0,1-1.43,1.044L17.941,27.9a1,1,0,0,0-.882,0L8.394,32.16a1,1,0,0,1-1.43-1.044l1.4-9.462a1,1,0,0,0-.277-.849L1.35,13.974A1,1,0,0,1,1.9,12.286l9.517-1.6a1,1,0,0,0,.718-.519Z" transform="translate(447.5 916.06)" fill="gold" />
                                <path id="Path_6156" data-name="Path 6156" d="M16.616,1.674a1,1,0,0,1,1.768,0l4.485,8.49a1,1,0,0,0,.718.519l9.517,1.6a1,1,0,0,1,.546,1.688l-6.738,6.832a1,1,0,0,0-.277.849l1.4,9.462a1,1,0,0,1-1.43,1.044L17.941,27.9a1,1,0,0,0-.882,0L8.394,32.16a1,1,0,0,1-1.43-1.044l1.4-9.462a1,1,0,0,0-.277-.849L1.35,13.974A1,1,0,0,1,1.9,12.286l9.517-1.6a1,1,0,0,0,.718-.519Z" transform="translate(512.5 916.06)" fill="gold" />
                                <path id="Polygon_1-4" data-name="Polygon 1" d="M16.616,1.674a1,1,0,0,1,1.768,0l4.485,8.49a1,1,0,0,0,.718.519l9.517,1.6a1,1,0,0,1,.546,1.688l-6.738,6.832a1,1,0,0,0-.277.849l1.4,9.462a1,1,0,0,1-1.43,1.044L17.941,27.9a1,1,0,0,0-.882,0L8.394,32.16a1,1,0,0,1-1.43-1.044l1.4-9.462a1,1,0,0,0-.277-.849L1.35,13.974A1,1,0,0,1,1.9,12.286l9.517-1.6a1,1,0,0,0,.718-.519Z" transform="translate(577.5 916.06)" fill="gold" />
                            </g>
                        </svg>

                    </div>
                    <div class="infosection d-flex">
                        <div class="address">
                            <input class="inputaddress" placeholder="✎輸入店家地址"></input>
                            <input class="inputphon" placeholder="✎輸入店家電話"></input>
                        </div>
                        <div class="business-hour">
                            <input class="inputhour" placeholder="✎輸入營業時間"></input>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="news">
                <div class="news-title-wrap d-flex">
                    <div class="news-title">
                        <input class="inputnews-title" placeholder="為自己店家下個浪漫的標題"></input>
                    </div>
                    <div class="share">
                        <a href="#"><svg id="Group_706" data-name="Group 706" xmlns="http://www.w3.org/2000/svg" width="177" height="55" viewBox="0 0 177 55">
                                <g id="_Trailing_icon_2" data-name="📍Trailing icon 2" transform="translate(11 11)">
                                    <rect id="Boundary" width="34" height="34" fill="none" />
                                    <path id="_Color" data-name=" ↳Color" d="M23.333,21.2a4.612,4.612,0,0,0-3.049,1.16L9.193,16.114a4.782,4.782,0,0,0,.14-1.054,4.782,4.782,0,0,0-.14-1.054L20.16,7.816a4.73,4.73,0,0,0,3.173,1.22A4.588,4.588,0,0,0,28,4.518a4.669,4.669,0,0,0-9.333,0,4.782,4.782,0,0,0,.14,1.054L7.84,11.762a4.73,4.73,0,0,0-3.173-1.22,4.52,4.52,0,1,0,0,9.036,4.73,4.73,0,0,0,3.173-1.22l11.076,6.265a4.121,4.121,0,0,0-.124.979,4.545,4.545,0,1,0,4.542-4.4Z" transform="translate(3 1.291)" fill="#fff" />
                                </g>
                                <g id="Rectangle_737" data-name="Rectangle 737" fill="none" stroke="#fff" stroke-width="1">
                                    <rect width="177" height="55" rx="27.5" stroke="none" />
                                    <rect x="0.5" y="0.5" width="176" height="54" rx="27" fill="none" />
                                </g>
                                <text id="Share" transform="translate(66 38)" fill="#fff" font-size="30" font-family="ArialMT, Arial">
                                    <tspan x="0" y="0">Share</tspan>
                                </text>
                            </svg></a>

                    </div>
                </div>
                <div class="news-content d-flex">

                    <div class="news-content-title">
                        <input class="features" placeholder="寫下店家特點"></input>
                        <textarea class="featurescontain" placeholder="詳述店家特點"></textarea>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="line01">
        <div class="container-fluid">

            <div class="water-fall ">
                <h3>店家空間介紹</h3>
                <div class="water-fall-col cc position-relative">
                    <form class="col-item  col-item--height2 position-absolute" method="post" enctype="multipart/form-data" onclick="field2.click()">
                        <input type="file" class="medpc1" accept="image/*" onchange="previewFile2()">
                        <img id="mdepc1img" src="<?= WEB_ROOT ?>img/addimg.svg" alt="Image preview...">
                    </form>
                    <div class="col-item col-item--height3 position-absolute">

                        <h3>STORE STYLE</h3>
                        <h4>店家風格</h4>
                        <textarea class="introcontain2" placeholder="簡述店家">
                        </textarea>
                    </div>
                    <form class="col-item col-item--weight1 position-absolute" method="post" enctype="multipart/form-data" onclick="field3.click()">
                        <input type="file" class="medpc2" accept="image/*" onchange="previewFile3()">
                        <img id="mdepc2img" src="<?= WEB_ROOT ?>img/addimg.svg" alt="">
                    </form>
                    <form class="col-item col-item--weight2 position-absolute" method="post" enctype="multipart/form-data" onclick="field4.click()">
                        <input type="file" class="medpc3" accept="image/*" onchange="previewFile4()">
                        <img id="mdepc3img" src="<?= WEB_ROOT ?>img/addimg2.jpg" alt="">

                    </form>
                    <form class="col-item col-item--weight3 position-absolute" method="post" enctype="multipart/form-data" onclick="field5.click()">
                        <input type="file" class="medpc4" accept="image/*" onchange="previewFile5()">
                        <img id="mdepc4img" src="<?= WEB_ROOT ?>img/addimg2.jpg" alt="">

                    </form>
                    <div class="col-item col-item--height4 position-absolute">

                        <h3>INTRODUCTION</h3>
                        <h4>店家介紹</h4>
                        <textarea class="introcontain" placeholder="簡述店家">
                        </textarea>

                    </div>
                </div>
                <!-- <div class="water-fall-word position-relative">
                    <div class="eat position-absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="345" height="221" viewBox="0 0 345 221">
                            <defs>
                                <filter id="EAT" x="0" y="0" width="345" height="221" filterUnits="userSpaceOnUse">
                                    <feOffset dy="5" input="SourceAlpha" />
                                    <feGaussianBlur stdDeviation="2.5" result="blur" />
                                    <feFlood />
                                    <feComposite operator="in" in2="blur" />
                                    <feComposite in="SourceGraphic" />
                                </filter>
                            </defs>
                            <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#EAT)">
                                <text id="EAT-2" data-name="EAT" transform="translate(7.5 160.5)" fill="#f48e09" font-size="153" font-weight="900" opacity="0.6">
                                    <tspan x="0" y="0">EAT</tspan>
                                </text>
                            </g>
                        </svg>
                    </div>
                    <div class="drink position-absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="579" height="191" viewBox="0 0 579 191">
                            <defs>
                                <filter id="DRINKS" x="0" y="0" width="579" height="191" filterUnits="userSpaceOnUse">
                                    <feOffset dy="5" input="SourceAlpha" />
                                    <feGaussianBlur stdDeviation="2.5" result="blur" />
                                    <feFlood />
                                    <feComposite operator="in" in2="blur" />
                                    <feComposite in="SourceGraphic" />
                                </filter>
                            </defs>
                            <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#DRINKS)">
                                <text id="DRINKS-2" data-name="DRINKS" transform="translate(7.5 137.5)" fill="#f48e09" font-size="130" font-weight="900" opacity="0.6">
                                    <tspan x="0" y="0">DRINKS</tspan>
                                </text>
                            </g>
                        </svg>
                    </div>
                    <div class="chill position-absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="482" height="204" viewBox="0 0 482 204">
                            <defs>
                                <filter id="CHILL" x="0" y="0" width="482" height="204" filterUnits="userSpaceOnUse">
                                    <feOffset dy="5" input="SourceAlpha" />
                                    <feGaussianBlur stdDeviation="2.5" result="blur" />
                                    <feFlood />
                                    <feComposite operator="in" in2="blur" />
                                    <feComposite in="SourceGraphic" />
                                </filter>
                            </defs>
                            <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#CHILL)">
                                <text id="CHILL-2" data-name="CHILL" transform="translate(7.5 147.5)" fill="#f48e09" font-size="140" font-weight="900" opacity="0.6">
                                    <tspan x="0" y="0">CHILL</tspan>
                                </text>
                            </g>
                        </svg>

                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <div class="sp">
        <div class="sp-click"><svg xmlns="http://www.w3.org/2000/svg" width="29.941" height="46.647" viewBox="0 0 29.941 46.647">
                <g id="タッチアイコン" transform="translate(121.623 46.647) rotate(180)">
                    <path id="Path_79" data-name="Path 79" d="M185.09,15.68,185.1,13c-.042-.039-.086-.075-.126-.115a6.291,6.291,0,1,1,9-.125l.006,2.774a8.444,8.444,0,1,0-8.892.144Z" transform="translate(-81.158)" fill="#fff" />
                    <path id="Path_80" data-name="Path 80" d="M117.272,85.087a44.535,44.535,0,0,1-3.4,3.536,1.707,1.707,0,0,1-2.887-1.236l-.041-17.746v.323a2.559,2.559,0,0,0-5.117.072l-.042,12.86L95.363,85.59A6.071,6.071,0,0,0,92,93.118l2.605,9.772v5.086h16.906V102.89s8.737-13.182,9.637-14.458C122.76,86.158,119.948,82.142,117.272,85.087Z" transform="translate(0 -61.329)" fill="#fff" />
                </g>
            </svg></div>

        <h2>CLICK</h2>
        <div class="form-wrapper">
            <div class="sp-time">
                <svg xmlns="http://www.w3.org/2000/svg" width="44.322" height="44.322" viewBox="0 0 44.322 44.322">
                    <g id="Clock" transform="translate(0 28.099) rotate(-60)">
                        <path id="Path_13" data-name="Path 13" d="M4.867,4.867A14.728,14.728,0,0,1,16.223,0,14.728,14.728,0,0,1,27.579,4.867a14.728,14.728,0,0,1,4.867,11.356,14.728,14.728,0,0,1-4.867,11.356,14.728,14.728,0,0,1-11.356,4.867A14.728,14.728,0,0,1,4.867,27.579C1.893,24.335,0,20.82,0,16.223A14.728,14.728,0,0,1,4.867,4.867ZM23.524,23.524l1.893-1.893-6.76-6.76L16.223,4.056h-2.7V16.223a2.455,2.455,0,0,0,.811,1.893.944.944,0,0,0,.541.27Z" transform="translate(0)" fill="#fff" />
                    </g>
                </svg>
                <p>訂位</p>
            </div>
            <div class="sp-like">
                <svg xmlns="http://www.w3.org/2000/svg" width="31.516" height="27.811" viewBox="0 0 31.516 27.811">
                    <path id="Heart" d="M29.022,2.544a8.468,8.468,0,0,0-12.053,0L15.783,3.73,14.6,2.544A8.523,8.523,0,0,0,2.544,14.6L15.783,27.836,29.022,14.6a8.468,8.468,0,0,0,0-12.053" transform="translate(-0.025 -0.025)" fill="#fff" fill-rule="evenodd" />
                </svg>
                <p>收藏</p>
            </div>
            <div class="sp-up">
                <svg xmlns="http://www.w3.org/2000/svg" width="27.868" height="27.868" viewBox="0 0 27.868 27.868">
                    <path id="Path_10" data-name="Path 10" d="M13.934,0,11.4,2.533l9.591,9.591H0v3.619H20.992L11.4,25.335l2.533,2.533L27.868,13.934Z" transform="translate(0 27.868) rotate(-90)" fill="#fff" />
                </svg>
                <p>往上</p>
            </div>
        </div>
    </div>

    <h3 class="addedvalue">加值解鎖更多功能⇀</h3>
    <div class="confirmbtnbox">
        <button class="confirmbtn" href="#companypagetop">確認送出</button>
    </div>

    <div class="companypagbox">
    </div>

    <script>
        $(function() {
            $('.sp').click(function() {
                $('.form-wrapper').slideToggle("slow");
            });
        });


        // 換照片的功能
        const field = document.querySelector('input[name=avatar]');

        function previewFile() {
            const preview = document.querySelector('#inputbigimg');
            const file = document.querySelector('.inputbigpc').files[0];
            const reader = new FileReader();


            reader.addEventListener("load", function() {
                // convert image file to base64 string
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
        const field2 = document.querySelector('.medpc1');

        function previewFile2() {
            const preview = document.querySelector('#mdepc1img');
            const file = document.querySelector('.medpc1').files[0];
            const reader = new FileReader();


            reader.addEventListener("load", function() {
                // convert image file to base64 string
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        const field3 = document.querySelector('.medpc2');

        function previewFile3() {
            const preview = document.querySelector('#mdepc2img');
            const file = document.querySelector('.medpc2').files[0];
            const reader = new FileReader();


            reader.addEventListener("load", function() {
                // convert image file to base64 string
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        const field4 = document.querySelector('.medpc3');

        function previewFile4() {
            const preview = document.querySelector('#mdepc3img');
            const file = document.querySelector('.medpc3').files[0];
            const reader = new FileReader();


            reader.addEventListener("load", function() {
                // convert image file to base64 string
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
        const field5 = document.querySelector('.medpc4');

        function previewFile5() {
            const preview = document.querySelector('#mdepc4img');
            const file = document.querySelector('.medpc4').files[0];
            const reader = new FileReader();


            reader.addEventListener("load", function() {
                // convert image file to base64 string
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
        $(".confirmbtn").click(function() {
            $('.sp').css('opacity', '1');
            $('.star').css('opacity', '1');
            $('.infosection').css('opacity', '0');
            $('.news-content-title').css('opacity', '0');
            $('.confirmbtn').css('opacity', '0');
            $('.addedvalue').css('opacity', '0');
            $('.intro').css('display', 'none');
            $('html,body').animate({
                scrollTop: $('#companypagetop')
            });
        });
    </script>
</body>




<?php include __DIR__ . '/../parts/about.php'; ?>

</html>