<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$statement = $pdo->prepare('INSERT INTO contacts(name, email, phone) VALUES (:name, :email, :phone);');
$statement->execute([':name' => $name, ':email' => $email, ':phone' => $phone]);

//header('Location: /');
