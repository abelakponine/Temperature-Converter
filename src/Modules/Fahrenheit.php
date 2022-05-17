<?php

    namespace Vendor\TemperatureConverter\Modules;

    class Fahrenheit {

        public $name;
        public $value;
        
        function __construct($int) {
            $this->name = "Fahrenheit Class";
            $this->value = $int;
        }

        function get_value(){
            return $this->value;
        }

    }
?>