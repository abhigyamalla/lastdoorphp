<?php
require "functions.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


// $path_to_about = 'C:\xampp\htdocs\lastdoorphp\controller/about.php'; // Replace with the actual path to the about.php file
// if (file_exists($path_to_about)) {
//     echo "Path to about.php is correct!";
// } else {
//     echo "Path to about.php is incorrect!";
// }


// if($uri ==='/lastdoorphp/index.php') {
//        require 'controller/index.php';
    
// }else if($uri ==='/lastdoorphp/about.php') {
//     require 'controller/about.php';
    
// }else if($uri==='/lastdoorphp/contact.php'){
//     require 'controller/contact.php';
// }
// else {
//     echo "Page not found<br>"; // Output an error message for debugging purposes
// }


$routes=
    [
        '/lastdoorphp/index.php'=>'controller/index.php',
        '/lastdoorphp/about.php'=>'controller/about.php',
        '/lastdoorphp/contact.php'=>'controller/contact.php',

    ];


    if(array_key_exists($uri,$routes)){
        require $routes[$uri];
    }else{
        http_response_code(404);
        echo"sorry not found";
        die();
    }
