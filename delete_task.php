<?php

include 'db.php';

$id = $_POST['id'];



$stmt = $conn->prepare("delete from tasks where id = ? ");
$stmt->bind_param("i", $id); 

$stmt->execute();





?>