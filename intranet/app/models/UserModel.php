<?php

include_once "/core/DataBase.php";

class UserModel extends DataBase{
    
    public function createUser($nom, $prenom, $email, $password){
        $sqlsignup = "INSERT INTO users (nom , prenom , email , password) VALUES ('$nom', '$prenom', '$email', '$password')";
        return $this->connect()->query($sqlsignup);
    }

}
?>