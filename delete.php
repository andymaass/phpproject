<?php
include_once("Tasks.php");

$p = new Tasks();
$delete = $p->delete($_GET['id']);
echo "<html>";
echo '<body><p>Aufgabenverwaltung</p>
<p>Der Datensatz wurde gelöscht.</p>
<p><a href="aufgabenverwaltung.php">zurück</a></p>';