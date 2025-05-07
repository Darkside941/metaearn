<?php
// Admin login and user management backend
session_start();
$admin_username = 'admin'; // Hardcoded admin username
$admin_password = 'your_secure_password'; // Hardcoded admin password
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if ($username === $admin_username && $password === $admin_password) {
    $_SESSION['admin_logged_in'] = true;
    header('Location: admin.html');
  } else {
    echo 'Invalid credentials!';
  }
}
?>