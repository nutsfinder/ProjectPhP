<?php
class User {
    private $conn;
    private $table = 'users';

    public $id;
    public $name;
    public $email;
    public $password;
    public $role;
    public $company_id; // Optional if a user belongs to a specific company

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create a new user (e.g., client or admin)
    public function create() {
        $query = "INSERT INTO " . $this->table . " 
                  (name, email, password, role, company_id) 
                  VALUES (:name, :email, :password, :role, :company_id)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password); // Ensure password is hashed
        $stmt->bindParam(':role', $this->role);
        $stmt->bindParam(':company_id', $this->company_id);

        return $stmt->execute();
    }

    // Get all users
    public function getAllUsers() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Get users by role (e.g., clients, admins)
    public function getUsersByRole($role) {
        $query = "SELECT * FROM " . $this->table . " WHERE role = :role";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':role', $role);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Get clients (specific role: 'client')
    public function getClients() {
        return $this->getUsersByRole('client');
    }

    // Get admins (specific role: 'admin')
    public function getAdmins() {
        return $this->getUsersByRole('admin');
    }

    // Get user by ID
    public function getUserById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Update user details
    public function update() {
        $query = "UPDATE " . $this->table . " 
                  SET name = :name, email = :email, role = :role, company_id = :company_id 
                  WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':role', $this->role);
        $stmt->bindParam(':company_id', $this->company_id);
        $stmt->bindParam(':id', $this->id);

        return $stmt->execute();
    }

    // Delete a user
    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Authenticate a user (login functionality)
    public function authenticate($email, $password) {
        $query = "SELECT * FROM " . $this->table . " WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
