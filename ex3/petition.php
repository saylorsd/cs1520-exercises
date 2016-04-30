<?php
/**
 * Created by PhpStorm.
 * User: Steve Saylor
 * Date: 2/8/2016
 * Time: 5:00 PM
 */

var_dump($_GET);
if (($_GET['name'])!="") {
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $fp = fopen('sig.txt', 'r');
    $found = false;
    while(true){
        $line = fgets($fp);
        echo $line;
        echo $name;
        if($name == substr($line,strlen($name))){
            $found = true;
        }
        if(!$line){
            break;
        }
    }
    fclose($fp);
    if($found){
        echo "<p>You Already Signed</p><br/>";
    } else{
        echo "<p>Thanks for Signing</p>";
        fopen($fp,'a');
        fwrite($fp, $name . ":" . $phone . "\r\n");
        fclose($fp);
    }
}
?>
<html>
<body>
<h1> QUIZ 1 PETITION</h1>
<p>You can sign this petition by entering your information below.</p>
<form id="petition" action="petition.php" method="get">
    Name:
    <input type="text" name="name"/>
    <br/>
    Phone Number
    <input type="text" name="phone"/>
    <br/>
    <button type="submit">Sign!</button>
</form>
</body>
</html>