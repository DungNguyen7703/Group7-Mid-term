<?php
include "connection.php";

class LoginController {
    private $ocon;

    public function __construct($ocon) {
        $this->ocon = $ocon;
    }

    public function login($user, $pass) {
        $user = $this->ocon->real_escape_string($user);
        $pass = $this->ocon->real_escape_string($pass);
        $sql = "SELECT * FROM accounts WHERE username='$user' AND password ='$pass'";
        $result = $this->ocon->query($sql);

        if ($result->num_rows > 0) {
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION["user"] = $user;
            $_SESSION["type"] = $row["type"];
            header("location:index.php");
        } else {
            echo "<script>alert('Đăng nhập thất bại!')</script>";
            header("location:login.php?error=1");
        }
    }
}

$user = $_POST["user"];
$pass = $_POST["pass"];

$ocon = new mysqli("localhost", "root", "", "exam2");
$loginController = new LoginController($ocon);
$loginController->login($user, $pass);
?>