<?php
// Die Variable $title wird vor der Einbindung von header.php definiert damit sie in dieser Datei verfÃ¼gbar ist
$pagetitle = "Startseite";
include "header.php";
?>
Hier kommt der Seiteninhalt rein!
<?php
include "functions.php"

$p = new Tasks();

$tasks = $p->fetchAll();

$heute = date("Y-m-d");
echo "<table border=\"1\">";
echo '<tr><td>ID</td><td>Titel</td><td>Beschreibung</td>
<td>Erstellungsdatum</td><td>Faelligkeitsdatum</td><td colspan="2">&nbsp;</td></tr>';

$count = count($tasks);

for($i=0; $i<$count; $i++)
{
    echo "<tr>";
    $price = 0;
    foreach($tasks[$i] as $key => $value)
    {
        echo "<td>";
        echo $value;
        echo "</td>";
    }
    echo '<td><a href="update.php?id=' . $tasks[$i]['id'] . '">ändern</a> 
    <a href="delete.php?id=' . $tasks[$i]['id'] . '">löschen</a></td>';
    echo "</tr>";
}
echo "</table>";
?>
<br>
<br>
<br>
Neu erstellen:
<br>

<form action ="" method="post">
<table border="0">
    <tr>
        <td><label>Title</label></td>
        <td><input type="text" name="Titel" value=""/></td>
    </tr>
    <tr>
        <td><label>Description</label></td>
        <td><input type="text" name="Beschreibung" value=""/></td>
    </tr>
    <tr>
        <td><label>created_at</label></td>
        <td><input type="text" name="Erstellungsdatum" value="<?php echo $heute; ?>"/>
        </td>
    </tr>
    <tr>
        <td><label>updated_at</label></td>
        <td><input type="text" name="Faelligkeitsdatum" value="<?php echo $heute; ?>"/></td>
    </tr>
</table>
<input type="submit" value="Send"/><br>
</form>
<?php
if(isset($_POST["title"]))
{
    $p->Titel = $_POST['Titel'];
    $p->Beschreibung = $_POST['Beschreibung'];
    $p->comment = $_POST['comment'];
    $p->created_at = $_POST['Erstellungsdatum'];
    $p->updated_at = $_POST['Faelligkeitsdatum'];

    $p->save();

    header('Location: index.php');
}

?>

<br>
<br>
<br>
Suche:
<br>

<form action ="" method="post">
<table border="0">
    <tr>
        <td><label>Search</label></td>
        <td><input type="text" name="search" value=""/></td>
    </tr>
    </table>
<input type="submit" value="Send"/><br>
</form>

<?php
if(isset($_POST["search"]))
{
    $tasks=$p->search($_POST["search"]); 

echo "<table border=\"1\">";
echo '<tr><td>ID</td><td>Titel</td><td>Beschreibung</td>
<td>Erstellungsdatum</td><td>Faelligkeitsdatum</td><td colspan="2">&nbsp;</td></tr>';

$count = count($tasks);
if ($count <=0)
echo "Datensatz nicht gefunden";

for($i=0; $i<$count; $i++)
{
    echo "<tr>";
    $price = 0;
    foreach($tasks[$i] as $key => $value)
    {
        echo "<td>";
        echo $value;
        echo "</td>";
    }
    echo '<td><a href="update.php?id=' . $tasks[$i]['id'] . '">ändern</a> 
    <a href="delete.php?id=' . $tasks[$i]['id'] . '">löschen</a></td>';
    echo "</tr>";
}
echo "</table>";
}
?>

<?php
include "footer.php";
?>