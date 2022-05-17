<?php

    declare(strict_types=1);
    require_once '../vendor/autoload.php';
    
    use PHPUnit\Framework\TestCase;
    use Vendor\TemperatureConverter\Modules\TemperatureConverter;

    final class TemperatureConverterTest extends TestCase {
        
        // test valid Fahrenheit
        public function testValidFahrenheit(){

            $expected = 50;
            $temperature = new TemperatureConverter();
            $this->assertEquals($expected, $temperature->from_celsius_to_fahrenheit(10)->get_value(),
                "actual value is not equals to expected"
            );
            
        }
        // test invalid Fahrenheit
        public function testInvalidFahrenheit(){

            $expected = 50;
            $temperature = new TemperatureConverter();
            $this->assertEquals($expected, $temperature->from_celsius_to_fahrenheit(20)->get_value(),
                "actual value is not equals to expected"
            );
            
        }
        // test valid celsius
        public function testValidCelsius(){

            $expected = 10;
            $temperature = new TemperatureConverter();
            $this->assertEquals($expected, $temperature->from_fahrenheit_to_celsius(50)->get_value(),
                "actual value is not equals to expected"
            );
            
        }
        // test in valid celsius
        public function testInvalidCelsius(){

            $expected = 10;
            $temperature = new TemperatureConverter();
            $this->assertEquals($expected, $temperature->from_fahrenheit_to_celsius(20)->get_value(),
                "actual value is not equals to expected"
            );
        }
    }
?>