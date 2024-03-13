<?php 

session_start();

	include("connection.php");
	include("adminfunctions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$admin_username = $_POST['admin_username'];
		$admin_password = $_POST['admin_password'];

			$query = "select * from admin where admin_username = '$admin_username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$admin_data = mysqli_fetch_assoc($result);
					
					if($admin_data['admin_password'] === $admin_password)
					{

						$_SESSION['admin_id'] = $admin_data['admin_id'];
						header("Location: AdminInterface.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
	}
	

?>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/admin login.css">
</head>
<body>
<div class="navbar">
        <a href="home.html">Home</a>
        <a href="events.html">Events</a>
        <a href="about us.html">About</a>
        <a href="Institues and Centers.html">Institutes</a>
        <a href="contact us.html">Contact</a>
        <a href="services.html">Services</a>
        <a href="alllogins.html">Login</a>
            
        </div>
        </div> 
    <main>
        <section class="login-form">
            <h1>Admin Login</h1>
            <form action="#" method="POST">
                <label for="admin-username">Username:</label>
                <input type="text" id="username" name="admin_username" placeholder="Enter your username" required>
                
                <label for="admin-password">Password:</label>
                <input type="password" id="password" name="admin_password" placeholder="Enter your password" required>
                
                <button type="submit" class="login-button">Login</button>
            </form>
        </section>
    </main>
  
</body>
</html>