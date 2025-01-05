<?php

include 'db.php';

$id = $_POST['id'];
$status = $_POST['status'];



$stmt = $conn->prepare("update tasks set status = ? where id = ? ");
$stmt->bind_param("si", $status, $id); 

$stmt->execute();





?>