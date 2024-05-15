<?php

session_start();
include_once  __DIR__ . '/database.php';

$user_from_db = false;
if (isset($_SESSION['id'])) {
    $stmt = $pdo->prepare("
        SELECT * FROM users
        WHERE id = :id
    ");

    $stmt->execute([
        'id' => $_SESSION['id'],
    ]);

    $user_from_db = $stmt->fetch();
}
