<?php
$config=require("config.php");
$db=new DataBase($config['database']);

$heading="About";



$notes=$db->query("select * from notes where user_id=1")->fetchAll();



require "views/notes.view.php";