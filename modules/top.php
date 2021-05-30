<?php
function topModule(){
    $html = <<<"OUTPUT"
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
OUTPUT;
  echo $html;
}
function navModule($pageTitle){
    $html = <<<"OUTPUT"
    <title>$pageTitle</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="navbarhead">
                <img src="logo.png">
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="fees.php">Fees</a></li>
                        <li class="dropdown">
                            <a href="#">My Account</a>
                            <span class="dropdown-content">
                                <a href="login.php">Login</a>
                                <br><br><br>
                                <a href="register.php">Register</a>
                            </span>
                        </li>
                        <li class="dropdown">
                            <a href="#">Browse</a>
                            <span class="dropdown-content">
                                <a href="browse-az.php">Browse by alphabet</a>
                                <br><br><br>
                                <a href="browse-type.php">Browse by type</a>
                            </span>
                        </li>
                        <li><a href="faqs.php">FAQs</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
OUTPUT;
    echo $html;
}
?>
