<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - PNN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="register-card" style="text-align: center;">
            <h1 class="welcome-text">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <p style="margin-bottom: 20px; color: #475569;">You are now logged in to PNN Computer and Cellphone Shop.</p>
            <a href="logout.php" class="btn-primary" style="display: inline-block; text-decoration: none; width: auto; padding: 12px 30px;">Log Out</a>
        </div>
    </div>
</body>
</html>