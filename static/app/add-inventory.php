<?php
// Connect to the database (Update database credentials accordingly)
$servername = "localhost";
$username = "root";
$password = "";
$database = "giyummy_korean_grill_db";

// Create Connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data and insert into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ProductName = $_POST["ProductName"];
    // Get other form data (Quantity, Cost Price, Selling Price, etc.)

    // SQL to insert data into the inventory table
    $sql = "INSERT INTO inventory (ProductName, ...) VALUES ('$ProductName', ...)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Inventory added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
