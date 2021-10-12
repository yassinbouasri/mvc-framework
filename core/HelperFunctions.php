<?php
namespace app\core;

class HelperFunctions{

    public static function dd($value){
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
        die();
    }

}
