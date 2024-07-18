<html> 

<head> 
	 <meta charset="UTF-8"> <!-- Added charset meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style> 
		body {
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: flex-start; 
            width: 100%;
            margin-top: 0; /* Set margin-top to 0 */
            padding: 0; /* Set padding to 0 */
            background-color: rgb(142, 195, 251);       
        }

        .logo {
            width: 300px; 
            margin-right: 10px;
        }

        .header h1 {
            font-weight: bold; 
            margin: 0;
            line-height: 1; 
            font-size: 70px;
            color: purple;
        }
		
		body { 
			background-color: #f2f2f2; 
			font-family: Arial, sans-serif; 
		} 
		
		h1 { 
			color: #008000; 
			font-size: 2.5em; 
			text-align: center; 
			margin-top: 50px; 
		} 
		
		p { 
			
			
			text-align: center; 
			margin-top: 20px; 
		} 
		footer { 
		background-color: rgb(142, 195, 251);
		color:purple; font-size: 20px;
		padding: 20px; 
		text-align: center;  margin-top: 250px;
	} 
	nav { 
	background-color: rgb(142, 195, 251); 
	padding: 5px; 
} 

nav ul { 
	list-style: none; 
	margin: 2px; 
	padding: 0; 
} 
nav a { 
	color: rebeccapurple; font-weight: bold;
	text-decoration: none; 
	padding: 5px 140px;
	display: flex;  font-size: 30px;
	cursor: pointer; 
} 

nav a:hover { 
	background-color: lightgreen; font-size: 30px;
	color: red; 
} ul { 
	list-style: none; 
	margin: 0; 
	padding: 0; 
	display: flex; 
	flex-wrap: wrap; 
} 
		
	</style> 
</head> 

<body>
	<div class="header">
			<img class="logo" src="selilac.png" alt="Website Logo">
			<h1 style="color:purple;">GREENOVATING THE WORLD</h1>

		</div>
		<nav> 
			<ul> 
				<li ><a href="shop.html">Home</a></li> 
				<li ><a href="shop.html">Shop</a></li> 
				<li ><a href="cart.php">Cart</a></li> 
				<li ><a href="logout.php">Logout</a></li> 

			</ul> 
		</nav> 
</body>
<?php 
// Start the session 
	session_start(); 

// Retrieve the customer name from the session variable 
	if (isset($_SESSION['user'])) { 
		$user = $_SESSION['user']; 
		$customerName = $user['name']; 
	} else { 
		$customerName = "Valued Customer"; 
	} 

// Display the thank you message 
	echo "<h1>Thank You,$customerName!</h1>"; 
	echo
"<p>Your order has been received and will be delivered soon.</p>"; 
	?> 
	<footer style="background-color: rgb(142, 195, 251);
		color:purple; font-size: 20px;
		padding: 20px; 
		text-align: center;  margin-top: 250px;"> 
		<p>&copy; 2024 SELILAC an online plant selling website</p> 
	</footer> 
</html>
