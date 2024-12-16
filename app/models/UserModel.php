<?php
class UserModel {
    private $db;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    public function createUser($firstName, $lastName, $email, $password, $role, $companyId) {
        $query = "INSERT INTO users (first_name, last_name, email, password, role, company_id)
                  VALUES (:first_name, :last_name, :email, :password, :role, :company_id)";
        $stmt = $this->db->prepare($query);

        return $stmt->execute([
            ':first_name' => $firstName,
            ':last_name' => $lastName,
            ':email' => $email,
            ':password' => $password,
            ':role' => $role,
            ':company_id' => $companyId,
        ]);
    }

    public function authenticateUser($email, $password) {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return null;
    }
}
