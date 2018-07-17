<?php

require_once 'vendor/autoload.php';

use Interpreter\Context\InterpreterContext;
use Interpreter\Expressions\BooleanOrExpression;
use Interpreter\Expressions\EqualsExpression;
use Interpreter\Expressions\LiteralExpression;
use Interpreter\Expressions\VariableExpression;


// инициализируется контекст (store)
$context = new InterpreterContext();

// инициализируется переменная (в store появляется пустое значение с ключом input)
$input   = new VariableExpression('input');

// вызывается конструктор у OperatorExpression
$statement = new BooleanOrExpression(
    // создается два выражения
    new EqualsExpression($input, new LiteralExpression('Четыре')),
    new EqualsExpression($input, new LiteralExpression('4'))
);


foreach (["Четыре", "4", "52"] as $val) {
    // в переменную с ключом input устанавливаются значения
    $input->setValue($val);
    // это значение печатается
    print "$val:\n";

    $statement->interpret($context);

    // проверяем что хранится в store, а хранится там булево значение
    if ($context->lookup($statement)) {
        print "Соответствует \n\n";
    } else {
        print "не соответствует \n\n";
    }
}