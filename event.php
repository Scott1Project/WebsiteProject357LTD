<?php
require_once "db.php";

$sql = "SELECT Event_Title, Event_Description, Event_Image, Event_AltText, Event_Date 
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
    <link rel="stylesheet" href="css/main.css">

</head>
<body>

<div class="navbar">
  <img src="img/logo.png">
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="events.html">Events</a></li>
    <li><a href="store.html">Store</a></li></li>
  </ul>
</div>

<div class="box">
<h1 id="title">Upcoming Events</h1>
<div class="events-container">

<?php if (count($events) > 0): ?>
    <?php foreach ($events as $event): ?>

        <div class="event-card">
            <h1 id="title"><?php echo htmlspecialchars($event["Event_Title"]); ?></h1>

            <img src="<?php echo htmlspecialchars($event["Event_Image"]); ?>"
                 alt="<?php echo htmlspecialchars($event["Event_AltText"]); ?>">

            <h2 id="EventDate"><?php echo htmlspecialchars($event["Event_Date"]); ?></h2>

            <p><?php echo htmlspecialchars($event["Event_Description"]); ?></p>
        </div>

    <?php endforeach; ?>
<?php else: ?>
    <p>No events available.</p>
<?php endif; ?>

</div>

</div>

</body>
</html>