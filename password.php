<?php
session_start();
$email = $_SESSION["email"];
$con = mysqli_connect("localhost", "root", "", "exam2");
$sql = "SELECT * FROM accounts WHERE email = '$email'";
$result = $con->query($sql);
$your_pass = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1 class="text-center mt-3">Your password is <?php echo $your_pass["password"] ?></h1>
    <?php
    session_unset();
    session_destroy();
    ?>
    <a href="login.php" class="btn btn-primary">Return to Login</a>
</body>

</html>