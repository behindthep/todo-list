<?php

// composer run-script phpcs ("scripts": {)
// ./vendor/bin/phpcs --standard=PSR12 src/
declare(strict_types=1);

namespace Train\Main;

require_once __DIR__ . '/../vendor/autoload.php';

use Train\Php\Runner;

print_r(Runner\run());
