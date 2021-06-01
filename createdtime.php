<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/storestyle.css">
    <title>Createdtime</title>
</head>
<body>
    <header>
        <div class="navbar">
            <a href="store.php">HOME</a>
            <div class="navbar-1">
                <div class="subnav">
                <button class="subnavbtn">Browse Products by Created Time<i class="dropdown"></i></button>
                <div class="subnav-content">
                    <a href="newold.php">Oldest First</a>
                    <a href="newold.php">Newest First</a>
                </div>
            </div> 
            <a href="ABOUTUS.php">ABOUT US</a>
            <a href="CONTACT.php">CONTACT</a>
            </div>
    </header>
    <main>
        <div class="main-a">
            <h1>New Products</h1>
        </div>
        <div class="row">
            <div class="column">
                <a href="products1.php"><img src="media/shoes2.jpg" alt="Details"></a>
                <a href="products1.php"><h2>T-Shirt</h2></a>
                <p> High Quality </p>
                <p> Release Date: 12/12/2012</p>
                <p class="price">$1.23</p>
            </div>
            <div class="column">
                <a href="products.php"><img src="media/shoes1.jpg" alt="Details"></a>
                <a href="products.php"><h2>Shoes</h2></a>
                <p> Best seller </p>
                <p> Release Date: 12/12/2012</p>
                <p class="price">$1.67</p>
            </div>
            <div class="column">
                <a href="products1.php"><img src="media/shoes.jpg" alt="Details"></a>
                <a href="products1.php"><h2>Shoes</h2></a>
                <p> Running </p>
                <p> Release Date: 12/12/2012</p>
                <p class="price">$1.45</p>
            </div>
            <div class="column">
                <a href="products.php"><img src="media/shoes3.jpg" alt="Details"></a>
                <a href="products.php"><h2>Shirt</h2></a>
                <p> High Tech </p>
                <p> Release Date: 12/12/2012</p>
                <p class="price">$1.56</p>
            </div> 
        </div>
        <div class="main-b">
            <h1>Featured Products</h1>
        </div>
        <div class="row">
            <div class="column">
                <a href="products1.php"><img src="media/tshirt.jpg" alt="Details" sizes="width:30%" ></a>
                <a href="products1.php"><h2>T-Shirt</h2></a>
                <p> High Quality </p>
                <p> Release Date: 12/12/2012</p>
                <p class="price">$1.23</p>
            </div>
            <div class="column">
                <a href="products.php"><img src="media/shirt.jpg" alt="Details" sizes="width:30%" ></a>
                <a href="products.php"><h2>Shirt</h2></a>
                <p> High Tech </p>
                <p> Release Date: 12/12/2012</p>
                <p class="price">$1.56</p>
            </div>
            <div class="column">
                <a href="products1.php"><img src="media/shoes4.jpg" alt="Details"></a>
                <a href="products1.php"><h2>Shoes</h2></a>
                <p> Running </p>
                <p> Release Date: 12/12/2012</p>
                <p class="price">$1.67</p>
            </div>
            <div class="column">
                <a href="products.php"><img src="media/shoes5.jpg" alt="Details" sizes="width:30%" ></a>
                <a href="products.php"><h2>Shoes</h2></a>
                <p> Best seller </p>
                <p> Release Date: 12/12/2012</p>
                <p class="price">$1.45</p>
            </div>
        </div>
<div class="slideshow">
  <img class="slides" src="media/shoes.jpg" style="width:25%">
  <img class="slides" src="media/sneaker.jpg" style="width:25%">
  <img class="slides" src="media/shoes1.jpg" style="width:25%">
  <img class="slides" src="media/shoes2.jpg" style="width:25%">
  <img class="slides" src="media/shoes3.jpg" style="width:25%">
  <img class="slides" src="media/shoes4.jpg" style="width:25%">
  <img class="slides" src="media/shoes5.jpg" style="width:25%">
  <img class="slides" src="media/shirt.jpg" style="width:25%">
  <img class="slides" src="media/tshirt.jpg" style="width:25%">

  <button class="control" onclick="slidepic(-1)">Previous</button>
  <button class="control" onclick="slidepic(1)">Next</button>
</div>
    </main>
    <footer>
        <div class="navbar-2">
            <a href="Copyright.php">Copyright</a>
            <a href="ToS.php">Term Of Service</a>
            <a href="PrivacyPolicy.php">Privacy Policy</a>
        </div>
    </footer>
    <script src="js/products.js"></script>        
</body>
</html>