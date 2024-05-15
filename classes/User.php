<?php
include_once __DIR__ . "/../includes/database.php";

class User {
    public $id;
    public $username;
    public $password;

    function __construct($id, $username, $password){
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    static function register($pdo, $user) {
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
            $stmt->execute([
                "username" => $user["username"],
                "password" => password_hash($user["password"], PASSWORD_DEFAULT)
            ]);
            header("Location: /u5-w1/d5%20challenge/login.php");
            exit;
        }
    }

    static function login($pdo) {
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->execute([
                "username" => $_POST["username"]
            ]);
        
            $user_from_db = $stmt->fetch();
            
            if($user_from_db) {
                if(password_verify($_POST["password"], $user_from_db["password"])) {
                    $_SESSION["id"] = $user_from_db["id"];
                }
                header ("Location: /u5-w1/d5%20challenge/");
                exit;
            }
        }        
    }
    static function logout() {
        session_start();
        session_destroy();
        header("Location: /u5-w1/d5%20challenge/login.php");
        exit;
    }
}