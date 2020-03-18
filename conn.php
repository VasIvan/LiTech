<?php
//This is a connection file, you have to add your your information in order to establish connection to your database
$servername = "localhost";
$DBusername = ""; //Username: example: Root
$DBpassword = ""; //Password: 
$DBname = ""; //Database name:

$conn = mysqli_connect($servername, $DBusername, $DBpassword, $DBname);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
