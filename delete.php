<?php
include "functions.php";

$p = new Tasks();
$delete = $p->delete($_GET['id']);
echo "<html>";
echo '<body><p>Aufgabenverwaltung</p>
<p>Der Datensatz wurde gelöscht.</p>
<p><a href="index.php">zurück</a></p>';