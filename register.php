<?php
require_once 'phpClass/registerController.php';
require_once 'modules/top.php';
require_once 'modules/footer.php';

session_start();

if  (isset($_POST['submitRegister'])) {

    $register = (new Register())->register();
    die;
}

// top module, then manually specified stylesheets, then navbar module
// edit in 'modules/top.php'
topModule();  
  echo '<link rel="stylesheet" href="css/styles.css">';
  echo '<link rel="stylesheet" href="css/register.css">';
navModule("Cinery | Register");
?>

<main>
    <div class="parent-form">

        <div class="form-area">

            <div class="top-form">
                <h1 class="top-text">Register</h1>
            </div>

            <form id="register-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="input-group">
                <input type="email" name="username" class="input-field" id="regEmail" placeholder="Email address" required>
                <!-- <div id="alertEmail"></div>
                <input type="text" name="phone"class="input-field" id="regPhone" placeholder="Phone number" required>
                <div id="alertPhone"></div> -->
                <input type="password" name="password" class="input-field"  id="regPwd" placeholder="Password" required>
                <div id="alertPwd"></div>
                <!-- <input type="password" class="input-field" id="regRetype" placeholder="Retype password" required>
                <div id="alertRetype"></div>
                <input type="text" id="regFName" class="input-field-first" placeholder="First name" required>
                <input type="text" id="regLName" class="input-field-last" placeholder="Last name" required>
                <div id="alertName"></div>
                <input type="text" id="regAddress" class="input-field" placeholder="Address" required>
                <div id="alertAddress"></div>
                <input type="text" id="regCity" class="input-field" placeholder="City" required>
                <div id="alertCity"></div>
                <input type="number" id="regZip" class="input-field" placeholder="Zip code" required>
                <div id="alertZip"></div>

                <fieldset>
                    <legend>Account Type</legend>
                    <label for="rad0" class="btn" id="type-label">Shopper</label>
                    <input id="rad0" class="rad" name="rad" type="radio">
                    <label for="rad1" class="btn" id="type-label">Store owner</label>
                    <input id="rad1" class="rad" name="rad" type="radio">

                    <div class="store-extra">
                        <div id="store-owner">
                            <input type="text" class="input-field" placeholder="Business name">
                            <input type="text" class="input-field" placeholder="Store name">

                            <label for="store-type" id="category-label">Store category:</label>

                            <select name="store-type" id="store-type">
                                <option value="Department">Department</option>
                                <option value="Grocery">Grocery</option>
                                <option value="Restaurant">Restaurant</option>
                                <option value="Clothing">Clothing</option>
                                <option value="Accessories ">Accessories </option>
                                <option value="Pharmacy">Pharmacy</option>
                                <option value="Technology">Technology</option>
                                <option value="Pet">Pet</option>
                                <option value="Toy">Toy</option>
                                <option value="Specialty">Specialty</option>
                                <option value="Thrift">Thrift</option>
                                <option value="Services">Services</option>
                                <option value="Kiosk">Kiosk</option>
                            </select>

                        </div>
                    </div>
                </fieldset>

                <input type="checkbox" id="terms" class="terms">
                <label for="terms" class="terms-label">I agree to the terms and
                    conditions</label> -->

                <input class="clear-btn" type="reset" value="Clear form">

                <button type="submit" name="submitRegister" id="register-btn" class="register-btn">Register</button>
                <div class="has-account">
                    <p>Already have an account? <a href="login.html">Sign in</a></p>
                </div>

            </form>
        </div>
    </div>
</main>

<?php
// footer, edit in 'modules/footer.php'
endModule();
?>
    
    <!-- <script src="js/register_script.js"></script> -->
    <!-- <script src="js/account_redirect.js"></script> -->
    
</html>
