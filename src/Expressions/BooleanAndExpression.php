<?php

namespace Interpreter\Expressions;

use Interpreter\Abstracts\OperatorExpression;
use Interpreter\Context\InterpreterContext;

class BooleanAndExpression extends OperatorExpression
{
    protected function doInterpret(InterpreterContext $context, $result_l, $result_r) {
        $context->replace($this, $result_l && $result_r);
    }
}