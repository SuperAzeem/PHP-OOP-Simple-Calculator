<?php

class Calculator {

    protected $operation;

    protected $result = 0;

    function setOperation(OperatorInterface $operation) {
        $this->operation = $operation;
    }

    function calculate() {
        foreach(func_get_args() as $number) {
            $this->result = $this->operation->run($number, $this->result);
        }
    }

    function getResult() {
        return $this->result;
    }

    function clearResult() {
        $this->result = 0;
    }


}