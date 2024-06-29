<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['commentaar']) && isset($_POST['beoordeling']) && isset($_POST['reis_id']) && isset($_POST['gebruiker_id'])) {
    $reis_id = $_POST['reis_id'];
    $gebruiker_id = $_POST['gebruiker_id'];
    $beoordeling = $_POST['beoordeling'];
    $commentaar = $_POST['commentaar'];

    $sql = "INSERT INTO beoordelingen (reis_id, gebruiker_id, beoordeling, commentaar, aangemaakt_op) 
            VALUES ('$reis_id', '$gebruiker_id', '$beoordeling', '$commentaar', NOW())";
    $conn->exec($sql);

    header("Location: index.php");
    exit();
}
?>
