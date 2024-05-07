<?php
include "connection.php";

class LoginController
{
    private $ocon;

    public function __construct($ocon)
    {
        $this->ocon = $ocon;
    }

    public function login($user, $pass)
    {
        $user = $this->ocon->real_escape_string($user);
        $pass = $this->ocon->real_escape_string($pass);
        $sql = "SELECT * FROM accounts WHERE username='$user'";
        $result = $this->ocon->query($sql);

        if ($result->num_rows > 0) {
            session_start();
            $row = $result->fetch_assoc();
            $hashed_password = $row['password'];
            if (password_verify($pass, $hashed_password)) {
                $_SESSION["user"] = $user;
                $_SESSION["type"] = $row["type"];
                if ($_SESSION["type"] === "1") {
                    header("location:admin_index.php");
                } else {
                    header("location:user_index.php");
                }
            } else {
                echo "<script> alert('Đăng nhập thất bại!')</script>";
                echo "<script>window.location.href = 'login.php?error=1'</script>";
            }
        }
        else {
            echo "<script> alert('Tài khoản không tồn tại!')</script>";
            echo "<script>window.location.href = 'login.php?error=2'</script>";
        }
    }
}

$user = $_POST["user"];
$pass = $_POST["pass"];

$ocon = new mysqli("localhost", "root", "", "exam2");
$loginController = new LoginController($ocon);
$loginController->login($user, $pass);
?>