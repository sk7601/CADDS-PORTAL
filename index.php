<?php
session_start();

// Later you can add login/session checks here.
// Example:
// if(isset($_SESSION['username'])){
//     $username = $_SESSION['username'];
// } else {
//     $username = "Guest";
// }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADDS Portal</title>

    <link rel="stylesheet" href="style.css">

    <!-- Remove this if the system has no internet -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
</head>

<body>

<header class="main-header">
  <div class="logo-area">
    <div class="logo-placeholder">
      🛡️
    </div>

    <div class="title-text">
      <h1>CADDS PORTAL</h1>
      <p>Centre for Airborne Systems (CADDS) Department</p>
    </div>
  </div>

  <div class="admin-login">
    👨‍💼
    <span>Admin Login</span>
  </div>
</header>

<nav class="sub-nav">

  <a href="#" class="nav-item">
    📊 Annual Report
  </a>

  <a href="#" class="nav-item">
    📞 Contact Us
  </a>

</nav>

<div class="app-container">

  <aside class="sidebar">

    <a href="#" class="sidebar-item active">
      👤
      <span>User</span>
    </a>

    <a href="#" class="sidebar-item">
      ℹ️
      <span>About</span>
    </a>

  </aside>

  <main class="main-content">

    <div class="welcome-box">

      <div class="decorative-top">

        <span class="line"></span>

        ✈️

        <span class="line"></span>

      </div>

      <h2 class="welcome-title">Welcome</h2>

      <p class="welcome-subtitle">to</p>

      <h3 class="dept-title">CADDS Department</h3>

      <div class="decorative-bottom">

        <span class="blue-line"></span>

        <span class="dot"></span>

        <span class="blue-line"></span>

      </div>

    </div>

  </main>

</div>

<footer class="main-footer">
  <p>&copy; 2026 CADDS Department. All Rights Reserved.</p>
</footer>
<footer class="main-footer">



</body>

</html>
