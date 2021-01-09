<?php

// $db['db_host'] = "localhost";
// $db['db_user'] = "u277120353_adf";
// $db['db_pass'] = "i!Q2rBAxpilY";
// $db['db_name'] = "u277120353_adf";


// foreach ($db as $key => $value) {

// 	define(strtoupper($key), $value);
// }

// Online ( http://adf.fsed.online/ )
// $con = mysqli_connect('localhost', 'u277120353_adf', 'i!Q2rBAxpilY');
// mysqli_set_charset($con, 'utf8');
// mysqli_select_db($con, 'u277120353_adf');


//Local
$con = mysqli_connect('localhost', 'root', '');
mysqli_set_charset($con, 'utf8');
mysqli_select_db($con, 'adf');

// if ($con) {
//     echo 'good';
// } else {
//     die(mysqli_error($con));
// }