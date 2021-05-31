<?php
require_once 'phpClass/loginController.php';
require_once 'modules/top.php';
require_once 'modules/footer.php';

session_start();

// redirect to CMS page here (unimplemented as of now), do nothing
// if (isset($_SESSION['isAdmin'])) {
//     header("Location: CMS.php");
//     die();
// }

if (!isset($_SESSION['isUser'])) {
    header("Location: login.php");
    die();
}

if (isset($_POST['submitLogOut'])) {
    $logout = (new Login())->logOut();    
}

// top module, then manually specified stylesheets, then navbar module
// edit in 'modules/top.php'
topModule();  
  echo '<link rel="stylesheet" href="css/styles.css">';
  echo '<link rel="stylesheet" href="css/logged-in.css">';
navModule("Cinery | User Dashboard");
?>
<main>
        <div class="parent-div">

            <div class="div1">

                <div class="header">
                    <h1 class="top-text">User Profile</h1>
                </div>

                <div class="container-div">
                    <div class="avatar-div">
                        <img src="media/placeholder-avatar.png" alt="avatar">
                        <p>Account type: <?php echo $_SESSION['accountType']; ?></p>
                    </div>

                    <div class="header-div">
                        <h2>Account information</h2>
                    </div>

                    <div class="info-div">
                        <h5>Full name:</h5>
                        <input type="text" class="input-field" value="<?php echo $_SESSION['name'] ?>">
                        <h5>Email address:</h5>
                        <input id="currentUser" type="email" class="input-field" value="<?php echo $_SESSION['email'] ?> ">
                        <h5>Phone number:</h5>
                        <input type="number" class="input-field" value="<?php echo $_SESSION['phone'] ?>">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <button id="logout-btn" name="submitLogOut" type="submit" class="btn">Log out</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
</main>

<?php
// footer, edit in 'modules/footer.php'
endModule();
?>

</html>
