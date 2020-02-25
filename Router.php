<?php 

class Router {

  static $routes = [];
  
  static function addRoutes($routes) {
    self::$routes += $routes;
  }

  static function redirect(string $uri, string $method) {
    foreach (self::$routes as $route) {
      if ($route->uri == $uri && $route->method === $method) {
        return $route->path;
      }
    }
    return './pages/error.php';
  }
}
