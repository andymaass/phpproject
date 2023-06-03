<?php

/*

// Aufgabe: Datei Kopieren



$quelleDatei = 'eingabe.txt';
$zielDatei = 'ausgabe.txt';

// Inhalte der Quelldatei lesen
$inhalt = file_get_contents($quelleDatei);

// Inhalte in die Zieldatei kopieren
file_put_contents($zielDatei, $inhalt);

echo 'Die Datei wurde erfolgreich kopiert.';



// Aufgabe: Datei umbenennen



$alterDateiname = $_POST['alter_name']; // Alte Dateiname aus dem Formular oder der Anfrage entnehmen
$neuerDateiname = $_POST['neuer_name']; // Neuer Dateiname aus dem Formular oder der Anfrage entnehmen

// Datei umbenennen
if (rename($alterDateiname, $neuerDateiname)) {
    echo "Datei erfolgreich umbenannt.";
} else {
    echo "Beim Umbenennen der Datei ist ein Fehler aufgetreten.";
}



// Aufgabe: Zeichen zählen



$filename = 'text.txt'; 

// Überprüfen, ob die Datei existiert
if (file_exists($filename)) {
  // Datei öffnen und den Inhalt lesen
  $fileContent = file_get_contents($filename);

  // Anzahl der Zeichen zählen
  $charCount = strlen($fileContent);

  // Ergebnis ausgeben
  echo "Die Anzahl der Zeichen in der Datei '$filename' beträgt: $charCount";
} else {
  echo "Die Datei '$filename' konnte nicht gefunden werden.";
}



// Aufgabe: Dateiinhalte filtern



// Name der Eingabedatei
$inputFile = 'eingabe.txt';
// Name der Ausgabedatei
$outputFile = 'ausgabe.txt';

// Array zum Speichern der gefilterten Zeilen
$filteredLines = [];

// Zeilen filtern
$lines = file($inputFile, FILE_IGNORE_NEW_LINES);
foreach ($lines as $line) {
    // Hier kannst du deine Filterlogik anwenden
    // Beispiel: Filtere Zeilen, die das Wort "Filterwort" enthalten
    if (strpos($line, 'Filterwort') !== false) {
        $filteredLines[] = $line;
    }
}

// Gefilterten Inhalt in neue Datei schreiben
$fileContents = implode(PHP_EOL, $filteredLines);

var_dump($filteredLines);

file_put_contents($outputFile, $fileContents);

echo 'Die Datei wurde gefiltert und der gefilterte Inhalt wurde in eine neue Datei gespeichert.';



Aufgabe: JSON-Daten lesen und schreiben:



// Pfad zur JSON-Datei
$jsonDatei = 'test.json';

// JSON-Daten aus der Datei lesen
$jsonDaten = file_get_contents($jsonDatei);

// JSON-Daten in ein assoziatives Array umwandeln
$datenArray = json_decode($jsonDaten, true);

// Änderungen an den Daten vornehmen
// Hier ein Beispiel für eine Änderung: Den Wert eines Schlüssels erhöhen
$datenArray['schluessel']++;

// Aktualisierte Daten zurück in JSON konvertieren
$aktualisierteJsonDaten = json_encode($datenArray);

// Aktualisierte Daten in dieselbe Datei speichern
file_put_contents($jsonDatei, $aktualisierteJsonDaten);

echo "Die Daten wurden erfolgreich aktualisiert und in der Datei gespeichert.";



Aufgabe: Dateiinformationen anzeigen



$filename = "test.json"; 

// Überprüfe, ob die Datei existiert
if (file_exists($filename)) {
    // Dateinamen ausgeben
    echo "Dateiname: " . basename($filename) . "\n";

    // Dateityp ausgeben
    echo "Dateityp: " . mime_content_type($filename) . "\n";

    // Dateigröße ausgeben
    echo "Dateigröße: " . filesize($filename) . " Bytes\n";

    // Änderungsdatum ausgeben
    echo "Änderungsdatum: " . date("Y-m-d H:i:s", filemtime($filename));
} else {
    echo "Die Datei existiert nicht.";
}

*/

?>