<?php
include_once __DIR__ . "/includes/init.php";
include_once __DIR__ . "/classes/Movie.php";

Movie::delete($pdo, $_GET["id"]);