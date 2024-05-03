<!DOCTYPE html>
<html>
<head>
    <title>Order Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
        }
        input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .receipt {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }
        .menu {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Order Management System</h1>
        <div class="menu">
            <h2>Menu</h2>
            <ul>
                <li>Halo-Halo - PHP 50</li>
                <li>Mais Con Yelo - PHP 40</li>
                <li>Saging Con Yelo - PHP 40</li>
                <li>Sago't Gulaman - PHP 20</li>
                <li>Buko Juice - PHP 20</li>
            </ul>
        </div>
        <form method="post" action="">
            <label for="item">Select Item:</label>
            <select id="item" name="item">
                <option value="50">Halo-Halo - PHP 50</option>
                <option value="40">Mais Con Yelo - PHP 40</option>
                <option value="40">Saging Con Yelo - PHP 40</option>
                <option value="20">Sago't Gulaman - PHP 20</option>
                <option value="20">Buko Juice - PHP 20</option>
            </select><br>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required><br>
            <label for="payment">Payment:</label>
            <input type="number" id="payment" name="payment" min="0" required><br>
            <input type="submit" value="Submit">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $item = $_POST["item"];
                $quantity = $_POST["quantity"];
                $payment = $_POST["payment"];
                $total = $item * $quantity;
                $change = $payment - $total;
                echo "<div class='receipt'>";
                echo "<h2>Receipt</h2>";
                echo "<p>Item: ";
                if ($item == 10000) {
                    echo "Pawis ni Heiroll - PHP 10,000";
                } elseif ($item == 50000) {
                    echo "Luha ni Heiroll - PHP 50,000";
                } elseif ($item == 20000) {
                    echo "Bathwater ni Heiroll - PHP 20,000";
                }
                echo "</p>";
                echo "<p>Quantity: $quantity</p>";
                echo "<p>Total: PHP $total</p>";
                echo "<p>Payment: PHP $payment</p>";
                if ($change >= 0) {
                    echo "<p>Change: PHP $change</p>";
                } else {
                    echo "<p>Insufficient payment!</p>";
                }
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>
