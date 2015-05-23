<?php

$routes = [ ];
$controller = NULL;

/*
 * @todo_ routing
 */

$controller = new \Scaffold\Http\Controllers\ToDoController();
$routes[ '@todo' ] = $controller;
$routes[ '@todo/index' ] = $controller;

/*
 * @foo_ routing
 */

$controller = new \Scaffold\Http\Controllers\FooController();
$routes[ '@foo' ] = $controller;
$routes[ '@foo/index' ] = $controller;
$routes[ '@foo/show' ] = $controller;
$routes[ '@foo/create' ] = $controller;
$routes[ '@foo/edit' ] = $controller;
$routes[ '@foo/destroy' ] = $controller;

return $routes;
