<?php
    function autoload($class){
        require_once __DIR__.'/TemperatureConverter.php';
    }

    spl_autoload_register('autoload');
?>