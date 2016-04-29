<?php
/**
 * Created by PhpStorm.
 * User: Steve
 * Date: 4/18/2016
 * Time: 8:00 PM
 */
session_start();
if(isset($_SESSION['error'])){
    echo '<p class="alert">'. $_SESSION['error'] .'</p>';
}

?>

<!doctype html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Login</h1>
<form method="post" action="process.php">
    <label for="username">Username: </label>
    <input type="text" name="username">
    <br>
    <label for="password">Password: </label>
    <input type="password" name="password">
    <br>
    <input type="submit" value="Submit!">
</form>
</body>
</html>