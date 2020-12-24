<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php require __DIR__ . '/../../parts/config.php';?>
    

    <form id="form1" name="form1">
        <!-- <p>輸入姓名:</p><input type="text" name="name"> -->
        <div class="phone input-area2 mt-0 mb-5">
            <div class="from-text">
                <p>*訂位日期 <span>|</span></p>
            </div>
            <input
                id="date"
                name="date"
                type="date"
                class="inputbox"
                autocomplete="off"
            />
        </div>

        <button type="submit">送出</button>
    </form>

    <?php include __DIR__ . '/../../parts/scripts.php'; ?>
    <script>

        $('#form1').submit(function(e) {
            e.preventDefault();
            $.post('test02-api.php', $('#form1').serialize(), function(response) {
                console.log(response);
            })
        });
    </script>
</body>
</html>