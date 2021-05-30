<?php
require_once 'modules/top.php';
require_once 'modules/footer.php';

// top module, then manually specified stylesheets, then navbar module
// edit in 'modules/top.php'
topModule();  
  echo '<link rel="stylesheet" href="css/browse-type.css">';
  echo '<link rel="stylesheet" href="css/storestyle.css">';
  echo '<link rel="stylesheet" href="css/styles.css">';
navModule("Cinery | Browse Stores");
?>

    <div class="main-div">
        <h1>Filter by store category</h1>
        <div class="drop-down">
            <select>
                <option value="Department">Select category:</option>
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
    <div class="row">
        <div class="column">
            <a href="products.html"><img src="tshirt.jpg" alt="Details"></a>
            <a href="products.html"><h2>T-Shirt</h2></a>
            <p class="price">$1.23</p>
        </div>
        <div class="column">
            <a href="products.html"><img src="shoes.jpg" alt="Details"></a>
            <a href="products.html"><h2>Shoes</h2></a>
            <p class="price">$1.45</p>
        </div>
        <div class="column">
            <a href="products.html"><img src="shirt.jpg" alt="Details"></a>
            <a href="products.html"><h2>Shirt</h2></a>
            <p class="price">$1.56</p>
        </div>
        <div class="column">
            <a href="products.html"><img src="shoes1.jpg" alt="Details"></a>
            <a href="products.html"><h2>Shoes</h2></a>
            <p class="price">$1.67</p>
        </div>
    </div>
    <div class="main-b">
        <h1>Featured Products</h1>
    </div>
    <div class="row">
        <div class="column">
            <a href="products.html"><img src="shoes3.jpg" alt="Details"></a>
            <a href="products.html"><h2>Shoes</h2></a>
            <p class="price">$1.23</p>
        </div>
        <div class="column">
            <a href="products.html"><img src="shoes2.jpg" alt="Details"></a>
            <a href="products.html"><h2>Shoes</h2></a>
            <p class="price">$1.45</p>
        </div>
        <div class="column">
            <a href="products.html"><img src="shoes4.jpg" alt="Details"></a>
            <a href="products.html"><h2>Shoes</h2></a>
            <p class="price">$1.56</p>
        </div>
        <div class="column">
            <a href="products.html"><img src="shoes5.jpg" alt="Details"></a>
            <a href="products.html"><h2>Shoes</h2></a>
            <p class="price">$1.67</p>
        </div>

    </div>
</main>

<?php
// footer, edit in 'modules/footer.php'
endModule();
?>

</html> 
