<?php
class LoginController {
    private $ocon;

    public function __construct($ocon) {
        $this->ocon = $ocon;
    }

    public function login($user, $pass) {
        $sql = "SELECT * FROM accounts WHERE username='$user' AND password='$pass'";
        $result = $this->ocon->query($sql);

        if ($result->num_rows > 0) {
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION["user"] = $user;
            $_SESSION["quyen"] = $row["quyen"];
            header("location:index.php");
        } else {
            header("location:login.php?error=1");
        }
    }
}

$user = $_GET["user"];
$pass = $_GET["pass"];
include "connection.php";

$loginController = new LoginController($ocon);
$loginController->login($user, $pass);
