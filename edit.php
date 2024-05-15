<?php
include_once __DIR__ . "/includes/start.php";
include_once __DIR__ . "/includes/init.php";
include_once __DIR__ . "/classes/Movie.php";

Movie::edit($pdo);

$movie_data = Movie::getMovie($pdo);

?>

<form action="" method="post" class="row justify-content-center">
    <input type="hidden" value="<?= $_GET["id"] ?>" name="id">
    <div class="col-6">
        <div class="row">
            <div class="col-6">
                <label for="content">Titolo</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Titolo" id="title" name="title" value="<?= $movie_data["title"] ?>">
                </div>
            </div>
            <div class="col-6">
                <label for="content">Anno</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Anno" id="year" name="year" value="<?= $movie_data["year"] ?>">
                </div>
            </div>
        </div>
        <label for="content">Contenuto</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Contenuto" id="content" name="content" value="<?= $movie_data["content"] ?>">
        </div>
        <button class="btn btn-success">Modifica</button>
    </div>
</form>



<?php
include_once __DIR__ . "/includes/end.php";