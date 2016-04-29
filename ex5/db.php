<?php
$user = 'root';
$pass = 'root';
$db = 'mysite';

$conn = new mysqli("localhost", $user, $pass, $db);

if($conn->connect_errno > 0){
    echo 'Unable to connect to database';
}
    $qry = "CREATE TABLE People(lName VARCHAR(16), fName VARCHAR(16))";
    $test= $conn->query($qry);
    if(!$test) {
        echo $conn->error;
    }