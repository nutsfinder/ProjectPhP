<?php
class SignupController {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    public function register($data) {
        $firstName = $data['first_name'];
        $lastName = $data['last_name'];
        $email = $data['email'];
        $password = $data['password'];
        $role = 'user';
        $companyId = null;

        if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
            return "All fields are required.";
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        if ($this->userModel->createUser($firstName, $lastName, $email, $hashedPassword, $role, $companyId)) {
            header("Location: /login");
            exit();
        }

        return "Registration failed.";
    }
}
