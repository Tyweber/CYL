<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
include "DatabaseConnect.php";
include "facultyAccount.php";

function insertUser($firstname, $lastname) {
    try {
        $connection = getConnection();
        $sql = "INSERT INTO user (firstname, lastname) "
                . "VALUES ('$firstname', '$lastname')";
        $connection->exec($sql);
        $id = $connection->lastInsertId();
        $connection = null;
    } catch (Exception $ex) {
        echo "EXCEPTION : Insert failed : " . $ex->getMessage();
    }
    return $id;
}
#user is the table name in database cyl. user might be changed to facultyaccounttable

function getUserByID($id) {
    try {
        $connection = getConnection();
        $sql = "SELECT * FROM user WHERE id = $id";
        $result = $connection->query($sql);
        $user = new facultyAccount();
        foreach ($result as $row) {
            $user->id = $row['id'];
            $user->firstname = $row['firstname'];
            $user->lastname = $row['lastname'];
            break;
        }
        $connection = null;
    } catch (Exception $ex) {
        echo "EXCEPTION : Select failed : " . $ex->getMessage();
    }
    return $user;
}

function update($id, $firstname, $lastname) {
    try {
    $connection = getConnection();
    $sql = "UPDATE user SET firstname= '$firstname', lastname = '$lastname' WHERE id = $id";
    $result = $connection->exec($sql);
    $connection = null;
    } catch (Exception $ex){
        echo "EXCEPTION : Update failed : " . $ex->getMessage();
    }
    $user = new facultyAccount();
    $user->id = $id;
    $user->firstname = $firstname;
    $user->lastname = $lastname;
    return $user;
}

function delete($id) {
    try{
        $connection = getConnection();
        $sql = "DELETE FROM user WHERE id = $id";
        $result = $connection->exec($sql);
        $connection = null;
    } catch (Exception $ex) {
        echo "EXCEPTION : Delete failed : " . $ex->getMessage();
    }
}
?>

