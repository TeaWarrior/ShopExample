<?php session_start()
?>
<html lang="en">
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

<form class="form" action="../vendor/signup.php" method="post" enctype="multipart/form-data">
    <label class="label">Name</label>
    <input class="input" type="text" name="full_name" placeholder="Enter your Name">
    <label class="label">Login</label>
    <input class="input" type="text" name="login" placeholder="Enter your NickName">
    <label class="label">Avatar</label>
    <input class="input" type="file" name="avatar" >
    <label class="label">Email</label>
    <input class="input" type="email" name="email" placeholder="Enter your email">
    <label class="label">Password</label>
    <input class="input" type="password" name="password" placeholder="Enter password">
    <label class="label">Password confirmation</label>
    <input class="input" type="password" name="password_confirm" placeholder="Enter password once again">
    <button type="submit">Registration</button>

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
