<?php
include 'order.php'; // Include database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $cake_type = $_POST['cake_type'];
    $quantity = $_POST['quantity'];

    // Prepare and bind the SQL insert statement
    $stmt = $conn->prepare("INSERT INTO cake_orders (username, cake_type, quantity) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $username, $cake_type, $quantity);

    // Execute the statement and check for success
    if ($stmt->execute()) {
        echo "Order placed successfully!";
    } else {
        echo "Error placing order: " . $conn->error;
    }
}
?>
