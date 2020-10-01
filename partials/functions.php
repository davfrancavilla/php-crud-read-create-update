<?php
// passo la connessione come parametro in quanto le variabili 
// fuori dalla funziona non vengono viste dall'interno
function getAll($conn, $table){
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    if ($result && $result->num_rows>0){
        $results = [];
        while($row = $result->fetch_assoc()){
            $results[] = $row;
        }
    } elseif ($result){
        $results = [];
    } else {
        $results = false;
    }
    $conn->close();
    return $results;
}


function removeId($conn, $table, $id, $basepath, $roomNumber){
    $sqlSearch = "SELECT room_number FROM stanze WHERE id = ?";
    $stmtSearch = $conn->prepare($sqlSearch);
    $stmtSearch->bind_param("i", $id);
    $stmtSearch->execute();
    $stmtSearch->store_result();
    $stmtSearch->bind_result($roomNumber);
    $stmtSearch->fetch();

    $sqlDelete = "DELETE FROM $table WHERE id = ?";
    $stmtDelete = $conn->prepare($sqlDelete);
    $stmtDelete->bind_param("i", $id);  
    $stmtDelete->execute();


    if ($stmtDelete && $stmtDelete->affected_rows>0){
        header("Location: $basepath/index.php?roomNumber=$roomNumber");
    } else {
        echo "not ok";
    }
    $stmtSearch->close();
    $stmtDelete->close();
    $conn->close();
}

function getId($conn, $table, $id){
    $sql = "SELECT * FROM $table WHERE id = $id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows>0){
        $row = $result->fetch_assoc();
    } elseif ($result){
        $row = "";
    } else {
        $row = false;
    }
    $stmt->close();
    $conn->close();
    return $row;

}

function insertRoom($conn, $roomNumberPost, $floorPost, $bedsPost, $basepath){
    $sql = "INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES (?, ?, ?, now(), now())";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iii", $roomNumber, $floor, $beds);

    $roomNumber = $roomNumberPost;
    $floor = $floorPost;
    $beds = $bedsPost;

    $stmt->execute();

    
    if ($stmt && $stmt->affected_rows>0){
        header("Location: $basepath/show.php?id=$stmt->insert_id");
    } elseif ($stmt) {
        die("Nessuna stanza inserita");
    } else {
        die("Errore");
    }
    $stmt->close();
    $conn->close();
}

?>