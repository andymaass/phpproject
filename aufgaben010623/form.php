
<!DOCTYPE html>
<html>
<head>
    <title>Datei-Upload</title>
</head>
<body>
    <?php

// Aufgabe: Erstellen Sie eine Webseite mit einem HTML-Formular, das es Benutzern ermöglicht, eine Datei hochzuladen. Implementieren Sie einen PHP-Code, 
// der die hochgeladene Datei validiert und speichert. Stellen Sie sicher, dass die Datei nicht größer als 5 MB ist und nur PDF-Dateien akzeptiert werden. 
// Geben Sie eine Erfolgsmeldung aus, wenn die Datei erfolgreich hochgeladen wurde, oder eine entsprechende Fehlermeldung, wenn Probleme auftreten.

    $uploadDir = 'uploads/'; // Verzeichnis zum Speichern der hochgeladenen Dateien

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $allowedTypes = ['application/pdf'];
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
        <input type="file" name="file" accept="application/pdf" required>
        <input type="submit" value="Datei hochladen">
    </form>
</body>
</html>