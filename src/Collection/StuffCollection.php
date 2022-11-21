<?php
declare(strict_types=1);

namespace NoArrays\Collection;

use IteratorIterator;

class StuffCollection extends IteratorIterator
{
    public function __construct(Stuff ...$items)
    {
        parent::__construct(
            (static function () use ($items): \Generator {
                yield from $items;
            })()
        );
    }

    public function current() : Stuff
    {
        return parent::current();
    }
}
