<?php

namespace Interpreter\Abstracts;

use Interpreter\Context\InterpreterContext;

// тупо выражение. Может быть всем чем угодно. На то оно и абстрактное
abstract class Expression
{
    private static $keycount = 0;
    private $key;

    abstract function interpret(InterpreterContext $context);

    function getKey()
    {
        if(!isset($this->key)) {
            self::$keycount++;
            $this->key = self::$keycount;
        }
        return $this->key;
    }
}