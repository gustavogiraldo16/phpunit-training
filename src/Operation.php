<?php declare(strict_types=1);

namespace App;

class Operation
{
    /**
     *  Sum two values
     *
     * @param int $num1
     * @param int $num2
     *
     * @throws InvalidArgumentException
     * @return int
     */
    public function sum($num1, $num2): int
    {
        // implementar InvalidArgumentException
        // if (is_null($num1) || is_null($num2) || !is_numeric($num1) || !is_numeric($num2)) {
        //     throw new \InvalidArgumentException('Not numeric values are not allowed');
        // }

        return $num1 + $num2;
    }

    public function division(int $dividend, int $divisor): float
    {
        return $dividend / $divisor;
    }
}