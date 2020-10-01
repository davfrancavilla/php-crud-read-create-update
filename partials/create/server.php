<?php
include __DIR__."/../database.php";
include __DIR__."/../functions.php";


$insert = false;
if (empty($_POST["roomNumber"])){
    echo nl2br("Non hai inserito il numero della stanza.\n");
    $insert = true;
}
if (empty($_POST["floor"])){
    echo nl2br("Non hai inserito il numero del piano.\n");
    $insert = true;
}
if (empty($_POST["beds"])){
    echo nl2br("Non hai inserito il numero di letti.\n");
    $insert = true;
}

if ($insert){
    die();
}

insertRoom($conn, $_POST["roomNumber"], $_POST["floor"], $_POST["beds"], $basepath);

?>

