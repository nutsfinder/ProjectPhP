<?php
require_once 'config/Database.php';
require_once 'app/models/user.php';

class AuthController {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User($this->db);
            $user->email = $_POST['email'];
            $user->password = $_POST['password'];

            $authenticatedUser = $user->login();
            if ($authenticatedUser) {
                session_start();
                $_SESSION['user'] = $authenticatedUser;

                if ($authenticatedUser['role'] === 'admin') {
                    header('Location: /admin/dashboard');
                } else {
                    header('Location: /client/home');
                }
                exit;
            } else {
                $error = 'Invalid credentials';
                require_once 'app/views/auth/login.php';
            }
        } else {
            require_once 'app/views/auth/login.php';
        }
    }

    public function signup() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User($this->db);

            $user->first_name = $_POST['first_name'];
            $user->last_name = $_POST['last_name'];
            $user->email = $_POST['email'];
            $user->password = $_POST['password'];
            $user->role = $_POST['role'];

            if ($user->signup()) {
                header('Location: /login');
            } else {
                $error = 'Signup failed';
                require_once 'app/views/auth/signup.php';
            }
        } else {
            require_once 'app/views/auth/signup.php';
        }
    }
}
