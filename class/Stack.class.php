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
    
    private $type;
    private $value;
    private $description;

    function __construct() {
        $this->stack = array();
    }

    public function add($atom) {
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
    
    public function setDescription($description) {
        $this->description = $description;
    }
    
    public function setValue($value) {
        $this->description = $description;
    }
    
    public function setType($type) {
        $this->type = $type;
    }
}