<?php
// Die Variable $title wird vor der Einbindung von header.php definiert damit sie in dieser Datei verfÃ¼gbar ist
$pagetitle = "Upload";
include "header.php";
?>

<?php

$uploadDir = 'uploads/'; // Verzeichnis zum Speichern der hochgeladenen Dateien

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $allowedTypes = ['application/txt'];
        $maxFileSize = 5 * 1024 * 1024; // 5 MB

        if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
            $file = $_FILES['file'];

            // Dateityp überprüfen
            if (in_array($file['type'], $allowedTypes)) {
                // Dateigröße überprüfen
                if ($file['size'] <= $maxFileSize) {
                    $uploadPath = $uploadDir . basename($file['name']);

                    // Datei speichern
                    if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
                        echo 'Die Datei wurde erfolgreich hochgeladen.';
                    } else {
                        echo 'Beim Hochladen der Datei ist ein Fehler aufgetreten.';
                    }
                } else {
                    echo 'Die Datei darf maximal 5 MB groß sein.';
                }
            } else {
                echo 'Es werden nur PDF-Dateien akzeptiert.';
            }
        } else {
            echo 'Beim Hochladen der Datei ist ein Fehler aufgetreten.';
        }
    }
    ?>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file" accept="application/txt" required>
        <input type="submit" value="Datei hochladen">
    </form>
<?php
// txt datei filtern und in datebankschreiben
    include "functions.php";
    $dateiname = "textdatei.txt";
    $uploadDir = 'uploads/';
    

    $dateipfad = $uploadDir . '/' . $dateiname;
    $file  = fopen($dateipfad, "r");
    $task= new Tasks();

    while(($line = fgets($file)) !== false)
    {
        $txt=json_decode($line);
    

        $sql = "INSERT INTO tasks (Titel, Beschreibung, Erstellungsdatum, Faelligkeitsdatum)" .
                "VALUES ('" . $txt->Titel ."','" . $txt->Beschreibung ."','" . $txt->Erstellungsdatum . "','" . $txt->Faelligkeitsdatum ."')";
        if ($task->con1->query($sql) === TRUE) {
        
            return true;
        }
    }

    
    

?>

<?php
include "footer.php";
?>