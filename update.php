<?php 
include __DIR__."/partials/templates/header.php"; 
include __DIR__."/partials/update/server.php";
?>


<div class="container p-3">
    <form action="partials/update/server-edit.php" method="POST">
        <div class="form-group">
            <label for="roomNumber">Numero stanza</label>
            <input type="text" class="form-control" name="roomNumber" value="<?php echo $row["room_number"]; ?>" id="roomNumber">
        </div>
        <div class="form-group">
            <label for="floor">Numero piano</label>
            <input type="text" class="form-control" name="floor" value="<?php echo $row["floor"]; ?>" id="floor">
        </div>
        <div class="form-group">
            <label for="beds">Numero letti</label>
            <input type="text" class="form-control" name="beds" value="<?php echo $row["beds"]; ?>" id="beds">
        </div>
        <input type="hidden" class="form-control" name="id" value="<?php echo $row["id"]; ?>">
        <div class="form-group">
            <input type="submit" class="bg-warning form-control" value="Modifica">
        </div>
    </form>
</div>



<?php include __DIR__."/partials/templates/footer.php"; ?>