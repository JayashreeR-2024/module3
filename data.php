<?php
$servername = "localhost"
$username = "sem2"
$password = "123456"
$dbname = "student"

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect-error)
{
    die("not connected!",$conn->connect-error);
}
echo"Connected successfully!";
?>