<?php
require_once 'modules/top.php';
require_once 'modules/footer.php';

session_start();

// top module, then manually specified stylesheets, then navbar module
// edit in 'modules/top.php'
topModule();  
  echo '<link rel="stylesheet" href="css/styles.css">';
navModule("Cinery | Online Shopping Mall");
?>
<?php
session_start();
include 'phpClass/functions.php';

$products = read_all_products();

$count = 0;
$increase = 0;
$store = 0;
$product = 0;
?>

    <div class="mall">
        <img src="mall.png">
    </div>
    <br>
    <!-- featured stores -->
    <h2>New Stores</h2>
    <div class="container">
        <?php
            foreach ($products as $p) {
                $id = $p['id'];
                $name = $p['name'];
                echo " <div class=\"column\">
                <a href=\"$name\"><img src=\"blanklogo.jpg\"></a>
                </div>
                ";
                $count++;
                if ($count == 10) {
                    break;
                    }
                }
        ?>
    </div>
<br>    
    <h2>New Products</h2>
    <div class="container">
        <?php
            foreach ($products as $p) {
                $id = $p['id'];
                $name = $p['name'];
                echo " <div class=\"column\">
                <a href=\"$name\"><img src=\"blanklogo.jpg\"></a>
                </div>";
                $increase++;
                if ($increase == 10) {
                    break;
                    }
                }
        ?>
    </div>
    <h2>Featured Stores</h2>
    <div class="container">
        <?php
            foreach ($products as $p) {
                $id = $p['id'];
                $name = $p['name'];
                echo " <div class=\"column\">
                <a href=\"$name\"><img src=\"blanklogo.jpg\"></a>
                </div>";
                $store++;
                if ($store == 10) {
                    break;
                    }
                }
        ?>
    </div>

    <h2>Featured Products</h2>
    <div class="container">
        <?php
            foreach ($products as $p) {
                $id = $p['id'];
                $name = $p['name'];
                echo " <div class=\"column\">
                <a href=\"$name\"><img src=\"blanklogo.jpg\"></a>
                </div>";
                $product++;
                if ($product == 10) {
                    break;
                    }
                }
        ?>
    </div>

<?php

<?php
// footer, edit in 'modules/footer.php'
endModule();
?>
<script src="carousel.js"></script>
<script src="js/account_redirect.js"></script>

</html>
