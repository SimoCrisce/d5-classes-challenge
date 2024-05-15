<?php
include_once __DIR__ . "/includes/init.php";
include_once __DIR__ . "/classes/User.php";

$user = [];
$user['username'] = $_POST['username'] ?? '';
$user['password'] = $_POST['password'] ?? '';

User::login($pdo);
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
<body class="bg-secondary">
    <div class="grid-center">
        <div class="rounded-2 bg-white p-5">
            <form action="" method="post" novalidate>
                <h2 class="text-center">Accedi</h2>
                <div class="input-group mb-3 mt-5">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="d-flex justify-content-center"><button class="btn btn-primary">Accedi</button></div>
            </form>
            <p class="mt-2">Non sei registrato? <a href="/u5-w1/d5%20challenge/register.php">Registrati</a></p>
        </div>
    </div>
</body>
</html>

<?php include_once __DIR__ . "/includes/end.php";
