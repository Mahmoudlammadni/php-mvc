<?php

class AgeCalculator  {
     public function getYears($year){
        $currentYear = (int)date('Y');
        $age = $currentYear-$year;
        return "your age is ".$age ; 
    }
}