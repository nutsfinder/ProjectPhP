<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ENISMATES - Login</title>
  <link rel="shortcut icon" type="image/png" href="../../../inc/assets/images/logos/seodashlogo.png" />
  <link rel="stylesheet" href="../../../inc/assets/css/styles.min.css" />
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../../../inc/assets/images/logos/image.png" width="240" height="75" alt="ENISMATES">
                </a>
                <p class="text-center">Your Financial Company</p>
                
                <!-- Login Form -->
                <form method="POST" action="login.php">
                  <?php if (!empty($error)): ?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo $error; ?>
                    </div>
                  <?php endif; ?>

                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>

                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" id="rememberDevice" checked>
                      <label class="form-check-label text-dark" for="rememberDevice">Remember this Device</label>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4">Sign In</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Don't have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="signup.php">Signup</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JS Files -->
  <script src="../../../inc/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../../../inc/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
