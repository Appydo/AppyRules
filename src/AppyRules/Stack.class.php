<?php

/*
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 */

namespace AppyRules;

class Stack extends \AppyRules\Operator {
    
    private $stack;
    private $value;

    function __construct() {
        $this->stack = array();
    }

    public function get($value) {
        
        $atom = new Atom();
        $atom->setValue($value);
        
        $this->stack[] = $atom;

    }
   
    public function getCurrentPosition() {
        return count($this->stack);
    }

}