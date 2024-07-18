<!DOCTYPE html> 
<html> 

<head> 
	 <meta charset="UTF-8"> <!-- Added charset meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Checkout Page</title> 
	<link rel="stylesheet"
		type="text/css"
		href="checkout.css"> 
</head> 
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
		background-color: #ffffff; 
		font-family: Arial, sans-serif; 
	} 
	
	
nav { 
	background-color: rgb(142, 195, 251); 
	padding: 5px; 
} 

nav ul { 
	list-style: none; 
	margin: 0px; 
	padding: 0; 
} 
nav a { 
	color: rebeccapurple; font-weight: bold;
	text-decoration: none; 
	padding: 5px 130px;
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
		
	section { 
		max-width: 600px; 
		margin: 0 auto; 
		padding: 20px; 
	} 
	
	h1 { 
		color: green; 
		font-size: 32px; 
		margin-bottom: 20px; 
	} 
	
	h2 { 
		color: green; 
		font-size: 24px; 
		margin-bottom: 10px; 
	} 
	
	label { 
		display: block; 
		margin-bottom: 5px; 
		color: #666666; 
	} 
	
	input[type="text"], 
	input[type="email"] { 
		width: 100%; 
		padding: 10px; 
		border: 1px solid #cccccc; 
		border-radius: 5px; 
		margin-bottom: 10px; 
		font-size: 16px; 
	} 
	
	input[type="submit"] { 
		background-color: green; 
		color: #ffffff; 
		padding: 10px 20px; 
		border: none; 
		border-radius: 5px; 
		font-size: 16px; 
		cursor: pointer; 
	} 
	
	input[type="submit"]:hover { 
		background-color: #228B22; 
	} 
	
	footer { 
		background-color: rgb(142, 195, 251);
		color: purple; font-size: 20px;
		padding: 20px; 
		text-align: center; 
	} 
	
</style> 

<body> 
	<div class="header">
			<img class="logo" src="selilac.png" alt="Website Logo">
			<h1 style="color:purple;">GREENOVATING THE WORLD</h1>

		</div>
	<header> 
		<nav> 
			<ul> 
				<li> 
					<a href="shop.php">Home</a> 
				</li> 
				<li> 
					<a href="shop.php">Shop</a> 
				</li> 
				<li> 
					<a href="cart.php">Cart</a> 
				</li> 
				<li> 
					<a href= "mailto:020bscit011@sxc.edu.np">Contact</a> 
				
					</li> 
			</ul> 
		</nav> 
	</header> 

	<section> 
		<h1>Checkout</h1> 
		<form action="thanks.php" method="post"> 
			<h2>Billing Information</h2> 
			<label for="name">Name:</label> 
			<input type="text"
				id="name"
				name="name" required> 

			<label for="email">Email:</label> 
			<input type="email"
				id="email"
				name="email" required> 

			<label for="address">Address:</label> 
			<input type="text"
				id="address"
				name="address" required> 

			<label for="city">City:</label> 
			<input type="text"
				id="city"
				name="city" required> 

			<label for="state">State:</label> 
			<input type="text"
				id="state"
				name="state" required> 

			<label for="zip">Zip Code:</label> 
			<input type="text"
				id="zip"
				name="zip" required> 

			<h2>Payment Information</h2> 
			<label for="cardholder">Name on Card:</label> 
			<input type="text" id="cardholder"
				name="cardholder" required> 

			<label for="cardnumber">Card Number:</label> 
			<input type="text"
				id="cardnumber"
				name="cardnumber" required 
				pattern="\d{4}-?\d{4}-?\d{4}-?\d{4}" required=> 


			<label for="expmonth">Expiration Month:</label> 
			<input type="text"
				id="expmonth"
				name="expmonth" required> 

			<label for="expyear">Expiration Year:</label> 
			<input type="text"
				id="expyear"
				name="expyear" required> 

			<label for="cvv">CVV:</label> 
			<input type="text"
				id="cvv"
				name="cvv" required> 

			<input type="submit"
				value="Place Order"> 
		</form> 
	</section> 

	<footer> 
		<p>&copy; 2024 SELILAC an online plant selling website</p> 
	</footer> 
</body> 

</html>
