<?php

use AppyRules;

$rule = new EngineRule();

$rule->LogicalAnd(
    $rule->LogicalOr(
        $rule->get('price')->equalTo('value2'),
        $rule->get('price')->equalTo('value2')
    ),
    $rule->LogicalAnd(
        $rule->get('price')->equalTo('value2'),
        $rule->get('price')->equalTo('value2')
    )
);

$result = $rule->execute(
        array(
            'price'  => 100,
            'weight' => 120,
            'value1' => 120,
            'value2' => 200,
        )
    );
