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

//define a default route (practicing with templates, NOT VIEWS)
$f3->route('GET /', function($f3) {
    //save variables
    $f3->set('username', 'mprelesnik');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');
    $f3->set('temp', 67);
    $f3->set('radius', 12);
    $f3->set('fruits', array('apple', 'orange', 'banana'));
    $f3->set('bookmarks', array('mlb'=>'www.mlb.com', 'reddit'=>'www.reddit.com', 'greenriver'=>'www.greenriver.edu'));

//load a template
    $template = new Template();
    echo $template->render('views/info.html');
});


/*
 * //define a default route
$f3->route('GET /', function() {
    //echo "<h1>My Fav Foods</h1>";
    $view = new View();
    echo $view->render('views/home.html');
});
 *
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

//define a route with a parameter
$f3->route('GET /@food', function($f3, $params) {
    //print_r($params);
    echo "<h3>I like " . $params['food'] . "</h3>";
    //$view = new View();
    //echo $view->render('views/burgers.html');
});

//define a route with multiple parameters
$f3->route('GET /@meal/@food', function($f3, $params) {
    //print_r($params);

    $validMeals = ['breakfast', 'lunch', 'dinner'];
    $meal = $_GET[$params['meal']];

    //check validity
    if (!in_array($params['meal'], $validMeals))
    {
        echo "<h3>Sorry, we don't serve $meal</h3>";
    }

    else
    {
        switch ($params['meal'])
        {
            case 'breakfast':
                $time = " in the morning"; break;

            case 'lunch':
                $time = " at noon"; break;

            case 'dinner':
                $time = " in the evening";
        }

        echo "<h3>I like {$params['meal']} $time";
        //echo "<h3>I like " . $params['food'] .  " for " . $params['meal'] . "</h3>";
    }


    //echo "<h3>I like " . $params['food'] .  " for " . $params['meal'] . "</h3>";
    //$view = new View();
    //echo $view->render('views/burgers.html');
});

//define a route to display order form
$f3->route('GET /order', function() {
    $view = new View();
    echo $view->render('views/form1.html');
});

//define a route to process orders
$f3->route('POST /order-process', function($f3) {
    print_r($_POST);

    $food = $_POST['food'];
    echo "You ordered $food";

    if ($food == 'pizza')
    {
        //reroute to pizza page
        $f3->reroute("dinner/pizza");
    }

    else if ($food == 'burgers')
    {
        $f3->reroute("dinner/burgers");
    }

    else
    {
        $f3->reroute("");
    }

    echo "Processing Order";
    //$view = new View();
    //echo $view->render('views/form1.html');
});

//define a route as described in class
$f3->route('GET /dessert/@param', function($f3, $param) {
    //echo "<h3>I like {$param['param']} for dessert</h3>";

    if ($param['param'] == 'pie')
    {
        $view = new View();
        echo $view->render('views/pie.html');
    }

    else if ($param['param'] == 'cake' || $param['param'] == 'cookies' || $param['param'] == 'brownies')
    {
        echo "<h3>I like {$param['param']} for dessert</h3>";
    }

    else
    {
        $f3->error(404);
    }



});
*/

//run fat-free
$f3->run();
