<?php

$contact = new Contact();
$contact->name = $_POST['name'];
$contact->email = $_POST['email'];
$contact->phone = $_POST['phone'];
$contact->color = RandomColors::getColor();

Database::addContact($contact);

header('Location: /');
