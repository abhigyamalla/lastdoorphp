<?php
$config=require("config.php");
$db=new DataBase($config['database']);

$heading = "Create Notes";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Error=[];
    if(strlen($_POST['note'])==0){
        $Error['note']="A body is required";
    }

    if(empty($Error)){
        $db->query('INSERT INTO notes(note,user_id) VALUES(:note, :user_id)', [
            'note' => $_POST['note'],
            'user_id' => 2
         ]);

    }
  
     
      
   
}

require "views/note-create.view.php";

