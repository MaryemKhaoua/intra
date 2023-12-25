<?php
include_once "models/UserModel.php";


class UserController{
    
    public function signUp($nom, $prenom, $email, $password) {
        $ObjetUser = new User();
        $signUpUser = $ObjetUser->createUser($nom, $prenom, $email, $password);
        if ($signUpUser) {
            require_once "view/signin.php";
        } else {
            echo "Registration failed!";
            require_once "view/SignUp.php";
        }
    }




    
}

?>