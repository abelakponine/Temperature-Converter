<?php

    namespace Vendor\TemperatureConverter\Modules;

    class TemperatureConverter {

        public $name;

        function __construct(){
            $this->set_name("Temperature Converter!");
        }

        public function set_name($name){
            $this->name = $name;
        }
        public function get_name(){
            return $this->name;
        }
        function from_celsius_to_fahrenheit($int): Fahrenheit {
            $result = ($int * 9/5) + (32);
            return new Fahrenheit($result);
        }
        function from_fahrenheit_to_Celsius($int): Celsius {
            $result = ($int - 32) * (5/9);
            return new Celsius($result);
        }
    }
?>