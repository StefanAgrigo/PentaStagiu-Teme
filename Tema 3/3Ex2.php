<?php

namespace Calculator;

class Calculator
{
    public static function plus($x, $y)
    {
        return $x + $y;
    }

    public static function minus($x, $y)
    {
        return $x - $y;
    }

    public static function multiple($x, $y)
    {
        return $x * $y;
    }

    public static function divide($x, $y)
    {
        if ($x != 0)
            return $x / $y;
        else
            return " cannot divide";
    }
}
?>




