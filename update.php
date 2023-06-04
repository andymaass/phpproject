<?php
include "functions.php";

$p = new Tasks();

if (isset($_GET['id']))
{
    $tasks = $p->fetch($_GET['id']);
}

if (isset($_POST['id']))
{
    $tasks = $p->fetch($_POST['id']);

    $p->Titel = $_POST['Titel'];
    $p->Beschreibung = $_POST['Beschreibung'];
    $p->Erstellungsdatum = $_POST['Erstellungsdatum'];
    $p->Faelligkeitsdatum = $_POST['Faelligkeitsdatum'];

    $p->updated($_POST['id']);
}

echo "<html>";
echo '<body><p>Aufgabenverwaltung</p>';
echo '<form action="update.php" method="post">';
echo "<table border=\"1\">";
echo '<tr><td>ID</td><td>Titel</td><td>Beschreibung</td>';
echo'<td>Erstellungsdatum</td><td>Faelligkeitsdatum</td><td colspan="2">&nbsp;</td></tr>';

echo "<tr>";
echo '<td><input type="text" name="id" value="' . $tasks[0]['id'] . '"></td>';
echo '<td><input type="text" name="Titel" value="' . $tasks[0]['Titel'] . '"></td>';
echo '<td><input type="text" name="Beschreibung" value="' . $tasks[0]['Beschreibung'] . '"></td>';
echo '<td><input type="text" name="Erstellungsdatum" value="' . $tasks[0]['Erstellungsdatum'] . '"></td>';
echo '<td><input type="text" name="Faelligkeitsdatum" value="' . $tasks[0]['Faelligkeitsdatum'] . '"></td>';
echo "</tr>";

echo "</table><br>";
echo'<input type="submit" name="submit" value="Send"/><br>';
echo "</form>";
if($_POST)
{
?>
<p>Der Datensatz wurde geändert.</p>
<p><a href="index.php">zurück</a></p>
<?php
}
?>