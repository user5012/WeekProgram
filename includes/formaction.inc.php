<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $m1= $_POST["m-1"];
    $m2= $_POST["m-2"];
    $m3= $_POST["m-3"];
    $m4= $_POST["m-4"];
    $m5= $_POST["m-5"];
    $m6= $_POST["m-6"];
    $m7= $_POST["m-7"];

    $t1= $_POST["t-1"];
    $t2= $_POST["t-2"];
    $t3= $_POST["t-3"];
    $t4= $_POST["t-4"];
    $t5= $_POST["t-5"];
    $t6= $_POST["t-6"];
    $t7= $_POST["t-7"];

    $w1= $_POST["w-1"];    
    $w2= $_POST["w-2"];
    $w3= $_POST["w-3"];
    $w4= $_POST["w-4"];
    $w5= $_POST["w-5"];
    $w6= $_POST["w-6"];
    $w7= $_POST["w-7"];

    $th1= $_POST["th-1"];
    $th2= $_POST["th-2"];
    $th3= $_POST["th-3"];
    $th4= $_POST["th-4"];
    $th5= $_POST["th-5"];
    $th6= $_POST["th-6"];
    $th7= $_POST["th-7"];

    $f1= $_POST["f-1"];
    $f2= $_POST["f-2"];
    $f3= $_POST["f-3"];
    $f4= $_POST["f-4"];
    $f5= $_POST["f-5"];
    $f6= $_POST["f-6"];
    $f7= $_POST["f-7"];


    try {
        require_once "dbh.inc.php"; // Connect to the database
        
        // Prepare and execute the update queries for each day
        $queryMonday = "UPDATE monday SET l1 = ?, l2 = ?, l3 = ?, l4 = ?, l5 = ?, l6 = ?, l7 = ? WHERE id = ?;";
        $queryTuesday = "UPDATE tuesday SET l1 = ?, l2 = ?, l3 = ?, l4 = ?, l5 = ?, l6 = ?, l7 = ? WHERE id = ?;";
        $queryWednesday = "UPDATE wednesday SET l1 = ?, l2 = ?, l3 = ?, l4 = ?, l5 = ?, l6 = ?, l7 = ? WHERE id = ?;";
        $queryThursday = "UPDATE thursday SET l1 = ?, l2 = ?, l3 = ?, l4 = ?, l5 = ?, l6 = ?, l7 = ? WHERE id = ?;";
        $queryFriday = "UPDATE friday SET l1 = ?, l2 = ?, l3 = ?, l4 = ?, l5 = ?, l6 = ?, l7 = ? WHERE id = ?;";

        // Assuming you have a unique ID (`day_id`) for each row
        $day_id_m = 1;  // Example: Update the row with id = 1, adjust this based on your setup
        $day_id_t = 2;  // Example: Update the row with id = 1, adjust this based on your setup
        $day_id_w = 3;  // Example: Update the row with id = 1, adjust this based on your setup
        $day_id_th = 4;  // Example: Update the row with id = 1, adjust this based on your setup
        $day_id_f = 5;  // Example: Update the row with id = 1, adjust this based on your setup

        $stmt = $pdo->prepare($queryMonday);
        $stmt->execute([$m1, $m2, $m3, $m4, $m5, $m6, $m7, $day_id_m]);

        $stmt = $pdo->prepare($queryTuesday);
        $stmt->execute([$t1, $t2, $t3, $t4, $t5, $t6, $t7, $day_id_t]);

        $stmt = $pdo->prepare($queryWednesday);
        $stmt->execute([$w1, $w2, $w3, $w4, $w5, $w6, $w7, $day_id_w]);

        $stmt = $pdo->prepare($queryThursday);
        $stmt->execute([$th1, $th2, $th3, $th4, $th5, $th6, $th7, $day_id_th]);

        $stmt = $pdo->prepare($queryFriday);
        $stmt->execute([$f1, $f2, $f3, $f4, $f5, $f6, $f7, $day_id_f]);

        // Close the database connection and statement
        $pdo = null;
        $stmt = null;
        
        // Redirect after update
        header("location: ../index.php");
        die();
    } catch (PDOException $e) {
        die("Update failed: " . $e->getMessage());
    }
        
}
else{
    header("location: ../index.php");
}