<?php

class Multiplier implements OperatorInterface {
    
    function run($number, $result) {
        if ($result < 1) $result = 1;
        return $result * $number;
    }
}