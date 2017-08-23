<?php session_start()?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrator</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <script src="main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <?php
        require 'dbconf.php';
        $adminId = 1;
        $adminMode = true;
        //$adminId = $_SESSION["adminId"];
        //$adminMode = $_SESSION["adminMode"];
        $conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
        if ($conn->connect_error){
            die("Database connection error:".$conn->connect_error);
        }
        $sql_user = "SELECT * FROM users WHERE id='$adminId'";
        echo "$sql_user";
        $result = $conn->query($sql_user);
        if ($result->num_rows != 1){
            die("Invalid user");
        }
        $user_name = $result->fetch_assoc()["firstname"];
        ?>
        <div class="content>"
        <h1>Welcome <?php $user_name ?></h1>
        <h2>Search users and reservations by date</h2>
        <form class="content">
            <input type="date" id="date_users" onsubmit="searchUsers()">
            <button onclick="searchUsers()">Search</button>
        </form>
        
        <table id="users_list">
        </table>
        </div>
        <?php
        $conn->close();
        // put your code here
        ?>
    </body>
</html>
