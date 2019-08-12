<?php 
// include router / the source of website
include_once 'core/router.php';
$route = new Router();

// Run router
$route->start();
