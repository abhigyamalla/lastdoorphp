<?php
$config=require("config.php");
$db=new DataBase($config['database']);

$heading="Notes";



$notes=$db->query("select * from notes where user_id=2")->get();
require "views/notes.view.php";