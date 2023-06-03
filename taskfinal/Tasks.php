<?php
class Tasks
{
    public $id;
    public $title;
    public $description;
    public $comment;
    public $created_at;
    public $updated_at;
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
    
            $taskX = array('id'=>$row['id'], 'title'=>$row['title'], 'description'=>$row['description'], 'comment'=>$row['comment'],'created_at'=>$row['created_at']
            , 'updated_at'=>$row['updated_at']);
            $tasks[] = $taskX;

        }

        return $tasks;
    }

    public function fetch($id)
    {
        $tasks = array();

        $res = $this->con1->query("SELECT * FROM tasks WHERE id = $id");

        while ($row = $res->fetch_assoc()) {
    
            $taskX = array('id'=>$row['id'], 'title'=>$row['title'], 'description'=>$row['description'], 'comment'=>$row['comment'],'created_at'=>$row['created_at']
            , 'updated_at'=>$row['updated_at']);
            $tasks[] = $taskX;
        }

        return $tasks;
    }

    public function save()
    {
        $title =  $this->title;
        $description = $this->description;
        $comment = $this->comment;
        $created_at = $this->created_at;
        $updated_at = $this->updated_at;

        echo $sql = "INSERT INTO tasks (title, description, comment, created_at, updated_at)" .
                "VALUES ('" . $title ."','" . $description ."','" . $comment . "','" . $created_at . "','" . $updated_at ."')";
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
        $title =  $this->title;
        $description = $this->description;
        $comment = $this->comment;
        $created_at = $this->created_at;
        $updated_at = $this->updated_at;

        $sql = "UPDATE tasks SET title = '" . $title . "', description = '" . $description . "', comment = '" . $comment . "', created_at = '" . $created_at . "', 
        updated_at = '" . $updated_at . "' WHERE id = $id";

        if ($this->con1->query($sql) === TRUE) {
            return true;
        }
    }

    public function search($title)
    {
        $tasks = array();

        $res = $this->con1->query("SELECT * FROM tasks WHERE title like '%$title%'");

        while ($row = $res->fetch_assoc()) {
    
            $taskX = array('id'=>$row['id'], 'title'=>$row['title'], 'description'=>$row['description'], 'comment'=>$row['comment'],'created_at'=>$row['created_at']
            , 'updated_at'=>$row['updated_at']);
            $tasks[] = $taskX;
        }

        return $tasks;
    }
}