<?php

include __DIR__."/../database.php";


if(empty($_POST["id"])){
    die("nessun id");
}

$id = $_POST["id"];

$sql = "DELETE FROM stanze WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);   
$stmt->execute();

if ($stmt && $stmt->affected_rows>0){
    header("Location: $basepath/index.php?roomId=$id");
} else {
    echo "not ok";
}

$conn->close();
?>