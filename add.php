<?php
include_once __DIR__ . "/includes/start.php";
include_once __DIR__ . "/includes/init.php";
include_once __DIR__ . "/classes/Movie.php";

Movie::create($pdo);

?>

<form action="" method="post" class="row justify-content-center">
    <div class="col-6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Titolo" name="title">
            <input type="number" class="form-control" placeholder="Anno" name="year">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Contenuto" name="content">
        </div>
        <button class="btn btn-primary">Aggiungi</button>
    </div>
</form>



<?php
include_once __DIR__ . "/includes/end.php";