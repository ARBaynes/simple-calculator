<?php

namespace App\Service;

class Calculate
{

    public function plus($operator_1, $operator_2)
    {
        return $operator_1 + $operator_2;
    }

    public function minus($operator_1, $operator_2)
    {
        return $operator_1 - $operator_2;
    }


    public function multiply($operator_1, $operator_2)
    {
        return $operator_1 * $operator_2;
    }


    public function divide($operator_1, $operator_2)
    {
        return $operator_1 / $operator_2;
    }
}
