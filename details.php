<?php
include_once __DIR__ . "/includes/init.php";
include_once __DIR__ . "/includes/start.php";
include_once __DIR__ . "/classes/Movie.php";

$movie = Movie::getMovie($pdo);

?>

<div class="card mb-3">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title"><?= $movie["title"] ?></h5>
            <p><?= $movie["year"] ?></p>
        </div>
        <p class="card-text"><?= $movie["content"] ?></p>
        <div class="d-flex justify-content-between align-items-center">
            <a href="details.php?id=<?= $movie["id"]?>" class="text-decoration-none">Dettagli</a>
            <div>
                <a href="delete.php?id=<?= $movie["id"]?>" class="btn btn-danger">Elimina</a>
                <a href="edit.php?id=<?= $movie["id"]?>" class="btn btn-success">Modifica</a>
            </div>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . "/includes/end.php";