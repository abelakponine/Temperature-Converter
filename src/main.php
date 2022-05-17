<?php
    require_once '../vendor/autoload.php';
    use Vendor\TemperatureConverter\Modules\TemperatureConverter;
    
    $temperature = new TemperatureConverter();
    echo $temperature->from_celsius_to_fahrenheit(10)->get_value()."\r\n";
    echo $temperature->from_fahrenheit_to_celsius(50)->get_value();

?>