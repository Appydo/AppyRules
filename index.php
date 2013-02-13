<?php
$vars['price']  = 100;
$vars['weight'] = 150;

$pile = array(

    array('var','price', 'description'),
    array('static',180),
    array('operator','>'),

    array('var','weight', 'description'),
    array('static',180),
    array('operator','>'),

    array('operator','or'),

    array('var','price', 'description'),
    array('static',120),
    array('operator','>'),

    array('var','weight', 'description'),
    array('static',180),
    array('operator','>'),

    array('operator','or'),

    array('operator','and'),
);

$buffer = array();
$pointer = 0;
foreach($pile as $atom) {
    if ($atom[0]=='operator') {

        $pointer = $pointer - 2;
        $a = $buffer[$pointer];
        $b = $buffer[$pointer+1];
        if ($atom[1]=='or') {
            $buffer[$pointer] = ($a or $b);
        } elseif ($atom[1]=='and') {
            $buffer[$pointer] = ($a and $b);
        } elseif ($atom[1]=='>') {
            $buffer[$pointer] = ($a > $b);
        } elseif ($atom[1]=='<') {
            $buffer[$pointer] = ($a < $b);
        } elseif ($atom[1]=='<=') {
            $buffer[$pointer] = ($a <= $b);
        } elseif ($atom[1]=='>=') {
            $buffer[$pointer] = ($a >= $b);
        } elseif ($atom[1]=='!=') {
            $buffer[$pointer] = ($a != $b);
        } else {
            $buffer[$pointer] = ($a == $b);
        }
        echo var_dump($buffer);

    } else {
        if ($atom[0]=='var') {
            $buffer[$pointer] = $vars[$atom[1]];
        } else {
            $buffer[$pointer] = $atom[1];
        }
    }
    $pointer++;
}
echo "fin : {$buffer[$pointer-1]} \n";
var_dump($pointer);
var_dump($buffer);
