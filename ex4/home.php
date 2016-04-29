<?php
/**
 * Created by PhpStorm.
 * User: Steve
 * Date: 4/18/2016
 * Time: 8:22 PM
 */
session_start();
$host = $_SERVER['HTTP_HOST'];
if (!isset($_SESSION) || !$_SESSION['loggedin']) {
    $_SESSION['error'] = "You have not logged in. Please log in first";
    header('Location: http://' . $host . '/ex/ex4/login.php');
} else if ($_SESSION['loggedin']) { ?>

    <html>
    <head>
        <title>Welcome!</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
    echo '<p class="msg"> Hey ' . $_SESSION['user'] . '!!</p>';
    ?>
    </body>
    </html>
<?php } ?>
