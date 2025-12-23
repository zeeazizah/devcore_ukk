<?php

require_once "config/database.php";

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

<<<<<<< HEAD
if ($user && password_verify($password, $user['password'])) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $user['username'];

    header("Location: dashboard.php");
    exit;
} else {
    header("Location: login.php");
=======
if ($username === '' || $password === '') {
    header("Location: login.php?error=1");
>>>>>>> fbc7e4656efd8b1a85c9164db4b36f0fa07c181d
    exit;
}

$stmt = mysqli_prepare($conn, "SELECT id, password FROM users WHERE username = ?");
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if ($user = mysqli_fetch_assoc($result)) {

    if (password_verify($password, $user['password'])) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_id'] = $user['id'];

        header("Location: dashboard.php");
        exit;
    }
}

header("Location: login.php?error=1");
exit;
