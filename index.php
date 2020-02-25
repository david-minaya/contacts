<?php

require './Route.php';
require './Router.php';
require './Contact.php';

$pdo = new PDO('sqlite:database.db');

$statement1 = $pdo->prepare('INSERT INTO contacts (name, email, phone) VALUES (:name, :email, :phone);');
$statement1->execute([':name' => 'a', ':email' => 'b', ':phone' => 'c']);

$statement = $pdo->prepare('SELECT name, email, phone FROM contacts;');
$statement->execute();
$contacts = $statement->fetchAll(PDO::FETCH_CLASS, 'Contact');

Router::addRoutes([
  new Route('GET', '/', './pages/index.php'),
  new Route('GET', '/contact', './pages/contact.php'),
  new Route('POST', '/add_contact', './controllers/add_contact.post.php')
]);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

require Router::redirect($uri, $method);
