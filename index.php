<?php
require_once 'modules/top.php';
require_once 'modules/footer.php';

// top module, then manually specified stylesheets, then navbar module
// edit in 'modules/top.php'
topModule();  
  echo '<link rel="stylesheet" href="css/styles.css">';
navModule("Cinery | Online Shopping Mall");
?>

    <div class="mall">
        <img src="mall.png">
    </div>
    <br>
    <!-- featured stores -->
    <h2>New Stores</h2>
    <div class="slidecontainer">
        <div class="row">
            <div class="column">
                <div class="slides">
                    <div class="slide">
                        <a href="https://www.hm.com/entrance.ahtml?orguri=%2F"><img src="hmlogo.png"></a>
                    </div>

                    <div class="slide">
                        <a href="https://www.uniqlo.com/vn/"><img src="uniqlologo.png"></a> 
                    </div>

                    <div class="slide">
                        <a href="https://www.innisfree.vn/"><img src="innisfreelogo.png"></a>
                    </div>

                    <div class="slide">
                        <a href="https://fearofgod.com/"><img src="fog.png"></a>
                    </div>

                    <div class="slide">
                        <a href="https://gap.com/"><img src="gap.png"></a>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    
    <h2>New Products</h2>
    <div class="slidecontainer">
        <div class="row">
            <div class="column">
                <div class="slides">
                    <div class="slide">
                        <img src="short.png"></a>
                    </div>

                    <div class="slide">
                        <img src="sweater.png"></a> 
                    </div>

                    <div class="slide">
                        <img src="chocopuff.png"></a>
                    </div>

                    <div class="slide">
                        <img src="coat.png"></a>
                    </div>

                    <div class="slide">
                        <img src="sweater.png"></a> 
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <h2>Featured Stores</h2>
    <div class="row">
        <div class="column">
            <a href="https://www.muji.com/vn/"><img src="mujilogo.png"></a>
        </div>
    
        <div class="column">
            <a href="https://www.zara.com/"><img src="zaralogo.png"></a>
        </div>
    
        <div class="column">
            <a href="https://www.vascara.com/"><img src="vascaralogo.png"></a>
        </div>
    </div>
    
    <h2>Featured Products</h2>
    <div class="row">
        <div class="column">
          <img src="chocopuff.png">
        </div>

        <div class="column">
          <img src="zarajacket.png"> 
        </div>

        <div class="column">
          <img src="purses.png">
        </div>
    </div>
</div>

<?php
// footer, edit in 'modules/footer.php'
endModule();
?>
<script src="carousel.js"></script>
<script src="js/account_redirect.js"></script>

</html>
