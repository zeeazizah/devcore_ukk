<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | DevCore</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/auth.css">
</head>
<body>

<div class="container vh-100 d-flex align-items-center justify-content-center">
  <div class="row auth-card shadow-lg rounded-4 overflow-hidden w-100">

    <!-- LEFT PANEL -->
    <div class="col-md-6 d-none d-md-flex auth-left text-white p-5">
      <div class="my-auto">
        <h2 class="fw-bold mb-3">Welcome to DevCore</h2>
        <p class="opacity-75">
          Inventory system built by DevCore.  
          Simple, fast, and structured for warehouse management.
        </p>
      </div>
    </div>

    <!-- RIGHT PANEL -->
    <div class="col-md-6 bg-white p-5">
      <div class="text-center mb-5">
        <h5 class="fw-semibold text-primary">USER LOGIN</h5>
      </div>

      <form method="POST" action="login_process.php">

        <div class="mb-3">
          <input type="text" name="username" class="form-control rounded-pill px-4" placeholder="Username" required>
        </div>

        <div class="mb-3">
          <input type="password" name="password" class="form-control rounded-pill px-4" placeholder="Password" required>
        </div>

        <div class="d-flex justify-content-between mb-4 small">
          <div>
            <input type="checkbox"> Remember me
          </div>
          <a href="#" class="text-decoration-none">Forgot password?</a>
        </div>

        <button class="btn btn-primary w-100 rounded-pill py-2 fw-semibold" href="login_process.php">
          LOGIN
        </button>

      </form>
    </div>

  </div>
</div>

</body>
</html>
