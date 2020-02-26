<?php

$id = $_GET['id'];
$contact = Database::getContact($id);
require './views/contact.view.php';
