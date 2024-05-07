<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Pass</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1 class="text-center mt-5">FORGOT PASSWORD</h1>
    <div class="container">
        <!-- form nay gui mail -->
        <form action="send_email.php" method="post">
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="name@gmail.com" name="email" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="send">Send email</button>
            </div>
        </form>
        <!-- form nay gui ma -->
        <form action="verify.php" method="post">
            <div class="mb-3">
                <label class="form-label">Authentication code</label>
                <input class="form-control" name="verify" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="send">Verify</button>
            </div>
        </form>
    </div>
</body>

</html>