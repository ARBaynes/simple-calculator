<?php

namespace App\Service;

class Calculate
{
    /**
     * @param double $operand_1
     * @param double $operand_2
     * @param string $operator
     * @return double
     */
    public static function compute($operand_1, $operand_2, $operator)
    {
        switch ($operator) {
            case '+':
                return $operand_1 + $operand_2;
            case '-':
                return $operand_1 - $operand_2;
            case '/':
                return $operand_1 / $operand_2;
            case '*':
                return $operand_1 * $operand_2;
        }
    }
}
