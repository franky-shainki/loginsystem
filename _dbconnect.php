<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "loginsystem";
$conn = mysqli_connect("$servername", "$username", "$password", "$database");
if(!$conn){
    die("error" . mysqli_connect_error());
}
?>