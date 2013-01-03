<?php 
namespace Controllers;

spl_autoload_register(function ($class) {
    include __NAMESPACE__ . '/' . $class . '.class.php';
});

$uri = $_SERVER['REQUEST_URI'];

echo $uri;

echo "<br />";

$controller = "Home";
$action = "index";
$id = 0;

if(preg_match("/instabeat\/([A-z][A-z0-9]+)[\/]?/", $uri, $matches)){
	$controller = ucfirst($matches[1]);
	$action = "index";
}

if(preg_match("/instabeat\/([A-z][A-z0-9]+)\/([A-z][A-z0-9]+)[\/]?/", $uri, $matches)){
	$controller = ucfirst($matches[1]);
	$action = $matches[2];
}

if(preg_match("/instabeat\/([A-z][A-z0-9]+)\/([A-z][A-z0-9]+)\/([0-9]+)[\/]?/", $uri, $matches)){
	$controller = ucfirst($matches[1]);
	$action = $matches[2];
	$id = $matches[3];
}

echo $controller."<br />";
echo $action."<br />";
echo $id;

$controller = str_replace('Index', 'Home', $controller);

$controller = new $controller();
$controller->$action();

