<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini_proj";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If form submitted, add new product to database
if (isset($_POST['submit'])) {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "INSERT INTO products (product_name, price, description) VALUES ('$product_name', '$price', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "New product added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve products from database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Products</title>
</head>
<body>
    <h1>Products</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["prouct_idid"] . "</td><td>" . $row["product_name"] . "</td><td>" . $row["price"] . "</td><td>" . $row["description"] . "</td></tr>";
                }
            } else {
                echo "No products found";
            }
            ?>
        </tbody>
    </table>

    <h2>Add New Product</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" required>

        <label for="price">Price:</label>
        <input type="number" name="price" required>

        <label for="description">Description:</label>
        <textarea name="description"></textarea>

        <input type="submit" name="submit" value="Add Product">
    </form>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>
