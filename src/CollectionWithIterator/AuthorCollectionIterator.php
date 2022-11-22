<?php declare(strict_types = 1);
namespace NoArrays\CollectionWithIterator;

class AuthorCollectionIterator implements \Iterator {
    /** @var Author[] */
    private $authors;

    /** @var int */
    private $position = 0;

    public function __construct(AuthorCollection $authors) {
        $this->authors = $authors->getAuthors();
    }

    public function rewind(): void {
        $this->position = 0;
    }

    public function valid(): bool {
        return $this->position < \count($this->authors);
    }

    public function key(): int {
        return $this->position;
    }

    public function current(): Author {
        return $this->authors[$this->position];
    }

    public function next(): void {
        $this->position++;
    }
}
