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
<body class="login-page">

<div class="login-card">
  <div class="login-icon">👤</div>

  <form method="POST" action="login_process.php">

    <div class="mb-3">
      <input type="text" name="username" class="form-control"
             placeholder="Username" required>
    </div>

    <div class="mb-3">
      <input type="password" name="password" class="form-control"
             placeholder="Password" required>
    </div>

    <div class="d-flex justify-content-between mb-3 small text-light">
      <label>
        <input type="checkbox"> Remember me
      </label>
      <a href="#" class="text-light text-decoration-none">Forgot password?</a>
    </div>

    <button class="btn w-100 fw-semibold text-white">
      LOGIN
    </button>

  </form>
</div>

</body>

</html>
