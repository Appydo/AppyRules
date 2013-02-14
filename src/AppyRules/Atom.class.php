<?php

/*
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 */

namespace AppyRules;

class Atom {
    
    private $type;
    private $value;

    function __construct() {
        $this->type = 0; // 0 = static, 1 = var, 2 = operator
    }

    public function getType() {
        if ($this->isStatic()) {
            return 'static';
        } elseif ($this->isVar()) {
            return 'var';
        } elseif ($this->isOperator()) {
            return 'operator';
        }
    }
    
    public function isStatic() {
        return ($this->operator==0);
    }
    
    public function isVar() {
        return ($this->operator==1);
    }
    
    public function isOperator() {
        return ($this->operator==2);
    }
    
    public function getValue() {
        return $this->value;
    }
    
    public function setType($type) {
        if ($type=='operator') {
            return $this->type = 2;
        } elseif ($type=='var') {
            return $this->type = 1;
        } else {
            return $this->type = 0;
        }
    }
    
    public function setValue($value) {
        $this->value = $value;
    }
    
    
}