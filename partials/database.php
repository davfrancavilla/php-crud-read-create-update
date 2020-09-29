<?php

include __DIR__."/env.php";

$conn = new mysqli($servername,$username, $password, $dbname);


if ($conn and $conn->connect_error){
    echo $conn->connect_error;
    die();
}

?>