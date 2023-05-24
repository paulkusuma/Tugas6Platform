<?php
// Mulai session
session_start();

// Hapus session 'username'
unset($_SESSION['username']);

// Periksa dan hapus cookie 'login_cookie'
if (isset($_COOKIE['login_cookie'])) {
    setcookie('login_cookie', '', time() - 3600); // Set waktu kedaluwarsa di masa lalu
    unset($_COOKIE['login_cookie']);
}

// Redirect ke halaman login
header("Location: login.php");
exit();
?>