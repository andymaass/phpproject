<?php
include_once("Tasks.php");

$p = new Tasks();

if (isset($_GET['id']))
{
    $tasks = $p->fetch($_GET['id']);
}

if (isset($_POST['id']))
{
    $tasks = $p->fetch($_POST['id']);

    $p->title = $_POST['title'];
    $p->description = $_POST['description'];
    $p->comment = $_POST['comment'];
    $p->created_at = $_POST['created_at'];
    $p->updated_at = $_POST['updated_at'];

    $p->updated($_POST['id']);
}

echo "<html>";
echo '<body><p>Aufgabenverwaltung</p>';
echo '<form action="update.php" method="post">';
echo "<table border=\"1\">";
echo '<tr><td>ID</td><td>Title</td><td>Description</td><td>Comment</td>';
echo'<td>created_at</td><td>updated_at</td><td colspan="2">&nbsp;</td></tr>';

echo "<tr>";
echo '<td><input type="text" name="id" value="' . $tasks[0]['id'] . '"></td>';
echo '<td><input type="text" name="title" value="' . $tasks[0]['title'] . '"></td>';
echo '<td><input type="text" name="description" value="' . $tasks[0]['description'] . '"></td>';
echo '<td><input type="text" name="comment" value="' . $tasks[0]['comment'] . '"></td>';
echo '<td><input type="text" name="created_at" value="' . $tasks[0]['created_at'] . '"></td>';
echo '<td><input type="text" name="updated_at" value="' . $tasks[0]['updated_at'] . '"></td>';
echo "</tr>";

echo "</table><br>";
echo'<input type="submit" name="submit" value="Send"/><br>';
echo "</form>";
if($_POST)
{
?>
<p>Der Datensatz wurde geändert.</p>
<p><a href="aufgabenverwaltung.php">zurück</a></p>
<?php
}
?>