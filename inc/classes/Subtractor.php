<?php

class Subtractor implements OperatorInterface {
    
    function run($number, $result) {
        if ($result == 0) {
            return $number;
        } else {
            return $result - $number;
        }
    }
}