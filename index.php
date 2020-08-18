<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bomb</title>
    <style>

        body>div {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .bomb {
            width: <?php print date('s')*10 + 50; ?>px;
            height: <?php print date('s')*10 + 50; ?>px;
            background-image: url("https://image.freepik.com/free-vector/realistic-rounded-bomb-with-fuse_23-2148205997.jpg");
            background-size: cover;
        }

        .boom00 {
            background-image: url("https://i.insider.com/50f0c59e6bb3f7b23800000b?width=1100&format=jpeg&auto=webp");
            background-size: cover;
            width: 500px;
            height: 500px;
        }

        body {
            font-size: 30px;
        }
    </style>
</head>
<body>
    <div>
        <div>
            <span class="time"><?php print date('s'); ?></span>
        </div>
        <div>
            <div class="bomb <?php print 'boom' . date('s'); ?>"></div>
        </div>
    </div>
</body>
</html>