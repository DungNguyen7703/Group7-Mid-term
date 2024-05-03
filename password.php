<?php
session_start();
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
    <div class="container">
        <form action="#" method="post" onsubmit="return validateForm()">
            <h1>Reset password</h1>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input id="password" type="password" class="form-control" placeholder="Enter password" id="pwd"
                    name="newpassword" required>
            </div>
            <div class="form-group">
                <label for="pwd">Corfirm password:</label>
                <input id="confirm" type="password" class="form-control" placeholder="Confirm password" id="pwd"
                    required>
            </div>
            <button type="submit" class="btn btn-primary" name="send-password">Submit</button>
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_SESSION["email"];
        $newpassword = $_POST["newpassword"];
        $con = mysqli_connect("localhost", "root", "", "exam2");
        $sql = "UPDATE accounts SET password = '$newpassword' WHERE email = '$email'";
        $con->query($sql);
        echo "<script>alert('Reset password successed!')</script>";
        echo "<script>window.location.href = 'login.php'</script>";
        session_destroy();
    }
    ?>
    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirm = document.getElementById("confirm").value;
            if (password !== confirm) {
                alert("Unmatched password!");
                return false;
            }
            return true;
        };
    </script>
</body>

</html>