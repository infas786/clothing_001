<?php
$servername = 'localhost';
$username = 'root';
$password ='';
$dbname = 'clothing_001';

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection Failed");
}
else{
    //echo "Successfully Connected";
}
 ?>