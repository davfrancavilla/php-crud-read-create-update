<?php 
include __DIR__."/partials/templates/header.php";
?>


<div class="container p-3">
    <form action="partials/create/server.php" method="POST">
        <div class="form-group">
            <label for="roomNumber">Numero stanza</label>
            <input type="text" class="form-control" name="roomNumber" value="" id="roomNumber" placeholder="Numero stanza">
        </div>
        <div class="form-group">
            <label for="floor">Numero piano</label>
            <input type="text" class="form-control" name="floor" value="" id="floor" placeholder="Numero piano">
        </div>
        <div class="form-group">
            <label for="beds">Numero letti</label>
            <input type="text" class="form-control" name="beds" value="" id="beds" placeholder="Numero letti">
        </div>
        <div class="form-group">
            <input type="submit" class="bg-warning form-control" value="Aggiungi">
        </div>
    </form>
</div>



<?php include __DIR__."/partials/templates/footer.php"; ?>