<?php
session_start();
include_once "/app/controllers/UserController.php";

$userController = new UserController();

if (isset($_POST['action'])) {
    $action = $_POST['action'];

    switch ($action) {
        case 'signup':
            extract($_POST);
            $userController->signUpUsers($nom, $prenom, $email, $password);
            break;
    }
}
















?>