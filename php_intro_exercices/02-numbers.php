<?php

function getSum(int $val1, int $val2): int
{
    return $val1 + $val2;
}

function getSub(int $val1, int $val2): int
{
    return $val1 - $val2;
}

function getMulti(float $val1, float $val2): float
{
    return round($val1 * $val2, 2);
}

function getDiv(int $val1, int $val2): float{
if ($val2 === 0)
{
    return 0;
}
else
{
    return round($val1 / $val2, 2);
} 
}



echo getSum(5, 3) . PHP_EOL;
echo getSub(5, 3) . PHP_EOL;
echo getMulti(8.2589, 3.256) . PHP_EOL;
echo getDiv(7, 6) . PHP_EOL;