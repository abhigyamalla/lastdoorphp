<?php
$config=require("config.php");
$db=new DataBase($config['database']);

$heading="About";


$id=$_GET['id'];

$note=$db->query('select * from notes where id= :ids',['ids'=>$id])->fetch();
require "views/note.view.php";