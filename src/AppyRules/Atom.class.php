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

    public function isAtom() {
        return true;
    }
    
    public function isLogical() {
        return false;
    }
    
    public function getValue() {
        return $this->value;
    }
    
    public function setValue($value) {
        $this->value = $value;
    }
    
    
}