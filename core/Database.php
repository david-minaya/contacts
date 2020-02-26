<?php

class Database {

    private static $pdo;

    static function init(string $uri) {
        self::$pdo = new PDO($uri);
    }

    static function getAllContacts() {
        $query = self::$pdo->prepare('SELECT rowid, * FROM contacts;');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'Contact');
    }

    static function getContact(string $id) {
        $query = self::$pdo->prepare('SELECT rowid, * FROM contacts WHERE rowid = :id;');
        $query->execute([':id' => $id]);
        return $query->fetchObject('Contact');
    }

    static function addContact(Contact $contact) {
        $agregate = self::$pdo->prepare('INSERT INTO contacts (name, email, phone) VALUES (:name, :email, :phone);');
        $agregate->execute([
            ':name' => $contact->name,
            ':email' => $contact->email,
            ':phone' => $contact->phone
        ]);
    }

    static function deleteContact(string $id) {
        $delete = self::$pdo->prepare('DELETE FROM contacts WHERE rowid = :id');
        $delete->execute([':id' => $id]);
    }
}
