<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'dbconf.php';
        $username = $password = $lastName = $firstName = "";
        $conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
        if ($conn->connect_error){
            die("Database connection error");
        }
        ?>
    </body>
</html>
