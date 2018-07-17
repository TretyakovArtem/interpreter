<?php

namespace Interpreter\Context;

use Interpreter\Abstracts\Expression;

class InterpreterContext
{
    private $expressionStore = [];

    // здесь заменяется значение в хранилище значением выражения
    function replace(Expression $exp, $value)
    {
        $this->expressionStore[$exp->getKey()] = $value;
    }

    function lookup(Expression $exp)
    {
        return $this->expressionStore[$exp->getKey()];
    }
}
