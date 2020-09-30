<?php

include __DIR__."/../database.php";


if(empty($_POST["id"])){
    die("nessun id");
}

$id = $_POST["id"];


$sqlSearch = "SELECT room_number FROM stanze WHERE id = ?";
$stmtSearch = $conn->prepare($sqlSearch);
$stmtSearch->bind_param("i", $id);
$stmtSearch->execute();
$stmtSearch->store_result();
$stmtSearch->bind_result($roomNumber);
$stmtSearch->fetch();
$stmtSearch->free_result();

$sqlDelete = "DELETE FROM stanze WHERE id = ?";
$stmtDelete = $conn->prepare($sqlDelete);
$stmtDelete->bind_param("i", $id);  
$stmtDelete->execute();


if ($stmtDelete && $stmtDelete->affected_rows>0){
    header("Location: $basepath/index.php?roomNumber=$roomNumber");
} else {
    echo "not ok";
}

$conn->close();
?>