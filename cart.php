<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        overflow-y: auto;
    }
    .header {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        width: 100%;
        margin-top: 0;
        padding: 0;
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
        color: rebeccapurple;
        font-weight: bold;
        text-decoration: none;
        padding: 5px 130px;
        display: flex;
        font-size: 30px;
        cursor: pointer;
    }
    nav a:hover {
        background-color: lightgreen;
        font-size: 30px;
        color: red;
    }
    ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
    }
    header, main {
        background-color: white;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: #dddddd;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    footer {
        background-color: rgb(142, 195, 251);
        color: purple;
        font-size: 20px;
        padding: 20px;
        text-align: center;
    }
</style>
<body>
    <div class="header">
        <img class="logo" src="selilac.png" alt="Website Logo">
        <h1 style="color:purple;">GREENOVATING THE WORLD</h1>
    </div>
    <nav>
        <ul>
            <li><a href="shop.php">Home</a></li>
            <li><a href="shop.php">Products</a></li>
            <li><a href="mailto:020bscit011@sxc.edu.np">Contact Us</a></li>
            <li><a href="cart.php">Cart</a></li>
        </ul>
    </nav>
    <header>
        <h1>
            <?php
            session_start();
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user'];
                echo $user['name'];
            } else {
                echo "Guest";
            }
            ?> Shopping Cart
        </h1>
    </header>
    <main>
        <section>
            <table>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "#94019897.4in##";
                $dbname = "shp";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $total = 0;

                // Check if cart is set
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    // Loop through items in cart and display in table
                    foreach ($_SESSION['cart'] as $product_id => $quantity) {
                        $sql = "SELECT * FROM products WHERE id = $product_id";
                        $result = $conn->query($sql);

                        if (!$result) {
                            echo "<tr><td colspan='4'>Error: " . $conn->error . "</td></tr>";
                        } elseif ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $name = $row['name'];
                            $price = $row['price'];
                            $item_total = $quantity * $price;
                            $total += $item_total;

                            echo "<tr>";
                            echo "<td>$name</td>";
                            echo "<td>$quantity</td>";
                            echo "<td>$price $</td>";
                            echo "<td>$item_total $</td>";
                            echo "</tr>";
                        } else {
                            echo "<tr><td colspan='4'>No product found with ID: $product_id</td></tr>";
                        }
                    }
                } else {
                    echo "<tr><td colspan='4'>Your cart is empty.</td></tr>";
                }

                // Display total
                echo "<tr>";
                echo "<td colspan='3'>Total:</td>";
                echo "<td>$total $</td>";
                echo "</tr>";

                $conn->close();
                ?>
            </table>
            <form action="checkout.php" method="post">
                <input type="submit" value="Checkout" class="button" />
            </form>
        </section>
    </main>
    <footer>
        <p>&COPY;2024 SELILAC an online plant selling website</p>
    </footer>
</body>
</html>
