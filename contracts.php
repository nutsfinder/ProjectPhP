<?php
// Start the session to check for the logged-in user
session_start();

// Check if the user is logged in (session exists)
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if no user is logged in
    header("Location:login.php");
    exit();
}

// Get the user's name from the session
$userName = $_SESSION['name'];
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SeoDash Free Bootstrap Admin Template by Adminmart</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/seodashlogo.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">   
    <?php include 'sidebar.php'; ?>
    <div class="body-wrapper">
    <?php include 'header.php'; ?>
    <div class="container-fluid">
  <div class="card">
  
    <div class="card-body">
    <a href="/add-contract" class="btn btn-primary ms-auto">Add Contract</a>
      <h5 class="card-title">Contracts</h5>
      
      <div class="table-responsive">
        <table class="table text-nowrap align-middle mb-0" style="width: 100%;">
          <thead>
            <tr class="border-2 border-bottom border-primary border-0">
              <th scope="col" class="ps-0">Page Title</th>
              <th scope="col">Link</th>
              <th scope="col" class="text-center">Pageviews</th>
              <th scope="col" class="text-center">Page Value</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row" class="ps-0 fw-medium">
                <span class="table-link1 text-truncate d-block">Welcome to our website</span>
              </th>
              <td>
                <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/index.html</a>
              </td>
              <td class="text-center fw-medium">18,456</td>
              <td class="text-center fw-medium">$2.40</td>
            </tr>
            <tr>
              <th scope="row" class="ps-0 fw-medium">
                <span class="table-link1 text-truncate d-block">Modern Admin Dashboard Template</span>
              </th>
              <td>
                <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/dashboard</a>
              </td>
              <td class="text-center fw-medium">17,452</td>
              <td class="text-center fw-medium">$0.97</td>
            </tr>
            <tr>
              <th scope="row" class="ps-0 fw-medium">
                <span class="table-link1 text-truncate d-block">Explore our product catalog</span>
              </th>
              <td>
                <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/product-checkout</a>
              </td>
              <td class="text-center fw-medium">12,180</td>
              <td class="text-center fw-medium">$7,50</td>
            </tr>
            <tr>
              <th scope="row" class="ps-0 fw-medium">
                <span class="table-link1 text-truncate d-block">Comprehensive User Guide</span>
              </th>
              <td>
                <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/docs</a>
              </td>
              <td class="text-center fw-medium">800</td>
              <td class="text-center fw-medium">$5,50</td>
            </tr>
            <tr>
              <th scope="row" class="ps-0 fw-medium border-0">
                <span class="table-link1 text-truncate d-block">Check out our services</span>
              </th>
              <td class="border-0">
                <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/services</a>
              </td>
              <td class="text-center fw-medium border-0">1300</td>
              <td class="text-center fw-medium border-0">$2,15</td>
            </tr>
            <tr>
              <th scope="row" class="ps-0 fw-medium border-0">
                <span class="table-link1 text-truncate d-block">Check out our services</span>
              </th>
              <td class="border-0">
                <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/services</a>
              </td>
              <td class="text-center fw-medium border-0">1300</td>
              <td class="text-center fw-medium border-0">$2,15</td>
            </tr>
            <tr>
              <th scope="row" class="ps-0 fw-medium border-0">
                <span class="table-link1 text-truncate d-block">Check out our services</span>
              </th>
              <td class="border-0">
                <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/services</a>
              </td>
              <td class="text-center fw-medium border-0">1300</td>
              <td class="text-center fw-medium border-0">$2,15</td>
            </tr>
            <tr>
              <th scope="row" class="ps-0 fw-medium border-0">
                <span class="table-link1 text-truncate d-block">Check out our services</span>
              </th>
              <td class="border-0">
                <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/services</a>
              </td>
              <td class="text-center fw-medium border-0">1300</td>
              <td class="text-center fw-medium border-0">$2,15</td>
            </tr>
            <tr>
              <th scope="row" class="ps-0 fw-medium border-0">
                <span class="table-link1 text-truncate d-block">Check out our services</span>
              </th>
              <td class="border-0">
                <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/services</a>
              </td>
              <td class="text-center fw-medium border-0">1300</td>
              <td class="text-center fw-medium border-0">$2,15</td>
            </tr>
            <tr>
              <th scope="row" class="ps-0 fw-medium border-0">
                <span class="table-link1 text-truncate d-block">Check out our services</span>
              </th>
              <td class="border-0">
                <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/services</a>
              </td>
              <td class="text-center fw-medium border-0">1300</td>
              <td class="text-center fw-medium border-0">$2,15</td>
            </tr>
            <tr>
              <th scope="row" class="ps-0 fw-medium border-0">
                <span class="table-link1 text-truncate d-block">Check out our services</span>
              </th>
              <td class="border-0">
                <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/services</a>
              </td>
              <td class="text-center fw-medium border-0">1300</td>
              <td class="text-center fw-medium border-0">$2,15</td>
            </tr>
            <tr>
              <th scope="row" class="ps-0 fw-medium border-0">
                <span class="table-link1 text-truncate d-block">Check out our services</span>
              </th>
              <td class="border-0">
                <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/services</a>
              </td>
              <td class="text-center fw-medium border-0">1300</td>
              <td class="text-center fw-medium border-0">$2,15</td>
            </tr>
            <tr>
              <th scope="row" class="ps-0 fw-medium border-0">
                <span class="table-link1 text-truncate d-block">Check out our services</span>
              </th>
              <td class="border-0">
                <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/services</a>
              </td>
              <td class="text-center fw-medium border-0">1300</td>
              <td class="text-center fw-medium border-0">$2,15</td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>