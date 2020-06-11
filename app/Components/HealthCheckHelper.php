<?php

namespace App\Components;

class HealthCheckHelper
{
    public static function bmiResult($weight, $height)
    {
        $bmi = $weight / (($height / 100)  ** 2);
        $bmi = round($bmi, 1);

        if($bmi < 18.5){
            $result = 'нижче норми - недостатня вага';
        }
        else if($bmi > 25){
            $result = 'вище норми - надмірна вага';
        }
        else{
            $result = 'в нормі';
        }

        return [$bmi, $result];
    }
}