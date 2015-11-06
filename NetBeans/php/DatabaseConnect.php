<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function getConnection() {
    $serverName = "127.0.0.1";
    $dbname = "cyl";
    $username = "root";
    $password = "admin";
    try {
        $connection = new PDO("mysql:host=$serverName; dbname=$dbname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo "EXCEPTION:Connection failed : " . $e->getMessage();
    }
    return $connection;
}
?>