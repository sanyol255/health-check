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

    public static function ruffierResult($pulse)
    {
        $indexRuffier =  (4 * ($pulse[0] + $pulse[1] + $pulse[2]) - 200) / 10;

        if($indexRuffier < 3){
            $result = 'Хороша фізична працездатність';
        }
        else if($indexRuffier <= 6){
            $result = 'Середня фізична працездатність';
        }
        else if($indexRuffier <= 9){
            $result = 'Задовільна фізична працездатність';
        }
        else if($indexRuffier <= 14){
            $result = 'Погана фізична працездатність - середня серцева недостатність';
        }
        else{
            $result = 'Дуже погана фізична працездатність- сильна серцева недостатність';
        }
        return [$indexRuffier, $result];
    }

    public static function hypoxiaCheck($shtange, $genchi)
    {
        $shtangeResult = ($shtange < 30) ? 'Поганий' : ($shtange < 40 ? 'Середній' : (($shtange < 60) ? 'Хороший' : 'Відмінний'));
        $genchiResult = ($genchi < 25) ? 'Поганий' : ($genchi < 30 ? 'Середній' : (($genchi < 40) ? 'Хороший' : 'Відмінний'));
        
        return [$shtangeResult, $genchiResult];
    }   
}