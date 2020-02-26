<?php

$id = $_GET['id'];
Database::deleteContact($id);
header('Location: /');
