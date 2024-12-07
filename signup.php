<?php
require_once 'dbconnect.php';
session_start(); // Start the session to manage login

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // Validate inputs
    if (empty($name) || empty($lastName) || empty($phone) || empty($email) || empty($password)) {
        die("All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert the user into the database
    try {
        $stmt = $pdo->prepare("INSERT INTO user (name, lastname, email, password, phone) VALUES (:name, :lastName, :email, :password, :phone)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();

        // Account created successfully, now log the user in
        // Retrieve user information to start the session
        $stmt = $pdo->prepare("SELECT id, name, email FROM user WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];

            // Redirect to the index page (or dashboard)
            header("Location: index.php");
            exit(); // Ensure no further code is executed
        }
    } catch (PDOException $e) {
        die("Error creating account: " . $e->getMessage());
    }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ENISMATES</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/seodashlogo.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="./index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                <img src="assets/images/logos/image.png" width="240" height="75" alt="">
                            </a>
                            <p class="text-center">Your Financial Campagnien</p>
                            <form method="POST" action="">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="g-recaptcha mb-4"></div>
                                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4">Sign Up</button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                                    <a class="text-primary fw-bold ms-2" href="./login.php"> Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>