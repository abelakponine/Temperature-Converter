<?php

    namespace Vendor\TemperatureConverter\Modules;

    class Celsius {

        public $name;
        public $value;
        
        function __construct($int) {
            $this->name = "Celsius Class";
            $this->value = $int;
        }

        function get_value(){
            return $this->value;
        }

    }
?>