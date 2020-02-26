<?php

require './models/Contact.php';
require './core/Database.php';
require './core/Router.php';
require './core/RandomColors.php';

Database::init('sqlite:database.db');
RandomColors::addColors(['aliceblue', 'lavender', 'lightsalmon', 'antiquewhite', 'pink']);

Router::addRoutes([
  '/' => './controllers/index.controller.php',
  '/contact' => './controllers/contact.controller.php',
  '/add' => './controllers/add.controller.php',
  '/delete' => './controllers/delete.controller.php',
  '/error' => './views/error.view.php'
]);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require Router::redirect($uri);
