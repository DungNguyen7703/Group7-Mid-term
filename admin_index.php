<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="login.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script src="signup.js"></script>
</head>

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
</style>

<body>
    <div class="header">
        <div class="title">Admin Page</div>
        <button class="logout-button">Log Out</button>
    </div>
    <div class="sidebar">
        <div class="sidebar-item">Dashboard</div>
        <div class="sidebar-item">Customers</div>
        <div class="sidebar-item">Orders</div>
        <div class="sidebar-item">Accounts</div>
        <div class="sidebar-item">User Management</div>
        <div class="sidebar-item">Settings</div>
    </div>
</body>