<?php


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

$routes=require('routes.php');

    


    function routeToController($uri,$routes){
        if(array_key_exists($uri,$routes)){
            require $routes[$uri];
        }else{
            abort();
            
        }

    }
    function abort(){
        http_response_code(404);
        require "views/403.php";
        die();

    }

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
 routeToController($uri,$routes);
 




    
