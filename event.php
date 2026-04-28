<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="box">
        <h1 id="title">title</h1>
        <p>text text text text text text text text text text text text text text text text text text text text text text text text text text text text text </p>

        
    </div>
</body>
</html> -->


<?php
require_once "db.php";

$sql = "SELECT Event_Title, Event_Description, Event_Image, Event_AltText 
        FROM EVENTS357";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$events = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Events | 357 LTD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Upcoming Events</h1>

<div class="events-container">

<?php if (count($events) > 0): ?>
    <?php foreach ($events as $event): ?>

        <div class="event-card">
            <h2><?php echo htmlspecialchars($event["Event_Title"]); ?></h2>

            <img src="images/<?php echo htmlspecialchars($event["Event_Image"]); ?>"
                 alt="<?php echo htmlspecialchars($event["Event_AltText"]); ?>">

            <p><?php echo htmlspecialchars($event["Event_Description"]); ?></p>
        </div>

    <?php endforeach; ?>
<?php else: ?>
    <p>No events available.</p>
<?php endif; ?>

</div>

</body>
</html>