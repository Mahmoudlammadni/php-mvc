<?php
require_once "../model/AgeCalculator.php";
class AgeController{
    public function Age($year){
        $age = new AgeCalculator();
        $mes= $age->getYears($year);
        include "../view/index.php";
    }
    public function showForm(){
        include "../view/form.php";
    }

}