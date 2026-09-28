<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "zs_sport_ai";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}

?>
\\Database tabel
CREATE TABLE prestaties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    oefening VARCHAR(100),
    gewicht DECIMAL(5,2),
    datum DATE
);
\\Gegevens opslaan
<?php

require_once "database.php";

$oefening = "Bankdrukken";
$gewicht = 60;
$datum = date("Y-m-d");

$sql = "INSERT INTO prestaties (oefening, gewicht, datum)
        VALUES ('$oefening', '$gewicht', '$datum')";

if ($conn->query($sql) === TRUE) {
    echo "Gegevens zijn opgeslagen!";
} else {
    echo "Fout: " . $conn->error;
}

$conn->close();

?>
<?php

require_once "database.php";

$sql = "SELECT * FROM prestaties";
$result = $conn->query($sql);

?>
Gegevens ophalen\\

<h1>Mijn Prestaties</h1>


<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        echo "<p>";
        echo "Oefening: " . $row["oefening"] . "<br>";
        echo "Gewicht: " . $row["gewicht"] . " kg<br>";
        echo "Datum: " . $row["datum"];
        echo "</p>";

    }

} else {
    echo "Geen prestaties gevonden.";
}

$conn->close();

?>
Hoe het werkt:
PHP
 ↓
MySQL database
 ↓
Gegevens opslaan
 ↓
Gegevens ophalen
 ↓
Website toont prestaties