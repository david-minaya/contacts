<?php

class Route {

  public $method;
  public $uri;
  public $path;

  public function __construct(string $method, string $uri, string $path) {
    $this->method = $method;
    $this->uri = $uri;
    $this->path = $path;
  }
}
