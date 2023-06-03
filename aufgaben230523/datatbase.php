<?php

$servername = "localhost";  
$username = "root";  
$password = "";  
$dbname = "pim";  

//a) Erstelle eine Verbindung zu einer MySQL-Datenbank. Erstelle eine Tabelle namens "users" mit den Spalten "id", "name" und "email".

// Verbindung herstellen:

// $conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung überprüfen:

// if ($conn->connect_error) {
//    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
// }

// Tabelle erstellen:

// $sql = "CREATE TABLE users (
//    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    name VARCHAR(30) NOT NULL,
//    email VARCHAR(50) NOT NULL
//    )";

//  if ($conn->query($sql) === TRUE) {
//    echo "Tabelle 'users' erfolgreich erstellt.";
//  } else {
//    echo "Fehler beim Erstellen der Tabelle: " . $conn->error;
//  }

// Verbindung schließen:

// $conn->close();



//b) Schreibe einen PHP-Code, um Daten in die "users"-Tabelle einzufügen.

// Verbindung herstellen
// $conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung überprüfen
// if ($conn->connect_error) {
//    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
// }

// Daten einfügen
// $name = "Andy Maass";
// $email = "andy330@freenet.de.com";

// $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

// if ($conn->query($sql) === TRUE) {
//    echo "Daten erfolgreich eingefügt.";
// } else {
//    echo "Fehler beim Einfügen der Daten: " . $conn->error;
// }

// Verbindung schließen
// $conn->close();

//c) Schreibe einen PHP-Code, um alle Datensätze aus der "users"-Tabelle abzurufen und auf dem Bildschirm auszugeben.



// Daten abfragen


// Verbindung herstellen:

$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung überprüfen:

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
 }

$sql = "SELECT * FROM users";
$res = $conn->query($sql);
$users = array();

        while ($row = $res->fetch_assoc()) {
    
            $userX = array('id'=>$row['id'], 'name'=>$row['name'], 'email'=>$row['email']);
            $users[] = $userX;

        }

var_dump($users);
