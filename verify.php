<?php
session_start();
$verify = $_POST["verify"];

if ($verify == $_SESSION["code"]) {
    echo "<script>alert('VERIFY CODE MATCHED!')</script>";
    echo "<script>window.location.href = 'password.php'</script>";
} else {
    session_unset();
    session_destroy();
    echo "<script>alert('VERIFY CODE UNMATCHED! Please enter your email again!')</script>";
    echo "<script>window.location.href = 'forgot_pass.php'</script>";
}