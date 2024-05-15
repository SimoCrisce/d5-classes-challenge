<?php
include_once __DIR__ . "/init.php";

if (isset($_SESSION["id"])) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$_SESSION["id"]]);
    $user = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark mb-4" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="navbar-collapse d-flex" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link <?= $_SERVER["REQUEST_URI"] === "/u5-w1/d5%20challenge/" ? "active" : "" ?>" href="/u5-w1/d5%20challenge/">Home</a>
                <a class="nav-link <?= $_SERVER["REQUEST_URI"] === "/u5-w1/d5%20challenge/add.php" ? "active" : "" ?>" href="/u5-w1/d5%20challenge/add.php">Aggiungi</a>
            </div>
        </div>
        <div class="text-white"><?= isset($user["username"]) ? "Bentornato, $user[username]!" : "" ?></div>
        <div class="navbar-nav">
            <a class="nav-link <?= isset($user["username"]) ? "" : "d-none" ?>" href="/u5-w1/d5%20challenge/logout.php">Logout</a>
            <a class="nav-link <?= isset($user["username"]) ? "d-none" : "" ?>" href="/u5-w1/d5%20challenge/login.php">Login</a>
        </div>
    </div>
    </nav>
    <div class="container">
