<?php
//Mike Prelesnik
//1/11/19

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "vendor/autoload.php";

//create an instance of the base class
$f3 = Base::instance();

//turn on fat-free error reporting
$f3->set('DEBUG', 3);

//define a default route
$f3->route('GET /', function() {
    //echo "<h1>My Fav Foods</h1>";
    $view = new View();
    echo $view->render('views/home.html');
});

//define a breakfast route
$f3->route('GET /breakfast', function() {
    $view = new View();
    echo $view->render('views/breakfast.html');
});

//define a breakfast route
$f3->route('GET /lunch', function() {
    $view = new View();
    echo $view->render('views/lunch.html');
});

//define a breakfast/pancakes route
$f3->route('GET /breakfast/pancakes', function() {
    $view = new View();
    echo $view->render('views/pancakes.html');
});

//define a dinner route
$f3->route('GET /dinner', function() {
    $view = new View();
    echo $view->render('views/dinner.html');
});

//define a dinner/tacos route
$f3->route('GET /dinner/tacos', function() {
    $view = new View();
    echo $view->render('views/tacos.html');
});

//define a dinner/pizza route
$f3->route('GET /dinner/pizza', function() {
    $view = new View();
    echo $view->render('views/pizza.html');
});

//define a dinner/burgers route
$f3->route('GET /dinner/burgers', function() {
    $view = new View();
    echo $view->render('views/burgers.html');
});

//run fat-free
$f3->run();