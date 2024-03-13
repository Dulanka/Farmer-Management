<?php
session_start();
include("connection.php");
include("adminfunctions.php");
$admin_data = check_login($con);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/admininterface.css">
    
    </head>

<body>

  

    <div class="button-box" onclick="location.href='AdminSettings.php'">
        <h2>Admin Settings</h2>
    </div>

    <div class="button-box" onclick="location.href='FarmerSettings.php'">
        <h2>User Settings</h2>
    </div>

    <div class="button-box" onclick="location.href='OfficerSettings.php'">
        <h2>Field Officer Settings</h2>
    </div>


  
    </div>

    <footer>
    <div class="navbar">
            <a href="home.html">Home</a>
            <a href="events.html">Events</a>
            <a href="about us.html">About</a>
            <a href="Institues and Centers.html">Institutes</a>
            <a href="contact us.html">Contact</a>
            <a href="services.html">Services</a>
            <a href="alllogins.html">Login</a>
            
        </div>
        &copy; Admin Dashboard
    </footer>

</body>

</html>