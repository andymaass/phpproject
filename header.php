<html>
<head>
   <title>Aufagbenverwaltung - <?php
                // Ausgabe der Variable $title (Definiert in der jeweiligen, aufgerufenen Seite) um den Seitentitel in dem Browserfenster anzuzeigen
                echo $pagetitle; 
               ?></title>
<head>
    
<body>

<!-- Tabelle fÃ¼r das Seitenlayout erstellen -->
<table border="1" align="center" cellpadding="5">

<!-- Erste Tabellenzeile - Gibt den allgemeinen Seitentitel aus. -->
<tr>
    <td colspan="2">
        <h3>Aufgabenverwaltung</h3>
    </td>
</tr>

<!-- Zweite Tabellenzeile - Gibt die Navigation und den Seiteninhalt aus -->
<tr>
    <!-- Erste Spalte - Die Navigation -->
    <td valign="top">
        <?php
            include "links.php";
        ?>
    </td>

    <!-- Zweite Spalte - Der eigentliche Seiteninhalt -->
    <td valign="top">
        <h4>
            <?php
                // Ausgabe des Inhaltes der Variable $title fÃ¼r die SeitenÃ¼berschrift
                echo $pagetitle; 
            ?>
        </h4>

