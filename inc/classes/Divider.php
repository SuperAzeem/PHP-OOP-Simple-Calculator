<?php

class Divider implements OperatorInterface {
    
    function run($number, $result) {
        if ($result == 0) return $number;
        return $result / $number;
    }
}