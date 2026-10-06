<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNN - Login & Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <div class="background-shapes">
        <div class="shape-1"></div>
        <div class="shape-2"></div>
    </div>

    <div class="logo">
        <img src="pnn.jpg" alt="PNN Logo">
    </div>

    <div class="container">
        
        <div id="login-page" class="page active">
            <h2 class="welcome-text">Welcome Back! We Are Happy To Serve You!</h2>

            <?php if (isset($_GET['error'])): ?>
                <p style="color: red; text-align: center; margin-bottom: 15px;"><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php endif; ?>

            <form action="login_process.php" method="POST">
                <div class="input-group">
                    <label for="login-username"><i class="fa-regular fa-user"></i> Username</label>
                    <input type="text" id="login-username" name="username" required>
                </div>

                <div class="input-group">
                    <label for="login-password"><i class="fa-solid fa-lock"></i> Password</label>
                    <div class="password-wrapper">
                        <input type="password" id="login-password" name="password" required>
                        <i class="fa-regular fa-eye toggle-password" onclick="togglePassword('login-password', this)"></i>
                    </div>
                    <a href="#" class="forgot-link">Forgot Password?</a>
                </div>

                <button type="submit" class="btn-primary">Log In</button>
            </form>

            <p class="switch-text">Don't have an account? <a href="#" onclick="switchPage('register-page')">Sign Up</a></p>
        </div>

        <div id="register-page" class="page">
            <div class="register-card">
                <h2 class="welcome-text">Be Part Of Our Family! We Are More Than Happy To Have You!</h2>

                <?php if (isset($_GET['reg_error'])): ?>
                    <p style="color: red; text-align: center; margin-bottom: 15px;"><?php echo htmlspecialchars($_GET['reg_error']); ?></p>
                <?php endif; ?>

                <form action="register_process.php" method="POST">
                    <div class="input-group">
                        <label for="reg-username"><i class="fa-regular fa-user"></i> Username</label>
                        <input type="text" id="reg-username" name="username" required>
                    </div>

                    <div class="input-group">
                        <label for="reg-email"><i class="fa-regular fa-envelope"></i> E-Mail Address</label>
                        <input type="email" id="reg-email" name="email" required>
                    </div>

                    <div class="input-group">
                        <label for="reg-password"><i class="fa-solid fa-key"></i> Password</label>
                        <div class="password-wrapper">
                            <input type="password" id="reg-password" name="password" required>
                            <i class="fa-regular fa-eye toggle-password" onclick="togglePassword('reg-password', this)"></i>
                        </div>
                    </div>

                    <div class="input-group">
                        <label for="reg-confirm"><i class="fa-solid fa-check-circle"></i> Confirm Password</label>
                        <div class="password-wrapper">
                            <input type="password" id="reg-confirm" name="confirm_password" required>
                            <i class="fa-regular fa-eye toggle-password" onclick="togglePassword('reg-confirm', this)"></i>
                        </div>
                    </div>

                    <div class="checkbox-group">
                        <input type="checkbox" id="terms" required>
                        <label for="terms">Agree to the <a href="#">terms and conditions</a>.</label>
                    </div>

                    <button type="submit" class="btn-primary">Create Account</button>
                </form>
                
                <p class="switch-text">Already have an account? <a href="#" onclick="switchPage('login-page')">Log In</a></p>
            </div>
        </div>

    </div>

    <script src="script.js"></script>
</body>
</html>