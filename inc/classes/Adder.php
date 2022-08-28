<?php

class Adder implements OperatorInterface {
    
    function run($number, $result) {
        return $result + $number;
    }
}