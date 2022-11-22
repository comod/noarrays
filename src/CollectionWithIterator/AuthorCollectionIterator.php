<?php declare(strict_types = 1);
namespace NoArrays\CollectionWithIterator;

use IteratorIterator;

class AuthorCollectionIterator extends IteratorIterator
{
    public function __construct(AuthorCollection $collection)
    {
        parent::__construct(
            (static function () use ($collection): \Generator {
                yield from $collection->getArrayCopy();
            })()
        );
    }

    public function current(): Author
    {
        return parent::current();
    }
}
