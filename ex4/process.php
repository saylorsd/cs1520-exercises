<?php
/**
 * Created by PhpStorm.
 * User: Steve
 * Date: 4/18/2016
 * Time: 8:06 PM
 */
session_start();
$host = $_SERVER['HTTP_HOST'];
if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST['username'];
    $pwd = $_POST['password'];

    $found = false;
    $fp = fopen('users.txt', 'r');
    while ($ln = fgets($fp)) {
        $line = explode(":", $ln);
        if (!strcmp($user, $line[0]) && !strcmp($pwd, $line[1])) {
            $_SESSION['user'] = $user;
            $_SESSION['loggedin'] = true;
            $found = true;
            fclose($fp);
            header('Location: http://' . $host . '/ex/ex4/home.php');
            exit();
        }
    }
    if (!$found) {
        $_SESSION['error'] = "Your id or password is incorrect. Please try again";
        fclose($fp);
        header('Location: http://' . $host . '/ex/ex4/login.php');
        exit();
    }

} else {
    header('Location: http://' . $host . '/ex/ex4/login.php');
}