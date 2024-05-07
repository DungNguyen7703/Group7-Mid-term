<?php
include('connection.php');
class RegisterController {
    private $ocon;

    public function __construct($ocon) {
        $this->ocon = $ocon;
    }

    public function register($username, $password, $email, $type) {
        $sql = "INSERT INTO accounts(username, password, email, type) VALUES('$username','$password','$email','$type')";
        $result = $this->ocon->query($sql);
    }
}

    $register = new RegisterController($ocon);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $entered_password = $_POST["password"];
        $password = password_hash($entered_password, PASSWORD_DEFAULT);
        $email = $_POST["email"];
        $type = 2; //customer
        $register->register($username, $password, $email, $type);
        header('location: login.php');
    }
?>

