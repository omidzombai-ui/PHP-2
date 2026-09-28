<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "zs_sport_ai";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}

// Gegevens
$oefening = "Bankdrukken";
$gewicht = 60;
$datum = date("Y-m-d");

// Gegevens opslaan
$sql = "INSERT INTO prestaties (oefening, gewicht, datum)
        VALUES ('$oefening', '$gewicht', '$datum')";

if ($conn->query($sql) === TRUE) {
    echo "Gegevens succesvol opgeslagen!";
} else {
    echo "Fout: " . $conn->error;
}

$conn->close();

?>
De belangrijkste regel is:

INSERT INTO prestaties (oefening, gewicht, datum)
VALUES ('$oefening', '$gewicht', '$datum')