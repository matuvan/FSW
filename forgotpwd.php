<?php
require_once 'modules/top.php';
require_once 'modules/footer.php';

// top module, then manually specified stylesheets, then navbar module
// edit in 'modules/top.php'
topModule();  
  echo '<link rel="stylesheet" href="css/styles.css">';
  echo '<link rel="stylesheet" href="css/forgotpwd.css">';
navModule("Cinery | Forgot Password");
?>

<main>
    <div class="parent-form">

        <div class="form-area">

            <div class="top-form">
                <h1 class="top-text">Forgot password</h1>
            </div>

            <div class="has-account">
                <form id="login-form" class="input-group">
                    <input type="text" class="input-field" placeholder="Enter your email address" required>
                    <button type="submit" class="reset-btn">Reset password</button>
                    <div">
                        <p>Got here by mistake?</p>
                        <a href="login.php">Login</a> or
                        <a href="register.php">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
// footer, edit in 'modules/footer.php'
endModule();
?>
    <script src="js/account_redirect.js"></script>
    
</html>
