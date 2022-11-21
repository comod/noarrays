<?php
declare(strict_types=1);

namespace NoArrays\Map;

include_once '../../vendor/autoload.php';

$map = new ExampleCollection(['test' => 'hello']);
echo $map->offsetGet('test'); // hello
