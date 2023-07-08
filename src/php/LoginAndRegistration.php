<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel=stylesheet href="../css/main.css">
</head>
<body class="login-registration">

<form class="form" action="../vendor/signin.php" method="post">
    <label class="label">Login</label>
    <input class="input" name="login" type="text">
    <label class="label">Password</label>
    <input class="input" name="password" type="password">

    <button type="submit">Login</button>

    <button type="button" class="btn">Registration</button>

    <?php
    if($_SESSION){
        echo '<p class="message"> '. $_SESSION['message']; '  </p>';
    }
    unset($_SESSION['message']) ;
    ?>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
