<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
	"/" => "controllers/index.php",
	"/posts" => "controllers/posts.php",
	"/posts/create" => "controllers/post-create.php",
	"/about" => "controllers/about.php",
	"/careers" => "controllers/careers.php",
	"/contact" => "controllers/contact.php",
];

if(array_key_exists($uri, $routes)){
	require $routes[$uri];
} else {
	require "controllers/404.php";
}

?>

