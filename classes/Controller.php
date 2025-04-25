<?php

class Controller {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function showItems() {
        $items = $this->model->getItems();
        include 'views/items_list.php';
    }

    public function addItemForm() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['itemName'])) {
            $this->model->addItem($_POST['itemName']);
            header('Location: /');
            exit;
        }
        include 'views/add_item.php';
    }

    public function showItemDetail() {
        if (!isset($_GET['id'])) {
            echo "Item ID not specified";
            return;
        }
        $item = $this->model->getItemById($_GET['id']);
        include 'views/item_detail.php';
    }

    public function showAbout() {
        include 'views/about.php';
    }

    public function deleteItem() {
        if (!isset($_GET['id'])) {
            echo "Item ID not specified";
            return;
        }

        // Call the model to delete the item
        $this->model->deleteItemById($_GET['id']);

        // Redirect back to the items list after deletion
        header('Location: /');
        exit;
    }
}
