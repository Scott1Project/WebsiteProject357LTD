<?php
require_once "db.php";

$sql = "SELECT Stock_ID, Name, Description, Cost, Image, Alt_text 
        FROM STOCK357";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$stock = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Store | 357 LTD</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="navbar">
  <img src="img/logo.png" alt="357 LTD Logo">
<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="event.php">Events</a></li>
  <li><a href="store.php">Store</a></li></li>
</ul>
</div>

<div class="box">
    <h1 id="title">Store Stock</h1>

    <?php if (count($stock) > 0): ?>
        <table class="stock-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Cost (£)</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stock as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item['Stock_ID']) ?></td>
                        <td><?= htmlspecialchars($item['Name']) ?></td>
                        <td><?= htmlspecialchars($item['Description']) ?></td>
                        <td><?= number_format($item['Cost'], 2) ?></td>
                        <td>
                            <img src="<?= htmlspecialchars($item['Image']) ?>"
                                 alt="<?= htmlspecialchars($item['Alt_text']) ?>">
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No stock available.</p>
    <?php endif; ?>
</div>

</body>
</html>