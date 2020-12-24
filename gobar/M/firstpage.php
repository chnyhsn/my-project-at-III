<?php include __DIR__ . '/../parts/config.php'; ?>
<?php include __DIR__ . '/../parts/html-head.php'; ?>
<?php include __DIR__ . '/../parts/scripts.php'; ?>
<?php include __DIR__ . '/../parts/navbar.php'; ?>

<link rel="stylesheet" href="<?= WEB_ROOT ?>css/firstpage.css">

<body>
    <div class="boost"></div>
    <div class="headbigpictur">
        <div class="leafs">
            <div class="leaf10"><img src="../M/img/leaf/leaf7-1.png" alt=""></div>
            <div class="leaf7"><img src="../M/img/leaf/leaf10-1.png" alt=""></div>
            <div class="leaf6"><img src="../M/img/leaf/leaf11-1.png" alt=""></div>
            <div class="leaf5"><img src="../M/img/leaf/leaf8-1.png" alt=""></div>
            <div class="leaf4"><img src="../M/img/leaf/leaf13-1.png" alt=""></div>
            <div class="leaf3"><img src="../M/img/leaf/leaf15-1.png" alt=""></div>
            <div class="leaf2"><img src="../M/img/leaf/leaf14-1.png" alt=""></div>
            <div class="leaf1"><img src="../M/img/leaf/leaf1-1.png" alt=""></div>
            <div class="leaf8"><img src="../M/img/leaf/leaf12-1.png" alt=""></div>
            <div class="leaf9"><img src="../M/img/leaf/leaf5-1.png" alt=""></div>
            <div class="leaf11"><img src="../M/img/leaf/leaf4-1.png" alt=""></div>
            <div class="leaf12"><img src="../M/img/leaf/leaf2-1.png" alt=""></div>
            <div class="leaf14"><img src="../M/img/leaf/leaf3-1.png" alt=""></div>
            <div class="leaf13"><img src="../M/img/leaf/leaf6-1.png" alt=""></div>

            <div class="leaf15"><img src="../M/img/leaf/leaf9-1.png" alt=""></div>
        </div>
        <div class="wine">
            <div class="wine1"><img src="../M/img/wine/wine1.png" alt=""></div>
            <div class="wine2"><img src="../M/img/wine/wine2.png" alt=""></div>
            <div class="wine3"><img src="../M/img/wine/wine3.png" alt=""></div>
        </div>
        <div class="taipeicity">
            <img src="./img/taipeicity.svg" alt="">
        </div>
        <div class="container-fluid ">
            <div class="row headerrow">
                <div class="slogonbox col-xl-8 col-12">
                    <div class="bird">
                        <img src="./img/bird.svg" alt="">
                    </div>
                    <h1>搜尋台北736家酒吧平台</h1>
                </div>

                <div class="searchbox col-xl-4 col-12">
                    <form id="keywordform" name="ketwordform" class="searchform" onsubmit="checkForm(); return false;">
                        <div class="keywordbox">
                            <div class="magnifier">
                                <img src="./img/searcho.svg" alt="">
                            </div>
                            <input class="input1" name="keywordinput" id="keywordinput" type="text" placeholder="輸入關鍵字">
                        </div>
                        <select class="area" name="" id="selectareaid">
                            <option value="">請選擇地區</option>
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
                        <select class="area" name="" id="">
                            <option value="">選擇調酒類別</option>
                            <option value="">威士忌</option>
                            <option value="">琴酒</option>
                            <option value="">啤酒</option>
                            <option value="">綜合調酒</option>
                            <option value="">無菜單調酒</option>
                        </select>
                        <select class="area" name="" id="">
                            <option value="">選擇酒吧風格</option>
                            <option value="">工業風</option>
                            <option value="">英倫風</option>
                            <option value="">奢華風</option>
                            <option value="">和風</option>
                            <option value="">同志酒吧</option>
                        </select>
                        <button id="searchbuttonid" class="searchbutton" type="submit">
                            搜尋酒吧
                        </button>
                    </form>
                </div>
                <div class="scrowdown">
                    <img src="./img/down.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="bar">
        <div class="barsetion">
            <div class="line"></div>
            <div class="titlesolid">
                <div class="bartitle">
                    <img src="./img/bartitle.svg" alt="">
                </div>
            </div>
            <div class="line"></div>
        </div>


        <!-- 這裡是top10bar的carousel -->
        <div class="space">
            <h2 class="store">精選店家</h2>
            <div class="click">
                <img src="./img/click.svg" alt="">
            </div>
            <main>
                <div id="carousel">
                    <div class="hideLeft">
                        <img src="./img/topbar/topbar-11.jpg">
                    </div>

                    <div class="hideLeft">
                        <img src="./img/topbar/topbar-02.jpg">
                    </div>

                    <div class="prevLeftSecond">
                        <img src="./img/topbar/topbar-03.jpg">
                    </div>

                    <div class="prev">
                        <img src="./img/topbar/topbar-04.jpg">
                    </div>

                    <div class="selected">
                        <img src="./img/topbar/topbar-05.jpg">
                    </div>

                    <div class="next">
                        <img src="./img/topbar/topbar-06.jpg">
                    </div>

                    <div class="nextRightSecond">
                        <img src="./img/topbar/topbar-07.jpg">
                    </div>

                    <div class="hideRight">
                        <img src="./img/topbar/topbar-08.jpg">
                    </div>

                    <div class="hideRight">
                        <img src="./img/topbar/topbar-09.jpg">
                    </div>

                    <div class="hideRight">
                        <img src="./img/topbar/topbar-10.jpg">
                    </div>

                </div>

                <div class="buttons">
                    <div class="liftbutton" id="prev"></div>
                    <div class="rightbutton" id="next"></div>
                </div>

            </main>
        </div>
    </div>
    <!-- 這裡是topdrink -->
    <div class="drinksetion container-fluid">
        <div class="drinkbox col-xl-10 col-12"></div>
        <div class="drinkrow">
            <div class="drinkbetween"></div>
            <div class="drinktitlesolid">
                <div class="drinktitle">
                    <img src="./img/drinktitle.svg" alt="">
                </div>
            </div>
            <div class="drinkbetween"></div>
        </div>
        <h2 class="cup">本週特調</h2>
        <div class="drinkrow2">
            <div class="drink1 col-xl-6 col-12">
                <img src="./img/drink2.jpg" alt="">
            </div>
            <div class="drink1contain col-xl-7 col-12">
                <h2 class="cupname">Swing Night在一個搖擺的夜晚</h2>
                <h4 class="cupcontain">
                    完全非常Tiki Style的這杯特調，據說是在法蘭克為了配合這杯調酒的味道才發明夏天……不同的是加了「台灣山胡椒」（馬告）浸泡蘭姆酒，組合出帶有辛辣感的熱帶滋味，最後擺上鳳梨乾片，一杯在手如同度假！</h4>

                <div class="readmore">前往酒吧</div>
                <div class="readmore1"></div>
            </div>
        </div>
        <div class="drinkrow3">
            <div class="drink1 by1 col-xl-6 col-12">
                <img src="./img/drink1.jpg" alt="">
            </div>
            <div class="drink1contain copy col-xl-7 col-12">
                <h2 class="cupname cupname2">Colonizer's Deal(power)</h2>
                <h4 class="cupcontain cupcontain2">
                    一杯經典Tiki調酒，讓想像回到大航海的時代。取蒔蘿浸過威士忌平衡味道，再用芒果泥和椰奶去帶出仕高利達金牌威士忌的香甜，一杯入喉，最能感受如簽完合約的殖民者，徜徉在加勒比海沙灘上吹風的自在暢快。</h4>

                <div class="readmore">前往酒吧</div>
                <div class="readmore1"></div>
            </div>
        </div>
    </div>


    <!-- 這裡是最新活動 -->
    <div class="newsactive">
        <div class="container-fluid newscontainer">
            <div class="activeline col-xl-8 col-10"></div>
            <h2>最新活動</h2>
            <div class="row newsrow">
                <div class="activepcf col-xl-6 col-12 ">
                    <div class="activepc1">
                        <img src="./img/avtivepc1.jpg" alt="">
                    </div>
                    <div class="row activerow">
                        <div class="avtivepc2 col-xl-4">
                            <img src="./img/avtivepc2.jpg" alt="">
                        </div>
                        <div class="avtivepc2 col-xl-4">
                            <img src="./img/avtivepc3.jpg" alt="">
                        </div>
                        <div class="avtivepc2 col-xl-4">
                            <img src="./img/avtivepc4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="activenath col-xl-1 col-12"></div>
                <div class="activecintain col-xl-5">
                    <div class="newstitle">
                        <img src="./img/newstitle.svg" alt="">
                    </div>
                    <div class="newscontain">
                        <div class="orangebox col-xl-4 col-4"></div>
                        <h4>
                            台北W Taipei主場派對又來了！去年湧入上千人潮，今年火力全開，在8/3(六)舉辦為期一天的GQxBarSurfing台北主場派對，從白天Happy
                            Hour開喝，享受樂趣不間斷的主場活動。素人調酒大賽的陣容一樣精采，由新世代R&B小天后－Julia Wu吳卓源，對戰Youtuber男神－廉傑克曼。接連著在主舞台WET
                            BAR，邀請到國際知名調酒師接力客座，陣容包含來自中國上海的 Cross Yu(E.P.I.C)、斯洛伐克 Martina Brezňanová(The Gibson)、義大利 Simone
                            Caporale(Marque d’Amour)，以及日本 Shingo Gokan(The SG Group)，接力調酒5小時，創作超過20款主場限定特調，一定讓你喝得過癮。
                        </h4>

                    </div>
                    <div class="row">
                        <div class="nathmor col-xl-9 col-8"></div>
                        <p class="actmor">View more</p>
                    </div>
                </div>
            </div>
            <div class="activeline col-xl-8 col-10"></div>
        </div>
    </div>
    <!-- 這是文章分享 -->
    <div class="blogsetion">
        <div class="handleft">
            <img src="./img/handl.svg" alt="">
        </div>
        <div class="handright">
            <img src="./img/handr.svg" alt="">
        </div>
        <!-- 文章分享的輪播 -->
        <div class="container-fluid blogg">
            <div class="blogtitle">
                <img src="./img/blogtitle.svg" alt="">
            </div>
            <h2>文章分享</h2>
            <div class="blogwrap d-flex">
                <div class="blog col-xl-4 col-12">
                    <div class="blogpc"><img src="<?= WEB_ROOT ?>img/blogpc/blogpc4.jpg" alt="">
                    </div>
                    <div class="bligcontain">
                        <h3 class="titleh3">想試試世界級的台灣之光調酒，鎖定這8家超強酒吧準沒錯！</h3>
                        <h5 class="ph5">台灣調酒的水準之高，在近年亞洲五十大酒吧頒獎典禮上就能看出端倪，不僅店....
                        </h5>
                    </div>
                </div>
                <div class="blog col-xl-4 col-12">
                    <div class="blogpc"><img src="<?= WEB_ROOT ?>img/blogpc/blogpc5.jpg" alt="">
                    </div>
                    <div class="bligcontain">
                        <h3 class="titleh3">週末就是要白天開喝才放鬆，這11家「白日微醺」酒吧清單必收！</h3>
                        <h5 class="ph5">週末午後除了貴婦下午茶，近年最流行的其實是來杯「下午酒」。下午就開始微醺....
                        </h5>
                    </div>
                </div>
                <div class="blog col-xl-4 col-12">
                    <div class="blogpc"><img src="<?= WEB_ROOT ?>img/blogpc/blogpc1.jpg" alt="">
                    </div>
                    <div class="bligcontain">
                        <h3 class="titleh3">今晚我只想一個人耍自閉，10家適合獨處喝一杯的酒吧清單</h3>
                        <h5 class="ph5">可能傷心、可能失戀；可能今天跟老闆吵架、可能一出門就衰到下班，又可能只是想在忙碌的一天過後，單純一個人安安靜靜地喝一杯。
                        </h5>
                    </div>
                </div>
                <div class="blog col-xl-4 col-12">
                    <div class="blogpc"><img src="<?= WEB_ROOT ?>img/blogpc/blogpc2.jpg" alt="">
                    </div>
                    <div class="bligcontain">
                        <h3 class="titleh3">偶爾來點高級體驗，台北星級飯店酒吧推薦</h3>
                        <h5 class="ph5">
                            想來場最優雅的調酒體驗，非星級飯店酒吧莫屬。想徹底感受飯店酒吧的厲害之處，建議順便住上一晚，喝得盡.....
                        </h5>
                    </div>
                </div>
                <div class="blog col-xl-4 col-12">
                    <div class="blogpc">
                        <img src="<?= WEB_ROOT ?>img/blogpc/blogpc3.jpg" alt="">
                    </div>
                    <div class="bligcontain">
                        <h3 class="titleh3">好喝好拍好厲害，11家實力派視覺系酒吧推薦</h3>
                        <h5 class="ph5">不只好喝，無論調酒或空間，看起來夠美夠好拍，已是人氣酒吧的基本配備。我們強烈推薦這11家精選台北酒吧，進門喝個幾杯打點卡....
                        </h5>
                    </div>
                </div>
                <div class="blog col-xl-4 col-12">
                    <div class="blogpc"><img src="<?= WEB_ROOT ?>img/blogpc/blogpc6.jpg" alt="">
                    </div>
                    <div class="bligcontain">
                        <h3 class="titleh3">硬派行家不可錯過，6家超強單一基酒主題酒吧</h3>
                        <h5 class="ph5">在調酒世界裡，有時候只需要一種基礎酒款，厲害的bartender 就能創造出千變萬化的有趣調酒。
                        </h5>
                    </div>
                </div>
                <div class="blog col-xl-4 col-12">
                    <div class="blogpc"><img src="<?= WEB_ROOT ?>img/blogpc/blogpc7.jpg" alt="">
                    </div>
                    <div class="bligcontain">
                        <h3 class="titleh3">舒服到像在自己家客廳，想徹底紓壓放空就到這幾家慵懶型酒吧！</h3>
                        <h5 class="ph5">人生需要喝一杯的時刻很多，有時歡樂、有時相聚、有時空氣中瀰漫著戀愛泡泡；有時候....
                        </h5>
                    </div>
                </div>
                <div class="blog col-xl-4 col-12">
                    <div class="blogpc"><img src="<?= WEB_ROOT ?>img/blogpc/blogpc8.jpg" alt="">
                    </div>
                    <div class="bligcontain">
                        <h3 class="titleh3">和三五好友一起不醉不歸，週末就到這幾家酒吧熱鬧一下吧</h3>
                        <h5 class="ph5">獨樂樂不如眾樂樂，沒有什麼能比和三五好友一起大喝大聊，愉快度過一晚更療癒的週末提案了！
                        </h5>
                    </div>
                </div>
                <div class="blog col-xl-4 col-12">
                    <div class="blogpc"><img src="<?= WEB_ROOT ?>img/blogpc/blogpc9.jpg" alt="">
                    </div>
                    <div class="bligcontain">
                        <h3 class="titleh3">這12家經典老字號酒吧，沒喝過別說你懂台北夜生活！</h3>
                        <h5 class="ph5">僅管台北的新酒吧們，近年正以一種不可思議的速度拼命冒出頭，嘗起鮮來好不過癮；不過，歷經多年市場考驗，始終屹立不....
                        </h5>
                    </div>
                </div>
            </div>
            <div class="buttonclop">
                <button class="blogbtr"></button>
                <button class="blogbtm"></button>
                <button class="blogbtl"></button>
            </div>
        </div>
    </div>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->



    <!-- <script src="<?= WEB_ROOT ?>/M/js/searchbtn.js"></script> -->
    <script>
        //    <!-- 這裡是top10bar的carousel -->     
        function moveToSelected(element) {
            if (element == "next") {
                var selected = $(".selected").next();
            } else if (element == "prev") {
                var selected = $(".selected").prev();
            } else {
                var selected = element;
            }

            var next = $(selected).next();
            var prev = $(selected).prev();
            var prevSecond = $(prev).prev();
            var nextSecond = $(next).next();

            $(selected).removeClass().addClass("selected");

            $(prev).removeClass().addClass("prev");
            $(next).removeClass().addClass("next");

            $(nextSecond).removeClass().addClass("nextRightSecond");
            $(prevSecond).removeClass().addClass("prevLeftSecond");

            $(nextSecond).nextAll().removeClass().addClass("hideRight");
            $(prevSecond).prevAll().removeClass().addClass("hideLeft");
        }

        // Eventos teclado
        $(document).keydown(function(e) {
            switch (e.which) {
                case 37: // left
                    moveToSelected("prev");
                    break;

                case 39: // right
                    moveToSelected("next");
                    break;

                default:
                    return;
            }
            e.preventDefault();
        });


        $("#carousel div").click(function() {
            moveToSelected($(this));
        });

        $("#prev").click(function() {
            moveToSelected("prev");
        });

        $("#next").click(function() {
            moveToSelected("next");
        });

        // 滾動觸發區
        $(window).scroll(function() {
            let scrollNow = $(this).scrollTop();
            // console.log('scrollNow', scrollNow)
            if (scrollNow > 1600) {
                $('.drink1 img').css('transform', 'scale(1.2)');
            } else {
                $('.drink1 img').css('transform', 'scale(1)');
            }

            if (scrollNow > 1900) {
                $('.drink1contain').css('width', '100%');
            } else {
                $('.drink1contain').css('width', '0%');
            }

            if (scrollNow > 2100) {
                $('.cupname').css('opacity', '1');
            } else {
                $('.cupname').css('opacity', '0');
            }

            if (scrollNow > 2200) {
                $('.cupcontain').css('opacity', '1');
            } else {
                $('.cupcontain').css('opacity', '0');
            }

            if (scrollNow > 2600) {
                $('.by1 img').css('transform', 'scale(1.2)');
            } else {
                $('.by1 img').css('transform', 'scale(1)');
            }

            if (scrollNow > 2800) {
                $('.copy').css('width', '100 % ');
            } else {
                $('.copy').css('width', '0%');
            }

            if (scrollNow > 2900) {
                $('.cupname2').css('opacity', '100 % ');
            } else {
                $('.cupname2').css('opacity', '0%');
            }

            if (scrollNow > 3000) {
                $('.cupcontain2').css('opacity', '1');
            } else {
                $('.cupcontain2').css('opacity', '0');
            }



            if (scrollNow > 4500) {
                $('.handleft').css('transform', 'rotate(0deg)'),
                    $('.handright').css('transform', 'rotate(0deg)');
            } else {
                $('.handleft').css('transform', 'rotate(30deg)'),
                    $('.handright').css('transform', 'rotate(-30deg)');
            }
        })


        // 小螢幕區

        $(window).scroll(function() {
            let scrollNow = $(this).scrollTop();
            let windowSize = $(this).width();
            // console.log('scrollnow', scrollNow)
            if (windowSize < 767) {
                if (scrollNow > 1200) {
                    $('.drink1 img').css('transform', 'scale(1.2)');
                } else {
                    $('.drink1 img').css('transform', 'scale(1)');
                }

                if (scrollNow > 1400) {
                    $('.drink1contain').css('width', '100%');
                } else {
                    $('.drink1contain').css('width', '0%');
                }

                if (scrollNow > 1500) {
                    $('.cupname').css('opacity', '1');
                } else {
                    $('.cupname').css('opacity', '0');
                }

                if (scrollNow > 1550) {
                    $('.cupcontain').css('opacity', '1');
                } else {
                    $('.cupcontain').css('opacity', '0');
                }

                if (scrollNow > 2100) {
                    $('.by1 img').css('transform', 'scale(1.2)');
                } else {
                    $('.by1 img').css('transform', 'scale(1)');
                }

                if (scrollNow > 2300) {
                    $('.copy').css('width', '100 % ');
                } else {
                    $('.copy').css('width', '0%');
                }

                if (scrollNow > 2400) {
                    $('.cupname2').css('opacity', '100 % ');
                } else {
                    $('.cupname2').css('opacity', '0%');
                }

                if (scrollNow > 2450) {
                    $('.cupcontain2').css('opacity', '1');
                } else {
                    $('.cupcontain2').css('opacity', '0');
                }



                if (scrollNow > 4200) {
                    $('.handleft').css('transform', 'rotate(0deg)'),
                        $('.handright').css('transform', 'rotate(0deg)');
                } else {
                    $('.handleft').css('transform', 'rotate(30deg)'),
                        $('.handright').css('transform', 'rotate(-30deg)');
                }
            }
        })





        // 文章分享的輪播

        $(".blogbtr").click(function() {
            $('.blogbtr').css('background-color', '#ff8d00');
            $('.blogbtm').css('background-color', '#ffb352');
            $('.blogbtl').css('background-color', '#ffb352');
            $('.blogwrap').css('left', '-1%');

            let windowSize = $(window).width();

            if (windowSize < 767) {
                $('.blogwrap').css('left', '-5%');
                // console.log('hi', windowSize);
                // console.log('hi2', windowSize < 767);
            }
        })
        $(".blogbtm").click(function() {
            $('.blogbtm').css('background-color', '#ff8d00');
            $('.blogbtr').css('background-color', '#ffb352');
            $('.blogbtl').css('background-color', '#ffb352');
            $('.blogwrap').css('left', '-100%');
            let windowSize = $(window).width();
            if (windowSize < 767) {
                $('.blogwrap').css('left', '-115%');
                // console.log('hi');
            }
        })
        $(".blogbtl").click(function() {
            // console.log('hi');
            $('.blogbtl').css('background-color', '#ff8d00');
            $('.blogbtm').css('background-color', '#ffb352');
            $('.blogbtr').css('background-color', '#ffb352');
            $('.blogwrap').css('left', '-200%');
            let windowSize = $(window).width();
            if (windowSize < 767) {
                $('.blogwrap').css('left', '-225%');
            }
        })


        // $(".blogbtr").on('click', function() {

        // });
        // $(".blogbtm").on('click', function() {

        // });
        // $(".blogbtl").on('click', function() {

        // });

        // 這裡是模糊搜尋
        const keywordform = $('#keywordform')
        const keywordinput = $('#keywordinput')

        const searchbuttonid = document.getElementById('searchbuttonid');
        const selectareaid = $('#selectareaid');

        function checkForm() {

            if (
                keywordinput.val() != ''
            ) {
                console.log('hi1')

                $.post('<?= WEB_ROOT ?>/W/pages/search-api.php', {
                        keyword: keywordinput.val(),
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
                window.location.href = '../../GOBAR/E/pages/map2.php';
            }
        }
    </script>


</body>




<?php include __DIR__ . '/../parts/about.php'; ?>

</html>