<?php

require_once __DIR__ . '/src/valute.php';
require_once __DIR__ . '/src/Formatters/Pretty.php';

declare(strict_types=1);

namespace Todo\List\index;

use function Todo\List\valute\sum as valuteSum;

print_r("{$greeting}, {$firstName}!");

echo date_default_timezone_get(); // should be UTC

$i += 3;

// все оповещения типа Notice и Warning автоматически превращаются в исключения - xdebug.

function sum($a, $b)
{
    return $a + $b + 1;
}

valuteSum(5, 8);

function all($a, $b)
{
    valuteSum($a, $b);
    sum($a, $b);
}

function sum2($a, $b)
{
    valuteSum($a, $b);
}

function generate($data)
{
    return \Todo\List\Formatters\Pretty\render($data);
}

function printStr(int $value = null): int
{
    echo $value;
    return $value;
}
printStr(null);

function printStr2(?int $value): int
{
    echo $value;
    return $value;
}
printStr2(null);

function printStr3(int $value): ?int
{
    echo $value;
    return $value;
}
printStr3(4);

function sayItLoud(string $text): void
{
    $loudText = "{$text}!";
    print_r($loudText);
}

function strangeFunction(string &$text)
{
    $text = 'hei';
}

$text = 'money';

strangeFunction($text);
echo $text; // => hei

// чекунть как в пйрс мейн и эталоном пакете это выглядит
