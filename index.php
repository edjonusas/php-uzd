<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bomb</title>
    <style>

        main>div {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .bomb {
            border-radius: 50%;
            background: cadetblue;
            width: <?php print date('s')*10; ?>px;
            height: <?php print date('s')*10; ?>px;
        }

        body {
            font-size: 30px;
        }
    </style>
</head>
<body>
<main>
    <div>
        <div><span class="time"><?php print date('s'); ?></span></div>
        <div class="bomb"></div>
    </div>
</main>
</body>
</html>