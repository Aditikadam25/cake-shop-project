<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Your Cake Order</title>
</head>
<body>
    <h1>Cake Order Form</h1>
    <form action="order.php" method="post">
        <input type="text" name="username" placeholder="Your Name" required>
        <input type="text" name="cake_type" placeholder="Cake Type" required>
        <input type="number" name="quantity" placeholder="Quantity" required min="1">
        <button type="submit">Place Order</button>
    </form>
</body>
</html>

