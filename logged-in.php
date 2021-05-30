<?php
require_once 'modules/top.php';
require_once 'modules/footer.php';

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
                        <p>nguyenvana123</p>
                        <img src="media/placeholder-avatar.png" alt="avatar">
                        <p>Account type: Shopper</p>
                    </div>

                    <div class="header-div">
                        <h2>Update information</h2>
                    </div>

                    <div class="info-div">
                        <h5>Full name:</h5>
                        <input type="text" class="input-field" value="Nguyen Van A">
                        <h5>Email address:</h5>
                        <input id="currentUser" type="email" class="input-field" value="nguyenvana@gmail.com">
                        <h5>Phone number:</h5>
                        <input type="number" class="input-field" value="0912345678">
                        <button id="logout-btn" type="submit" class="btn">Log out</button>
                    </div>
                </div>

            </div>
        </div>
</main>

<?php
// footer, edit in 'modules/footer.php'
endModule();
?>
<script src="js/myacc_script.js"></script>

</html>
