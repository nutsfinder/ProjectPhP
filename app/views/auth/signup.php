<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ENISMATES - Signup</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="../../../inc/assets/images/logos/seodashlogo.png" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../inc/assets/css/styles.min.css" />
</head>

<body>
  <!-- Page Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <!-- Logo -->
                            <a href="index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                <img src="../../../inc/assets/images/logos/image.png" width="240" height="75" alt="ENISMATES">
                            </a>
                            <p class="text-center">Your Financial Company</p>
                            <!-- Signup Form -->
                            <form method="POST" action="/signup">
                                <?php if (!empty($error)): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo htmlspecialchars($error); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="mb-3">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your last name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="birthDate" class="form-label">Birth Date</label>
                                    <input type="date" class="form-control" id="birthDate" name="birthDate" required>
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="authority" class="form-label">Authority</label>
                                    <select class="form-control" id="authority" name="authority" required>
                                        <option value="Client">Client</option>
                                        <option value="Admin">Admin</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-2 fs-5 mb-3">Sign Up</button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-6 mb-0">Already have an account?</p>
                                    <a class="text-primary fw-bold ms-2" href="/login">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="../../../inc/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../../../inc/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
