<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of facultyAccount
 *
 * @author Ty
 */
class facultyAccount {
    public $firstName = "";
    public $lastName = "";
    public $address = "";
    public $city= "";
    public $country = "";
    public $phone = "";
    public $email = "";
    public $birthDate = "";
    public $ethnicity = "";
    #TODO add all fields 
    public function validate() {
        if($this -> firstName != ""){
            return true;
        } else{
            return false;
        }
    }
    public function toString() {
        return "First Name:" . $this->firstName;
    }
}
?>
