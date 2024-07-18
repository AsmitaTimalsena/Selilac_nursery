<?php 
session_start(); 

// Start the session 
// Check if the add to cart button is clicked 
if (isset($_POST["add_to_cart"])) { 
	
	// Get the product ID from the form 
	$product_id = $_POST["product_id"]; 
	
	// Get the product quantity from the form 
	$product_quantity = $_POST["product_quantity"]; 

	// Initialize the cart session variable 
	// if it does not exist 
	if (!isset($_SESSION["cart"])) { 
		$_SESSION["cart"] = []; 
		header("location:cart.php"); 
	} 

	// Add the product and quantity to the cart 
	$_SESSION["cart"][$product_id] = $product_quantity; 
	header("location:cart.php"); 
} 

// Sample product data
$products = [
	1 => ["name" => "Snake Plant", "price" => 12, "description" => "Organic snake plant donated by our old customers", "image" => "999.jpg"],
	2 => ["name" => "Asian While Lily Flower", "price" => 5, "description" => "100% pure lily flower", "image" => "999.jpg"],
	3 => ["name" => "Pink Hydranges", "price" => 10, "description" => "Beautiful pink hydranges flower", "image" => "999.jpg"]
];

$search_results = $products;

if (isset($_POST["search"])) {
	$search_query = strtolower(trim($_POST["search_query"]));
	$search_results = [];

	foreach ($products as $id => $product) {
		if (strpos(strtolower($product["name"]), $search_query) !== false || strpos(strtolower($product["description"]), $search_query) !== false) {
			$search_results[$id] = $product;
		}
	}
}
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<meta charset="UTF-8"> <!-- Added charset meta tag -->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>An Online plant selling website</title> 
		<link rel="stylesheet" href="shop.css"> 
		<style>
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
        .search-bar {
            margin: 20px 0;
            text-align: center;
        }
        .product {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
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
				<li><a href="shop.php">Home</a></li> 
				<li><a href="shop.php">Shop</a></li> 
				<li><a href="cart.php">Cart</a></li> 
				<li><a href="logout.php">Logout</a></li> 
			</ul> 
		</nav>

        <!-- Search Form -->
		<div class="search-bar">
			<form method="post" action="shop.php">
				<label for="search_query">Search Products:</label>
				<input type="text" id="search_query" name="search_query" placeholder="Enter product name or description">
				<button type="submit" name="search">Search</button>
			</form>
		</div>

		<header> 
			<h1>Welcome <?php echo $_SESSION["user"]["name"]; ?> to SELILAC, an online nursery website!!!</h1> 
		</header> 
		
		<main> 
			<section> 
				<h2>This season, get extra petonia plant breed as a gift for every purchase over $10.</h2> 
				<h2>Products</h2> 

				<ul> 
					<?php foreach ($search_results as $id => $product): ?>
						<li class="product">
							<h3><?php echo $product["name"]; ?></h3>
							<img class="flowers" src="<?php echo $product["image"]; ?>" alt="Product <?php echo $id; ?>">
							<p><?php echo $product["description"]; ?></p>
							<p><span>$<?php echo $product["price"]; ?></span></p>
							<form method="post" action="shop.php">
								<input type="hidden" name="product_id" value="<?php echo $id; ?>">
								<label for="product<?php echo $id; ?>_quantity">Quantity:</label>
								<input type="number" id="product<?php echo $id; ?>_quantity" name="product_quantity" value="" min="0" max="10">
								<button type="submit" name="add_to_cart">Add to Cart</button>
							</form>
						</li>
					<?php endforeach; ?>
				</ul>
			</section> 
		</main> 
		<footer style="background-color: rgb(142, 195, 251); color: purple; font-size: 20px; padding: 20px; text-align: center;"> 
			<p>&copy; 2024 SELILAC an online plant selling website</p> 
		</footer> 
	</body> 
</html>
