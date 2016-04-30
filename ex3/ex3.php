<?php
/**
 * Created by PhpStorm.
 * User: Steve
 * Date: 4/18/2016
 * Time: 5:04 PM
 */

if (isset($_GET['name'])){
    $check = add_name($_GET['name']);
    if($check){
        echo $_GET['name'] . " you've already been registered.";
    }

}

function add_name($name){
    $fp = fopen('names.txt', 'r+');
    while($line = fgets($fp)){
        if(!strncmp($line, $name,strlen($line)-1)){
            fclose($fp);
            return true;
        }
    }
    fseek($fp, 0, SEEK_END);
    fwrite($fp, $name . "\n");
    fclose($fp);
    return false;
}