<?php
require_once 'modules/top.php';
require_once 'modules/footer.php';

// top module, then manually specified stylesheets, then navbar module
// edit in 'modules/top.php'
topModule();  
  echo '<link rel="stylesheet" href="css/aboutus.css">';
  echo '<link rel="stylesheet" href="css/styles.css">';
navModule("Cinery | About Us");
?>

<main>
    <h2>Team Profile</h2>

    <button id="myBtn">
        <div class="card">
            <img src="nguyen.jpg">
            <h1>Le Thanh Nguyen</h1>
            <p class="title">s3638100</p>
            <h4>RMIT University</h4>
        </div>
    </button>

    <div id="myModal" class="modal">
        <div class="modal-content">
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </p>
        </div>
    </div>
    
    <button id="myBtn">
        <div class="card">
            <img src="van.jpg">
            <h1>Ma Tu Van</h1>
            <p class="title">s3877618</p>
            <h4>RMIT University</h4>
        </div>
    </button>

    <div id="myModal" class="modals">
        <div class="modal-contents">
          <p>My name is Ma Tu Van. I am an very friendly and joyful person. My hometown is Guangzhou, China. </p>
        </div>
    </div>

    <button id="myBtn">
        <div class="card">
            <img src="duc.jpg">
            <h1>Nguyen Huu Duc</h1>
            <p class="title">s3669698</p>
            <h4>RMIT University</h4>
        </div>
    </button>

    <div id="myModal" class="modals">
        <div class="modal-contents">
          <p>My name is Nguyen Huu Duc. I am a very friendly and joyful person. My hometown is Guangzhou, China. </p>
        </div>
    </div>
</main>

<?php
// footer, edit in 'modules/footer.php'
endModule();
?>
<script src="js/register_script.js"></script>
<script src="js/account_redirect.js"></script>
<script src="modal.js"></script>

</html>
