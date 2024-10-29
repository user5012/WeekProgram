<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $m1= "";
    $m2= "";
    $m3= "";
    $m4= "";
    $m5= "";
    $m6= "";
    $m7= "";

    $t2= "";
    $t3= "";
    $t4= "";
    $t5= "";
    $t6= "";
    $t7= "";

    $w2= "";
    $w3= "";
    $w4= "";
    $w5= "";
    $w6= "";
    $w7= "";

    $th2="";
    $th3="";
    $th4="";
    $th5="";
    $th6="";
    $th7="";

    $f2= "";
    $f3= "";
    $f4= "";
    $f5= "";
    $f6= "";
    $f7= "";


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