<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "facultyAccount.php";
include "facultyAccountDatabase.php";

$facultyAccount = new facultyAccount();
$facultyAccount->firstName = $_POST["firstName"];
if($facultyAccount -> validate()){
    echo 'Is valid';
    echo $facultyAccount -> toString();
} else {
    echo "Try Again";
}
$facultyAccount->lastName = $_POST["lastName"];
$facultyAccount->address = $_POST["address"];
$facultyAccount->city = $_POST["city"];
$facultyAccount->country = $_POST["country"];
$facultyAccount->phone = $_POST["phone"];
$facultyAccount->email = $_POST["email"];
$facultyAccount->birthDate = $_POST["birthDate"];
$facultyAccount->ethnicity = $_POST["ethnicity"];

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$address = $_POST["address"];
$city = $_POST["city"];
$country = $_POST["country"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$birthDate = $_POST["birthDate"];
$ethnicity = $_POST["ethnicity"];
echo("First Name:" . $firstName);
echo("Last Name:" . $lastName);
echo("<br>Address:" . $address . "</br>");
echo("<br>City:" . $city . "</br>");
echo("<br>Country:" . $country . "</br>");
echo("<br>Phone:" . $phone . "</br>");
echo("<br>Email:" . $email . "</br>");
echo("<br>Birth Date:" . $birthDate . "</br>");
echo("<br>Ethnicity:" . $ethnicity . "</br>");
$connection = getConnection();
?>



