<?php

$username = 'root';
$db_name = 'task_manager';
$host_name = 'localhost';
$password = '';


$conn = new mysqli($host_name,$username,$password,$db_name);

if($conn->connect_error)
{
  die("Connection not successfull!".$conn->connect_error);
}




?>