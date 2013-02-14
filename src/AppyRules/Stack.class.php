<?php

/*
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 */

namespace AppyRules;

class Stack {
    
    private $stack;

    function __construct() {
        $this->stack = array();
    }

    public function addOperator($value) {
        
        $atom = new Atom();
        $atom->setType('operator');
        $atom->setValue($value);
        
        return ($this->stack[] = $atom);

    }
    
    public function addVar($value) {
        
        $atom = new Atom();
        $atom->setType('var');
        $atom->setValue($value);
        
        return ($this->stack[] = $atom);

    }
    
    public function addStatic($value) {
        
        $atom = new Atom();
        $atom->setType('static');
        $atom->setValue($value);
        
        return ($this->stack[] = $atom);

    }

    public function get($position = 0) {

        if (!empty($this->stack)) {
            return $this->stack[$position];
        } else {
            return false;
        }

    }
    
        
    public function getCurrentPosition() {
        return count($this->stack);
    }

}