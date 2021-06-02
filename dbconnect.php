<?php
$insert=false;
$err=false;
$server="localhost";
$username="root";
$password="";
$database="php_crud";
$conn=mysqli_connect($server,$username,$password,$database) or die("Connection Failed......!!!");
mysqli_select_db($conn,$database) or die("Database not selected....!!!");