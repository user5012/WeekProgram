<?php 

require_once "./includes/dbh.inc.php";

try {
    // Fetch Monday schedule
    $queryMonday = "SELECT l1, l2, l3, l4, l5, l6, l7 FROM monday;";
    $stmt = $pdo->query($queryMonday);
    $monday = $stmt->fetch(PDO::FETCH_ASSOC);

    // Fetch Tuesday schedule
    $queryTuesday = "SELECT l1, l2, l3, l4, l5, l6, l7 FROM tuesday;";
    $stmt = $pdo->query($queryTuesday);
    $tuesday = $stmt->fetch(PDO::FETCH_ASSOC);

    // Fetch Wednesday schedule
    $queryWednesday = "SELECT l1, l2, l3, l4, l5, l6, l7 FROM wednesday;";
    $stmt = $pdo->query($queryWednesday);
    $wednesday = $stmt->fetch(PDO::FETCH_ASSOC);

    // Fetch Thursday schedule
    $queryThursday = "SELECT l1, l2, l3, l4, l5, l6, l7 FROM thursday;";
    $stmt = $pdo->query($queryThursday);
    $thursday = $stmt->fetch(PDO::FETCH_ASSOC);

    // Fetch Friday schedule
    $queryFriday = "SELECT l1, l2, l3, l4, l5, l6, l7 FROM friday;";
    $stmt = $pdo->query($queryFriday);
    $friday = $stmt->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Schedule</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <a href="edit.php">edit</a>
    <div class="schedule-container">
        <div class="day" id="monday">
            <h2>Monday</h2>
            <ul>
                <li>1η <?php echo htmlspecialchars($monday['l1']); ?></li>
                <li>2η <?php echo htmlspecialchars($monday['l2']); ?></li>
                <li>3η <?php echo htmlspecialchars($monday['l3']); ?></li>
                <li>4η <?php echo htmlspecialchars($monday['l4']); ?></li>
                <li>5η <?php echo htmlspecialchars($monday['l5']); ?></li>
                <li>6η <?php echo htmlspecialchars($monday['l6']); ?></li>
                <li>7η <?php echo htmlspecialchars($monday['l7']); ?></li>
            </ul>
        </div>

        <div class="day" id="tuesday">
            <h2>Tuesday</h2>
            <ul>
                <li>1η <?php echo htmlspecialchars($tuesday['l1']); ?></li>
                <li>2η <?php echo htmlspecialchars($tuesday['l2']); ?></li>
                <li>3η <?php echo htmlspecialchars($tuesday['l3']); ?></li>
                <li>4η <?php echo htmlspecialchars($tuesday['l4']); ?></li>
                <li>5η <?php echo htmlspecialchars($tuesday['l5']); ?></li>
                <li>6η <?php echo htmlspecialchars($tuesday['l6']); ?></li>
                <li>7η <?php echo htmlspecialchars($tuesday['l7']); ?></li>
            </ul>
        </div>

        <div class="day" id="wednesday">
            <h2>Wednesday</h2>
            <ul>
                <li>1η <?php echo htmlspecialchars($wednesday['l1']); ?></li>
                <li>2η <?php echo htmlspecialchars($wednesday['l2']); ?></li>
                <li>3η <?php echo htmlspecialchars($wednesday['l3']); ?></li>
                <li>4η <?php echo htmlspecialchars($wednesday['l4']); ?></li>
                <li>5η <?php echo htmlspecialchars($wednesday['l5']); ?></li>
                <li>6η <?php echo htmlspecialchars($wednesday['l6']); ?></li>
                <li>7η <?php echo htmlspecialchars($wednesday['l7']); ?></li>
            </ul>
        </div>

        <div class="day" id="thursday">
            <h2>Thursday</h2>
            <ul>
                <li>1η <?php echo htmlspecialchars($thursday['l1']); ?></li>
                <li>2η <?php echo htmlspecialchars($thursday['l2']); ?></li>
                <li>3η <?php echo htmlspecialchars($thursday['l3']); ?></li>
                <li>4η <?php echo htmlspecialchars($thursday['l4']); ?></li>
                <li>5η <?php echo htmlspecialchars($thursday['l5']); ?></li>
                <li>6η <?php echo htmlspecialchars($thursday['l6']); ?></li>
                <li>7η <?php echo htmlspecialchars($thursday['l7']); ?></li>
            </ul>
        </div>

        <div class="day" id="friday">
            <h2>Friday</h2>
            <ul>
                <li>1η <?php echo htmlspecialchars($friday['l1']); ?></li>
                <li>2η <?php echo htmlspecialchars($friday['l2']); ?></li>
                <li>3η <?php echo htmlspecialchars($friday['l3']); ?></li>
                <li>4η <?php echo htmlspecialchars($friday['l4']); ?></li>
                <li>5η <?php echo htmlspecialchars($friday['l5']); ?></li>
                <li>6η <?php echo htmlspecialchars($friday['l6']); ?></li>
                <li>7η <?php echo htmlspecialchars($friday['l7']); ?></li>
            </ul>
        </div>
    </div>
</body>


</html>