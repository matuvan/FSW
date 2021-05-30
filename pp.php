<?php
require_once 'modules/top.php';
require_once 'modules/footer.php';

// top module, then manually specified stylesheets, then navbar module
// edit in 'modules/top.php'
topModule();  
  echo '<link rel="stylesheet" href="css/aboutus.css">';
  echo '<link rel="stylesheet" href="css/styles.css">';
navModule("Cinery | Privacy Policy");
?>

<main>

</main>

<?php
// footer, edit in 'modules/footer.php'
endModule();
?>

</html>
