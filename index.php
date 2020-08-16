<?php

require 'vendor/autoload.php';

use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

$expressionLanguage = new ExpressionLanguage();

if ($argc > 1) {
    $arithmeticOperation = $argv[1];
} else {
    echo "Please insert your arithmetic operation".PHP_EOL;
}

echo ($expressionLanguage->evaluate($arithmeticOperation).PHP_EOL);