<?php
class LoginController {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    public function login($email, $password) {
        if (empty($email) || empty($password)) {
            return "Email and password are required.";
        }

        $user = $this->userModel->authenticateUser($email, $password);

        if ($user) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['first_name'] = $user['first_name'];
            header("Location: /home");
            exit();
        }

        return "Invalid email or password.";
    }
}
