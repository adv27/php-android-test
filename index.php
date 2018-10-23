<?php
// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    case '/login':
        require __DIR__.'/controllers/login.php';
        break;
    case '/register':
        require __DIR__.'/controllers/register.php';
        break;
    case '/share':
        require __DIR__.'/controllers/sharecar.php';
        break;
    case '/listcar':
        require __DIR__.'/controllers/listcar.php';
        break;        
    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        require __DIR__.'/views/404.php';
        break;
}
