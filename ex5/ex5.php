<?php
/**
 * Created by PhpStorm.
 * User: Steve
 * Date: 4/26/2016
 * Time: 9:05 PM
 */

$user = 'cs1520';
$pass = 'pass1234';
$db = 'mysite';

$conn = new mysqli("localhost", $user, $pass, $db);
?>
<html>
<head>
    <title>Exercise 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="get">
    <h1>Enter a Name Below!</h1>
    <label for="fname">First Name: </label>
    <input type="text" name="fname" id="fname">
    <br>
    <label for="lname">Last Name: </label>
    <input type="text" name="lname" id="fname">
    <br>
    <input type="submit">
</form>
<?php

if (isset($_GET['lname']) && isset($_GET['fname'])) {
    $lname = $_GET['lname'];
    $fname = $_GET['fname'];

    $search = "SELECT * FROM People WHERE lName = '$lname' AND fname = '$fname';";
    $test = $conn->query($search);

    if (!$test->num_rows) {
        $add = "INSERT INTO People(lName, fName) VALUES('$lname', '$fname');";
        $test = $conn->query($add);;
    }

    $qry = "SELECT * FROM People;";
    $res = $conn->query($qry);

    while ($item = $res->fetch_array()) {
        echo "<p class='name'>" . $item['fName'] . " " . $item['lName'] . "</p>";
    }
    echo "<br><br>";
} ?>
</body>
</html>