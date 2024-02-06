<?php
// index.php
$routes = [
    'GET /' => 'views/index.html',
    'GET /signup' => 'views/get-signup.html',
    'GET /signin' => 'views/get-signin.html',
    'POST /signup' => 'views/post-signup.html',
    'POST /signin' => 'views/post-signin.html',
];

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];

$route = $requestMethod . ' ' . $requestUri;

if (array_key_exists($route, $routes)) {
    require_once $routes[$route];
} else {
    http_response_code(404);
    require_once 'views/404.html';
}
?>
