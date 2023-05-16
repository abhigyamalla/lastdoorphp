<?php
$config=require("config.php");
$db=new DataBase($config['database']);

$heading="My Notes";
$currentUser=2;

$id=$_GET['id'];

$note=$db->query('select * from notes where  id= :ids',['ids'=>$id])->findorfail();



authorize($note['user_id']==$currentUser);
require "views/note.view.php";