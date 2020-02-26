<?php 

class Router {

  static $routes = [];
  
  static function addRoutes($routes) {
    self::$routes += $routes;
  }

  static function redirect(string $uri) {
    if (array_key_exists($uri, self::$routes)) {
      return self::$routes[$uri];
    } else {
      return self::$routes['/error'];
    }
  }
}
