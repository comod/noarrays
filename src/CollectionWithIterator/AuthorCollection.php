<?php declare(strict_types = 1);
namespace NoArrays\CollectionWithIterator;

use Iterator;

class AuthorCollection
    extends \ArrayObject
//    implements \Countable, \IteratorAggregate
{
//    private array $items = [];
//
//    public function append($author): void {
//        $this->items[] = $author;
//    }
//
//    public function getItems(): array {
//        return $this->items;
//    }
//
//    public function count(): int {
//        return \count($this->items);
//    }

    public function getIterator(): AuthorCollectionIterator {
        return new AuthorCollectionIterator($this);
    }
}
