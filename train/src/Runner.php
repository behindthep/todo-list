<?php

// composer dump-autoload ("files": [)
namespace Train\Php\Runner;

function run()
{
    $collection = collect(['taylor', 'abigail', 'ivan'])->map(
        function ($name) {
            return strtoupper($name);
        }
    );

    return $collection;
}
