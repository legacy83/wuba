<?php

$routes = [ ];
$controller = NULL;

/*
 * @todo_ routing
 */

$controller = new \Scaffold\Http\Controllers\ToDoController();
$routes[ '@todo' ] = $controller;

/*
 * @foo_ routing
 */

$controller = new \Scaffold\Http\Controllers\FooController();
$routes[ '@foo' ] = $controller;

return $routes;
