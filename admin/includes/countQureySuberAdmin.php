<?php

$sql = "SELECT * FROM departments ";
$res_data = mysqli_query($con, $sql);
$departments_count = mysqli_num_rows($res_data);
$departments_count =  $departments_count;

$sql = "SELECT * FROM courses ";
$res_data = mysqli_query($con, $sql);
$courses_count = mysqli_num_rows($res_data);
$courses_count =  $courses_count;

$sql = "SELECT * FROM videos ";
$res_data = mysqli_query($con, $sql);
$videos_count = mysqli_num_rows($res_data);
$videos_count =  $videos_count;