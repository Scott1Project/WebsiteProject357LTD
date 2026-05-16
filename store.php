<?php
session_start();

if(!isset($_SESSION['myusername'])){
    header("Location: login.php");
    exit;
}

require_once "db_con.php";

// Fetch all stock from database
$sql = "SELECT Stock_ID, Name, Description, Cost, QTY, Image, Alt_text 
        FROM STOCK357";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$stock = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>357 LTD Store</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="navbar">
    <img src="img/logo.png" alt="357 LTD Logo">

    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="event.php">Events</a></li>
        <li><a href="store.php">Store</a></li>
    </ul>
</div>

<div class="box">

    <h1 id="title">Store Stock</h1>

    <form method="POST" action="store.php">

        <table class="stock-table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Cost (£)</th>
                    <th>Available</th>
                    <th>Image</th>
                    <th>Order Quantity</th>
                </tr>
            </thead>

            <tbody>

                <?php if (count($stock) > 0): ?>

                    <?php foreach ($stock as $item): ?>

                        <tr>

                            <td><?= htmlspecialchars($item['Stock_ID']) ?></td>

                            <td><?= htmlspecialchars($item['Name']) ?></td>

                            <td><?= htmlspecialchars($item['Description']) ?></td>

                            <td>£<?= number_format($item['Cost'], 2) ?></td>

                            <td><?= htmlspecialchars($item['QTY']) ?></td>

                            <td>
                                <img src="<?= htmlspecialchars($item['Image']) ?>"
                                     alt="<?= htmlspecialchars($item['Alt_text']) ?>">
                            </td>

                            <td>

                                <?php if ($item['QTY'] > 0): ?>

                                    <input 
                                        type="number"
                                        name="order_qty[<?= $item['Stock_ID'] ?>]"
                                        min="0"
                                        max="<?= $item['QTY'] ?>"
                                        value="0"
                                    >

                                <?php else: ?>

                                    Out of Stock

                                <?php endif; ?>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                <?php else: ?>

                    <tr>
                        <td colspan="7">No stock available</td>
                    </tr>

                <?php endif; ?>

            </tbody>

        </table>

        <button type="submit" id="OrderButton"
        style="
            padding: 12px 32px;
            background-color: var(--titlebackground);
            border: none;
            border-radius: 20px;
            font-size: 18px;
            font-weight: 500;
            font-family: 'JetBrains Mono', monospace;
            cursor: pointer;
            color: #000000;
            margin-top: 10px;
        ">
        Submit Order
        </button>

    </form>

</div>

</body>
</html>