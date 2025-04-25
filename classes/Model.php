<?php

class Model {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=mvc_example', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getItems() {
        $query = $this->db->query('SELECT * FROM items;');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addItem($name) {
        $stmt = $this->db->prepare('INSERT INTO items (name) VALUES (:name)');
        $stmt->bindParam(':name', $name);
        $stmt->execute();
    }

    public function getItemById($id) {
        $stmt = $this->db->prepare('SELECT * FROM items WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteItemById($id) {
        $sql = "DELETE FROM items WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
