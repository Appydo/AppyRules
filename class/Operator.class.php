<?php

namespace AppyRules;

class Operator {

    public function LogicalAnd($a, $b) {
        return ($a and $b);
    }

    public function LogicalOr($a, $b) {
        return ($a or $b);
    }
    
    public function LogicalXor($a, $b) {
        return ($a ^ $b);
    }
    
    public function LogicalNand($a, $b) {
        return !($a and $b);
    }
    
    public function LogicalNor($a, $b) {
        return !($a or $b);
    }

    public function Equal($a, $b) {
        return $a == $b;
    }

    public function Lesser($a, $b) {
        return ($a < $b);
    }
    
    public function EqualOrLesser($a, $b) {
        return ($a <= $b);
    }
    
    public function Greater($a, $b) {
        return ($a > $b);
    }
    
    public function EqualOrGreater($a, $b) {
        return ($a >= $b);
    }
    
    public function NotEqual($a, $b) {
        return ($a != $b);
    }

}