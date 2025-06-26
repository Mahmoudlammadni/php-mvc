<?php
 require_once "../controller/GrettingController.php";
$controller = new GreetingController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ok'])) {
    $name = $_POST['name'] ?? 'Guest';
    $controller->greet($name);
} else {
    $controller->showForm();
}
    