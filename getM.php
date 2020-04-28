<?php

$servername = "";
$username = "";
$password = "";
$dbname = ""; 

$con = new mysqli($servername, $username, $password,$dbname);

$command = "/var/www/html/oj/./get";
$xx = exec($command);
$ss = json_decode($xx);
$x = $ss->m;
$y = $ss->cpu;

mysqli_query($con,"UPDATE xx SET m='$x',cpu='$y'");

mysqli_close($con);
?>