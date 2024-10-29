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
    <link rel="stylesheet" href="styles.css">
    <title>edit</title>
</head>

<body>
    <form class="schedule-container" action="includes/formaction.inc.php" method="post">
        <div class="day" id="monday">
            <h2>Monday</h2>
            <div>
                <input id="monday-1" name="m-1" type="text" placeholder="1η ώρα"
                    value="<?php echo htmlspecialchars($monday['l1']); ?>"></input>
                <input id="monday-2" name="m-2" type="text" placeholder="2η ώρα"
                    value="<?php echo htmlspecialchars($monday['l2']); ?>"></input>
                <input id="monday-3" name="m-3" type="text" placeholder="3η ώρα"
                    value="<?php echo htmlspecialchars($monday['l3']); ?>"></input>
                <input id="monday-4" name="m-4" type="text" placeholder="4η ώρα"
                    value="<?php echo htmlspecialchars($monday['l4']); ?>"></input>
                <input id="monday-5" name="m-5" type="text" placeholder="5η ώρα"
                    value="<?php echo htmlspecialchars($monday['l5']); ?>"></input>
                <input id="monday-6" name="m-6" type="text" placeholder="6η ώρα"
                    value="<?php echo htmlspecialchars($monday['l6']); ?>"></input>
                <input id="monday-7" name="m-7" type="text" placeholder="7η ώρα"
                    value="<?php echo htmlspecialchars($monday['l7']); ?>"></input>
            </div>
        </div>
        <div class="day" id="tuesday">
            <h2>Tuesday</h2>
            <div>
                <input id="tuesday-1" name="t-1" type="text" placeholder="1η ώρα"
                    value="<?php echo htmlspecialchars($tuesday['l1']); ?>"></input>
                <input id="tuesday-2" name="t-2" type="text" placeholder="2η ώρα"
                    value="<?php echo htmlspecialchars($tuesday['l2']); ?>"></input>
                <input id="tuesday-3" name="t-3" type="text" placeholder="3η ώρα"
                    value="<?php echo htmlspecialchars($tuesday['l3']); ?>"></input>
                <input id="tuesday-4" name="t-4" type="text" placeholder="4η ώρα"
                    value="<?php echo htmlspecialchars($tuesday['l4']); ?>"></input>
                <input id="tuesday-5" name="t-5" type="text" placeholder="5η ώρα"
                    value="<?php echo htmlspecialchars($tuesday['l5']); ?>"></input>
                <input id="tuesday-6" name="t-6" type="text" placeholder="6η ώρα"
                    value="<?php echo htmlspecialchars($tuesday['l6']); ?>"></input>
                <input id="tuesday-7" name="t-7" type="text" placeholder="7η ώρα"
                    value="<?php echo htmlspecialchars($tuesday['l7']); ?>"></input>
            </div>
        </div>
        <div class="day" id="wednesday">
            <h2>Wednesday</h2>
            <div>
                <input id="wednesday-1" name="w-1" type="text" placeholder="1η ώρα"
                    value="<?php echo htmlspecialchars($wednesday['l1']); ?>"></input>
                <input id="wednesday-2" name="w-2" type="text" placeholder="2η ώρα"
                    value="<?php echo htmlspecialchars($wednesday['l2']); ?>"></input>
                <input id="wednesday-3" name="w-3" type="text" placeholder="3η ώρα"
                    value="<?php echo htmlspecialchars($wednesday['l3']); ?>"></input>
                <input id="wednesday-4" name="w-4" type="text" placeholder="4η ώρα"
                    value="<?php echo htmlspecialchars($wednesday['l4']); ?>"></input>
                <input id="wednesday-5" name="w-5" type="text" placeholder="5η ώρα"
                    value="<?php echo htmlspecialchars($wednesday['l5']); ?>"></input>
                <input id="wednesday-6" name="w-6" type="text" placeholder="6η ώρα"
                    value="<?php echo htmlspecialchars($wednesday['l6']); ?>"></input>
                <input id="wednesday-7" name="w-7" type="text" placeholder="7η ώρα"
                    value="<?php echo htmlspecialchars($wednesday['l7']); ?>"></input>
            </div>
        </div>
        <div class="day" id="thursday">
            <h2>Thursday</h2>
            <div>
                <input id="thursday-1" name="th-1" type="text" placeholder="1η ώρα"
                    value="<?php echo htmlspecialchars($thursday['l1']); ?>"></input>
                <input id="thursday-2" name="th-2" type="text" placeholder="2η ώρα"
                    value="<?php echo htmlspecialchars($thursday['l2']); ?>"></input>
                <input id="thursday-3" name="th-3" type="text" placeholder="3η ώρα"
                    value="<?php echo htmlspecialchars($thursday['l3']); ?>"></input>
                <input id="thursday-4" name="th-4" type="text" placeholder="4η ώρα"
                    value="<?php echo htmlspecialchars($thursday['l4']); ?>"></input>
                <input id="thursday-5" name="th-5" type="text" placeholder="5η ώρα"
                    value="<?php echo htmlspecialchars($thursday['l5']); ?>"></input>
                <input id="thursday-6" name="th-6" type="text" placeholder="6η ώρα"
                    value="<?php echo htmlspecialchars($thursday['l6']); ?>"></input>
                <input id="thursday-7" name="th-7" type="text" placeholder="7η ώρα"
                    value="<?php echo htmlspecialchars($thursday['l7']); ?>"></input>
            </div>
        </div>
        <div class="day" id="friday">
            <h2>Friday</h2>
            <div>
                <input id="friday-1" name="f-1" type="text" placeholder="1η ώρα"
                    value="<?php echo htmlspecialchars($friday['l1']); ?>"></input>
                <input id="friday-2" name="f-2" type="text" placeholder="2η ώρα"
                    value="<?php echo htmlspecialchars($friday['l2']); ?>"></input>
                <input id="friday-3" name="f-3" type="text" placeholder="3η ώρα"
                    value="<?php echo htmlspecialchars($friday['l3']); ?>"></input>
                <input id="friday-4" name="f-4" type="text" placeholder="4η ώρα"
                    value="<?php echo htmlspecialchars($friday['l4']); ?>"></input>
                <input id="friday-5" name="f-5" type="text" placeholder="5η ώρα"
                    value="<?php echo htmlspecialchars($friday['l5']); ?>"></input>
                <input id="friday-6" name="f-6" type="text" placeholder="6η ώρα"
                    value="<?php echo htmlspecialchars($friday['l6']); ?>"></input>
                <input id="friday-7" name="f-7" type="text" placeholder="7η ώρα"
                    value="<?php echo htmlspecialchars($friday['l7']); ?>"></input>
            </div>
        </div>
        </div>

        <button id="savebtn">Save</button>
    </form>

    <form action="includes/clear-box.php" method="post">
        <label>
            <button id="clear">clear</button>
        </label>
    </form>
</body>

</html>