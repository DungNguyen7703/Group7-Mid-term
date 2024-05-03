<?php
session_start();
$verify = $_POST["verify"];

if ($verify == $_SESSION["code"]) {
    echo "<script>alert('VERIFY CODE MATCHED!')</script>";
    echo "<script>window.location.href = 'password.php'</script>";
} else {
    echo "<script>alert('VERIFY CODE UNMATCHED! Please check your code again!')</script>";
    echo "<script>window.location.href = 'forgot_pass.php'</script>";
}