<?php
$insert=false;
$err=false;
$server="localhost";
$username="root";
$password="";
$database="php_crud";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn)
   die("not connect successfully");
   ?>