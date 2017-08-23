<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo '<?xml version="1.0" encoding="UTF-8" ?>';
require 'dbconf.php';
// TODO use POST
$date = $_POST["date"];
$sql = "SELECT * FROM users LEFT JOIN reservation ON users.id=reservation.user_id WHERE DATE(reservation.starts_at)='$date'";
$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if ($conn->connect_error){
    die("<users></users>");
}
echo '<users>';
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()){
    echo '<user>';
    echo "<firstname>".$row['firstname']."</firstname>";
    echo "<lastname>".$row['lastname']."</lastname>";
    echo "<terrain>".$row['terrain_id']."</terrain>";
    echo "<starts>".$row['starts_at']."</starts>";
    echo "<ends>".$row['ends_at']."</ends>";
    echo '</user>';
}
echo '</users>';





