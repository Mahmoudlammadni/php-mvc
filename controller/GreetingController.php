
<?php
require_once "../model/Greeting.php";

class GreetingController {
    public function greet($name){
        $greet = new Greeting();
        $message = $greet->getMessage($name);
        include "../view/index.php";
    }

    public function showForm() {
        include "../view/form.php";
    }
}
