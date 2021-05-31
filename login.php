<?php
require_once 'phpClass/loginController.php';
require_once 'modules/top.php';
require_once 'modules/footer.php';

session_start();

// redirect based on superglobal login status
// redirect to CMS page here (unimplemented as of now), to user dashboard instead
if (isset($_SESSION['isAdmin'])) {
    // header("Location: CMS.php");
    header("Location: logged-in.php");
    die();
}

if (isset($_SESSION['isUser'])) {
  header("Location: logged-in.php");
  die();
}

if (isset($_POST['submitLogin'])) {
  $register = (new Login())->logIn();
  die();
}



// top module, then manually specified stylesheets, then navbar module
// edit in 'modules/top.php'
topModule();
  echo '<link rel="stylesheet" href="css/login.css">';
  echo '<link rel="stylesheet" href="css/styles.css">';
navModule("Cinery | Login");
?>

<main>
    <div class="parent-form">

      <div class="form-area">

        <div class="top-form">
          <h1 class="top-text">Login</h1>
        </div>

        <form id="login-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="input-group">
          <input type="text" name="username" id="userLogin" class="input-field" placeholder="Enter email address or phone number"
            required>
          <input type="password" name="password" id="userPwd" class="input-field" placeholder="Enter password" required>
          <div id="wrongPwd"></div>
          <input type="checkbox" id="remember-me" class="remember-me">
          <label for="remember-me" class="remember-label">Remember me</label>

          <button type="submit" name="submitLogin" id="login-btn" class="login-btn">Submit</button>

          <div>
            <?php
          if (isset($_GET['invalidLogin']) && $_GET['invalidLogin']){
            echo '<p style="color: red; font-size: 13px; text-align: center">'. $_SESSION["invalidReason"]. '</p>'; 
          }
            ?>
           </div>
          <div class="create-account">
            <a href="forgotpwd.php">Forgot Password?</a>
            <p>Don't have an account? <a href="register.php">Register here</a></p>
          </div>

        </form>

      </div>
    </div>
</main>

<?php
// footer, edit in 'modules/footer.php'
endModule();
?>

</html>
