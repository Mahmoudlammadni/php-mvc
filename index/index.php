<?php
 require_once "../controller/GreetingController.php";
 require_once "../controller/AgeController.php";
$controller = new GreetingController();
$con_age = new AgeController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ok'])) {
    if( $_POST['name']){
        $name = $_POST['name'] ?? 'Guest';
        $controller->greet($name);
    }
    else if ($_POST["age"]){
        $age=$_POST["age"];
        $con_age->Age($age);
    }
    else{
        $con_age->showForm();
    }
    
} else {
    $controller->showForm();
}
    