<?php
$host="localhost";
$user="root";
$password="";
$db="crud";

$conn=mysqli_connect($host,$user,$password,$db);

if($conn){
    echo "Connection Sucessful";
}else{
    echo "DB not connected";
}
?>