<?php
include __DIR__."/partials/templates/header.php";
include __DIR__."/partials/show/server.php";
?>

<div class="container p-3">
    <h1>Dettagli stanza</h1>
    <ul class="list-group">
        <li class="list-group-item">ID: <?php echo $row["id"]?></li>
        <li class="list-group-item">Numero della stanza: <?php echo $row["room_number"]?></li>
        <li class="list-group-item">Piano: <?php echo $row["floor"]?></li>
        <li class="list-group-item">Numero letti: <?php echo $row["beds"]?></li>
    </ul>
    <div class="buttons pt-3">
        <a href="update.php?id=<?php echo $row["id"]?>" class="btn btn-info" role="button" aria-pressed="true">MODIFICA</a>
        <form class="ml-3" action="partials/delete/server.php" method="post">
            <input type="submit" class="btn btn-danger" value="DELETE">
            <input type="hidden" name="id" value="<?php echo $row["id"]?>">
        </form>
    </div>
</div>
<?php
include __DIR__."/partials/templates/footer.php";
?>