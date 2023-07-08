<?php
session_start()
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$_SESSION['user']['full_name']?></title>
</head>
<body>
<form>
    <img src="../<?=$_SESSION['user']['avatar']?>" alt="">
    <p>
        <?=$_SESSION['user']['full_name'] ?>
        <?=$_SESSION['user']['email'] ?>
    </p>
</form>
</body>
</html>
