<?php

declare(strict_types=1);

require_once __DIR__ . '/src/Formatters/Pretty.php';

namespace Todo\List\valute;

use function Todo\List\Formatters\Pretty\render as simpleRender;

function sum($a, $b)
{
    return $a + $b;
}

function generate($data)
{
    return simpleRender($data);
}
