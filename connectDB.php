<?php

//Ideally we should encrypt such a file when using it commercially

$connection = mysqli_connect('localhost','root','palette');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'studentsleave_db');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

?>