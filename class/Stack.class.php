<?php

namespace AppyRules;

class Stack {
    private $stack;

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
}