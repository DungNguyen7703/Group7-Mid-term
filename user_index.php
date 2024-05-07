<!DOCTYPE html>
<html lang="en">
<?php
  Session_start();
  include 'connection.php';
?>
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="login.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="signup.js"></script>
</head>

<style>
    body {
        background-color: #f7f7f7;
        font-family: Arial, sans-serif;
    }
    .info-container {
        max-width: 600px;
        margin: 30px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .info-group {
        margin-bottom: 15px;
    }
    .info-group label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }
    .info-group input[readonly] {
        background-color: #e9ecef;
        opacity: 1;
    }
    .info-group input, .info-group select {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }
    .button-group {
        display: flex;
        justify-content: space-between;
    }
    .button-group button {
        padding: 5px 10px; 
        width: auto; 
        margin: 0 5px;
    }
    .button-group button:last-child {
        margin-right: 0;
    }
    .fa {
        margin-right: 5px;
    }
</style>

<body> 
<?php
      $user = $_SESSION["user"];
      echo "<h1> Welcome user ". $user. "</h1>"
    ?>    
    <div class="info-container">
    <h3 class="text-center mb-4">Xin chào, <span id="greetingUsername"><?php echo $_SESSION["user"]; ?></span></h3>
    <form>
        <div class="info-group">
            <label for="fullname">Họ tên:</label>
            <input type="text" id="fullname" name="fullname" value="">
        </div>
        <div class="info-group">
            <label for="birthdate">Ngày sinh:</label>
            <input type="date" id="birthdate" name="birthdate" value="">
        </div>
        <div class="info-group">
            <label for="gender">Giới tính:</label>
            <select id="gender" name="gender">
            <option value="male" selected>Nam</option>
            <option value="female">Nữ</option>
            <option value="other">Khác</option>
            </select>
        </div>
        <div class="info-group">
            <label for="idcard">Căn cước công dân:</label>
            <input type="text" id="idcard" name="idcard" value="">
        </div>
        <div class="info-group">
            <label for="phone">Số điện thoại:</label>
            <input type="tel" id="phone" name="phone" value="">
        </div>
        <div class="info-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="">
        </div>
        <div class="button-group">
            <button type="submit" class="btn-save" ><i class="fa fa-save"></i>Lưu</button>
            <button type="button" class="btn-logout"><i class="fa fa-sign-out"></i><a href="logout.php">Đăng xuất</a></button>
        </div>
    </form>
</body>
