<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "student_db";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die ('Unable to connect');
