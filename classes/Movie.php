<?php
include_once __DIR__ . "/../includes/database.php";

class Movie
{
    static function delete($pdo, $id) {
        $stmt = $pdo->prepare('DELETE FROM movies WHERE id = ?');
        $stmt->execute([$id]);
        header("Location: /u5-w1/d5%20challenge/");
        exit;
    }
    static function create($pdo) {
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $stmt = $pdo->prepare("INSERT INTO movies (title, content, year) VALUES (:title, :content, :year)");
            $stmt->execute([
                "title" => $_POST["title"],
                "content" => $_POST["content"],
                "year" => $_POST["year"],
            ]);
            header("Location: /u5-w1/d5%20challenge/");
            exit;
        }
    }
    static function getAllMovies($pdo) {
        return $pdo->query("SELECT * FROM movies");
    }

    static function edit($pdo) {
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $stmt = $pdo->prepare("UPDATE movies SET title = :title, content = :content, year = :year WHERE id = :id");
            $stmt->execute([
                "id" => $_POST["id"],
                "title" => $_POST["title"],
                "content" => $_POST["content"],
                "year" => $_POST["year"],
            ]);
            header("Location: /u5-w1/d5%20challenge/");
            exit;
        }
    }
    static function getMovie($pdo) {
        if($_SERVER["REQUEST_METHOD"] === "GET"){
            $stmt = $pdo->prepare("SELECT * FROM movies WHERE id= ?");
            $stmt->execute([$_GET["id"]]);
            return $stmt->fetch();
        };
    }
}