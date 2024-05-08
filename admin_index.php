<?php
  Session_start();
  include 'connection.php';

if (!isset($_SESSION['user'])) {
    // Nếu chưa đăng nhập, chuyển hướng người dùng đến trang đăng nhập
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<style>
        /* CSS cho header */
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
        }

        .logout-button {
            background-color: #f44336;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        /* CSS cho sidebar */
        .sidebar {
            width: 20%;
            background-color: #f9f9f9;
            padding: 20px;
            height: 100vh;
            position: fixed;
            top: 50px;
            left: 0;
        }

        .sidebar-item {
            margin-bottom: 10px;
        }
        .container {
          margin-left: 20%;
          margin-top: 5%;
        }
</style>
</head>
<body>

    <div class="header">
        <div class="title">Admin Page</div>
        <button class="logout-button"><a href="logout.php">Log Out</a></button>
    </div>
    <div class="sidebar">
        <div class="sidebar-item">Dashboard</div>
        <div class="sidebar-item">Customers</div>
        <div class="sidebar-item">Orders</div>
        <div class="sidebar-item">Accounts</div>
        <div class="sidebar-item">User Management</div>
        <div class="sidebar-item">Settings</div>
    </div>
    <div class="main">

<div class="container">   
<?php
      $user = $_SESSION["user"];
      echo "<h1> Welcome $user </h1>";
      $sql="SELECT * FROM accounts ";   
    $result=$ocon->query($sql);
    if($result->num_rows>0){
?>
  <table class="table table-bordered">
        <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Operation</th>
        </tr>
        </thead>
        <tbody>
            
        <?php 
            while($row=$result->fetch_assoc()){
        ?>
            <tr>
                <td><?php  echo $row["username"]; ?></td>
                <td><?php  echo $row["password"];?></td>
                <td><?php  echo $row["email"];?></td>
                <td> <a href="update_acc.php?account_id=<?php  echo $row['account_id']; ?>">Sửa</a>,
                 <a href="del_acc.php?account_id=<?php  echo $row['account_id']; ?>">Xóa</a> </td>
            </tr>
        <?php 
            }
        ?>
        
        </tbody>
    </table>
    </div>
<?php
    }
?>
</div>
</div>
</body>
