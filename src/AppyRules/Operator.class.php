<?php

/*
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 */

namespace AppyRules;

class Operator extends Stack {
    
    public function Equal($value) {
        
        $this->stack[] = new Logical('=');
        
        $this->stack->get($value);
        
    }

    public function LogicalAnd($a, $b) {
        
        $this->stack[] = new Logical('and');
        
    }

    public function LogicalOr($a = true, $b = true) {
        
        $this->stack[] = new Logical('or');

    }
    
    public function LogicalXor($a = true, $b = true) {
        
        $this->stack[] = new Logical('xor');

    }
    
    public function LogicalNand($a = true, $b = true) {

        $this->stack[] = new Logical('nand');

    }
    
    public function LogicalNor($a = true, $b = true) {
        
        $this->stack[] = new Logical('nor');
        
    }

    public function Lesser($value) {
        
        $this->stack[] = new Logical('<');
        
        $this->stack->get($value);
        
    }
    
    public function EqualOrLesser($value) {
        
        $this->stack[] = new Logical('<=');
        
        $this->stack->get($value);
        
    }
    
    public function Greater($value) {
        
        $this->stack[] = new Logical('>');
        
        $this->stack->get($value);
        
    }
    
    public function EqualOrGreater($value) {

        $this->stack[] = new Logical('=>');
        
        $this->stack->get($value);
        
    }
    
    public function NotEqual($value) {

        $this->stack[] = new Logical('!=');
        
        $this->stack->get($value);
        
    }

}