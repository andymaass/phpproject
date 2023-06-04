<?php
$heute = date("Y-m-d");
echo "$heute";

class Tasks
{
    public $id;
    public $Titel;
    public $Beschreibung;
    public $Erstellungsdatum;
    public $Faelligkeitsdatum;
    public $con1;

    //CRUD Create, Read, Update, Delete

    public function __construct()
    {
        $this->con1 = $mysqli = new mysqli("localhost", "root", "", "tasks");
    }

    public function fetchAll()
    {
        $tasks = array();

        $res = $this->con1->query("SELECT * FROM tasks");

        while ($row = $res->fetch_assoc()) {
    
            $taskX = array('id'=>$row['id'], 'Titel'=>$row['Titel'], 'Beschreibung'=>$row['Beschreibung'], 'Erstellungsdatum'=>$row['Erstellungsdatum']
            , 'Faelligkeitsdatum'=>$row['Faelligkeitsdatum']);
            $tasks[] = $taskX;

        }

        return $tasks;
    }

    public function fetch($id)
    {
        $tasks = array();

        $res = $this->con1->query("SELECT * FROM tasks WHERE id = $id");

        while ($row = $res->fetch_assoc()) {
    
            $taskX = array('id'=>$row['id'], 'Titel'=>$row['Titel'], 'Beschreibung'=>$row['Beschreibung'], 'Erstellungsdatum'=>$row['Erstellungsdatum']
            , 'Faelligkeitsdatum'=>$row['Faelligkeitsdatum']);
            $tasks[] = $taskX;
        }

        return $tasks;
    }

    public function save()
    {
        $Titel =  $this->Titel;
        $Beschreibung = $this->Beschreibung;
        $Erstellungsdatum = $this->Erstellungsdatum;
        $Faelligkeitsdatum = $this->Faelligkeitsdatum;

        echo $sql = "INSERT INTO tasks (Titel, Beschreibung, Erstellungsdatum, Faelligkeitsdatum)" .
                "VALUES ('" . $Titel ."','" . $Beschreibung ."','" . $Erstellungsdatum . "','" . $Faelligkeitsdatum ."')";
        if ($this->con1->query($sql) === TRUE) {
        
            return true;
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tasks WHERE id = $id";
        if ($this->con1->query($sql) === TRUE) {
            return true;
        }
    }

    public function updated($id)
    {
        $Titel =  $this->Titel;
        $Beschreibung = $this->Beschreibung;
        $Erstellungsdatum = $this->Erstellungsdatum;
        $Faelligkeitsdatum = $this->Faelligkeitsdatum;

        $sql = "UPDATE tasks SET Titel = '" . $Titel . "', Beschreibung = '" . $Beschreibung . "', Erstellungsdatum = '" . $Erstellungsdatum . "', 
        Faelligkeitsdatum = '" . $Faelligkeitsdatum . "' WHERE id = $id";

        if ($this->con1->query($sql) === TRUE) {
            return true;
        }
    }

    public function search($Titel)
    {
        $tasks = array();

        $res = $this->con1->query("SELECT * FROM tasks WHERE Titel like '%$Titel%'");

        while ($row = $res->fetch_assoc()) {
    
            $taskX = array('id'=>$row['id'], 'Titel'=>$row['Titel'], 'Beschreibung'=>$row['Beschreibung'], 'Erstellungsdatum'=>$row['Erstellungsdatum']
            , 'Faelligkeitsdatum'=>$row['Faelligkeitsdatum']);
            $tasks[] = $taskX;
        }

        return $tasks;
    }
}
