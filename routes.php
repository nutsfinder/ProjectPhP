<?php
require 'config/Database.php';
require 'app/models/UserModel.php';
require 'app/controllers/SignupController.php';
require 'app/controllers/LoginController.php';

$db = Database::getInstance()->getConnection();
$userModel = new UserModel($db);

if ($_SERVER['REQUEST_URI'] === '/signup' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $signupController = new SignupController($userModel);
    echo $signupController->register($_POST);
} elseif ($_SERVER['REQUEST_URI'] === '/login' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginController = new LoginController($userModel);
    echo $loginController->login($_POST['email'], $_POST['password']);
} elseif ($_SERVER['REQUEST_URI'] === '/login') {
    require 'app/views/login.php';
} elseif ($_SERVER['REQUEST_URI'] === '/signup') {
    require 'app/views/signup.php';
} elseif ($_SERVER['REQUEST_URI'] === '/home') {
    require 'app/views/home.php';
} elseif ($_SERVER['REQUEST_URI'] === '/logout') {
    session_start();
    session_destroy();
    header("Location: /login");
    exit();
}
