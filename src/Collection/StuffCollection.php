<?php
declare(strict_types=1);

namespace NoArrays\Collection;

use IteratorIterator;

class StuffCollection extends IteratorIterator
{
    public function __construct(Stuff ...$collection)
    {
        parent::__construct(
            (static function () use ($collection): \Generator {
                yield from $collection;
            })()
        );
    }

    public function current() : Stuff
    {
        return parent::current();
    }
}
