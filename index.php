<?php

require "functions.php";
require "database.php";



$db=new DataBase();
$posts=$db->query("select * from posts where id=2")->fetch(PDO::FETCH_ASSOC);


// foreach ($posts as $post) {
//     echo '<li>' . $post['title'] . '</li>';
// }
dd($posts['title']);