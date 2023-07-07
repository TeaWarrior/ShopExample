<?php
session_start();
require_once 'connect.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password_confirm = $_POST['password_confirm'];
$password = $_POST['password'];
if ($password === $password_confirm) {
    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = 'Avatar is ugly';
        header('Location: ../php/registration.php');
    }
    $password=md5($password);
    mysqli_query( $connect, "INSERT INTO `users` 
    (`id`, `full_name`, `login`, `email`, `password`, `avatar`)
 VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");

    $_SESSION['message'] = 'Register Succeded';
    header('Location: ../php/LoginAndRegistration.php');
} else {
    $_SESSION['message'] = 'Password is not';
    header('Location: ../php/registration.php');
}
?>
<pre>

<?php
print_r($_POST);
?>
</pre>