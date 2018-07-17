<?php

namespace Interpreter\Expressions;

use Interpreter\Abstracts\Expression;
use Interpreter\Context\InterpreterContext;

// какое-то строковое выражение
class LiteralExpression extends Expression
{
    // у выражения есть какое-то значение
    private $value;

    // при создании объекта этого выражения мы должны это значение установить
    function __construct($value)
    {
        $this->value = $value;
    }

    // эта функция использует метод replace у контекста (место где хранятся данные)
    function interpret(InterpreterContext $context)
    {
        $context->replace($this, $this->value);
    }
}