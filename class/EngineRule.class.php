<?php

namespace AppyRules;

class EngineRule {

    private $pointer;
    private $buffer;
    
    function __construct() {
        $this->init();
    }
    
    private function init() {
        $this->buffer = array();
        $this->pointer = 0;
    }

    public function execute($stack) {
        
        $buffer  = $this->buffer;
        $pointer = $this->pointer;
        
        foreach ($stack as $atom) {
            if ($atom[0] == 'operator') {

                $pointer = $pointer - 2;
                $a = $buffer[$pointer];
                $b = $buffer[$pointer + 1];
                if ($atom[1] == 'or') {
                    $buffer[$pointer] = ($a or $b);
                } elseif ($atom[1] == 'and') {
                    $buffer[$pointer] = ($a and $b);
                } elseif ($atom[1] == '>') {
                    $buffer[$pointer] = ($a > $b);
                } elseif ($atom[1] == '<') {
                    $buffer[$pointer] = ($a < $b);
                } elseif ($atom[1] == '<=') {
                    $buffer[$pointer] = ($a <= $b);
                } elseif ($atom[1] == '>=') {
                    $buffer[$pointer] = ($a >= $b);
                } elseif ($atom[1] == '!=') {
                    $buffer[$pointer] = ($a != $b);
                } else {
                    $buffer[$pointer] = ($a == $b);
                }

            } else {
                if ($atom[0] == 'var') {
                    $buffer[$pointer] = $vars[$atom[1]];
                } else {
                    $buffer[$pointer] = $atom[1];
                }
            }
            $pointer++;
        }
        
        return $buffer[$pointer-1];

    }

}