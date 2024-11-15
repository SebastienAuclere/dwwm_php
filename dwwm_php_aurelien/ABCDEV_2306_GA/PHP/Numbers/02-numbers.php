<?php
    function getSum(int $number1, int $number2): int
    {
        return $number1 + $number2;
    }

    function getSub(int $number3, int $number4): int
    {
        return $number3 - $number4;
    }

    function getMulti(float $number5, float $number6): float
    {
        return round($number5 * $number6, 2);
    }

    function getDiv(int $number7, int $number8): float
    {
        if($number8 === 0) {
            return 0;
        }
        return round($number7 / $number8, 2);
    }

    echo getSum(5,3);
    echo PHP_EOL;
    echo getSub(3,5);
    echo PHP_EOL;
    echo getSub(5,3);
    echo PHP_EOL;
    echo getMulti(5.6,3);
    echo PHP_EOL;
    echo getMulti(5.6,-3.7);
    echo PHP_EOL;
    echo getDiv(20,3);
    echo PHP_EOL;
    echo getDiv(20,0);