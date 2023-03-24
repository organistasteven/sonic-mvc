<?php

use Kint\Kint;

    require_once __DIR__ . "/../vendor/autoload.php";
    
   
    require __DIR__ . "/../app/Controllers/CoreController.php";
    require __DIR__ . "/../app/Controllers/MainController.php";
    require __DIR__ . "/../app/Controllers/CatalogController.php";

   

    require __DIR__ . "./../app/database/database.php";

   

    require __DIR__ . "./../app/Models/CoreModel.php";
    require __DIR__ . "./../app/Models/CharacterModel.php";
    require __DIR__ . "./../app/Models/TypeModel.php";


    $router = new AltoRouter();

  


    $router->setBasePath($_SERVER["BASE_URI"]);

   
    $router->map( 'GET','/',['action' => 'home','controller' => 'MainController'],'main_home');
    
    $router->map('GET', '/creators', ['action' => 'creators', 'controller' => 'MainController'], 'main_creators');
   
    
    $match = $router->match();


    if($match !== false) {
        
        $routeUtilisee = $match['target'];
        $methodUsed = $routeUtilisee['action']; 
        $controllerUsed = $routeUtilisee['controller']; 
        $controller = new $controllerUsed();
        $controller->$methodUsed($match["params"]);
    } else {
        $methodUsed = 'error404';
        $controllerUsed = 'MainController';
        $controller = new $controllerUsed();
        $controller->$methodUsed();
    }

    

  
