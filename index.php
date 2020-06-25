<?php 

require __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

$router->namespace("Source\App");

$router->group(null);
$router->get("/", "WebController:home");
$router->get("/user", "UserController:index");
$router->get("/company", "CompanyController:index");
$router->get("/ong","OngController:index");

$router->post("/user", "UserController:create");
$router->post("/company", "CompanyController:create");
$router->post("/ong", "OngController:create");

$router->group("ooops");
$router->get("/{errcode}", "WebController:error");

$router->dispatch();

if($router->error()){
    $router->redirect("/ooops/{$router->error()}");
}