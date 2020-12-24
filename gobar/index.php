<?php include __DIR__ . '/parts/config.php'; ?>

<link rel="stylesheet" href="<?= WEB_ROOT ?>J/css/_index.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

<?php include __DIR__ . '/parts/scripts.php'; ?>

<body>

    <div class="container-fuild position-relative">
        <!-- <div class="black-box"></div> -->
        <div class="videobox">
            <video loop="true" autoplay="autoplay" muted="true">
                <source type="video/mp4" src="<?= WEB_ROOT ?>J/video/newbartender.mp4">
                </source>
            </video>
        </div>

        <div class="nav-text">
            <p class="nav-text1">SERCH BAR &</p>
            <p class="nav-text2">HAVE FUN</p>
            <p class="nav-text3">2020 LET'S ENJOY</p>
        </div>

        <figure>
            <div>
                <a href="<?= WEB_ROOT ?>M/bubble.php">
                    <span>TOUCHME</span>
                    <span>HOME</span>
                </a>
            </div>
        </figure>

        <div class="logo">
            <img src="<?= WEB_ROOT ?>J/Gobar-svg-png/PNG/LOGO.png" alt="" width="120">
        </div>

        <!-- <div class="black-box"></div> -->
    </div>
</body>

<!-- <script>
    $(function() {
        $("#button").click(function() {
            $("#button").addClass("onclic", 250, validate);
        });

        function validate() {
            setTimeout(function() {
                $("#button").removeClass("onclic");
                $("#button").addClass("validate", 450, callback);
            }, 2250);
        }

        function callback() {
            setTimeout(function() {
                $("#button").removeClass("validate");
            }, 1250);
        }
    });
</script> -->

</html>