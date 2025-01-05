<?php

include 'db.php';

$title = $_POST['title'];
$description = $_POST['description'];


$stmt = $conn->prepare("INSERT INTO tasks (title, description) VALUES (?, ?)");
$stmt->bind_param("ss", $title, $description); 

if ($stmt->execute()) {
    header('Location: index.php');
    exit(); 
} else {
    echo "Error: " . $stmt->error;
}

header('Location : index.php');


?>