<?php

session_start();
if (!(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'])) {
    echo "You do not have permission to view this page.";
    header("refresh:3; url=login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="css/cms.css">
</head>

<body>
<div class="header">
<img src="admin.png" alt="adminlogo" id="adminLogo"><br>Admin Panel.
</div>

<div class="sidebar">
    <ul>
        <li><a href="#"> Add Data </a></li>
        <li><a href="#"> Delete Data </a></li>
        <li><a href="upload.php"> Update Photo </a></li>
        <li><a href="#"> Developer </a></li>
    </ul>
</div>

<div class="data">
  <p>Welcome to the Admin Dashboard !</p>
</div>

</body>

</html>
