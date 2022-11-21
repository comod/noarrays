<?php
declare(strict_types=1);

namespace NoArrays\Collection;

include_once '../../vendor/autoload.php';

$stuffCollection = new StuffCollection(
    new Stuff('foo'),
    new Stuff('bar'),
);

foreach ($stuffCollection as $stuff) {
    echo $stuff->getName();
}
