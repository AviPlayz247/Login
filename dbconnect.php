<?php

//set connection variables
$host='sql3.freesqldatabase.com';
$username='sql3391886';
$password='bhvBJPJm1P';
$database_name= 'sql3391886';

//connection to server & database
$connection = mysqli_connect($host, $username, $password,$database_name) ;
 
//check connection 
if (mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
endif;

?>
