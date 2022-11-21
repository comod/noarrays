<?php
declare(strict_types=1);

namespace NoArrays\Collection;

class Stuff
{
    public function __construct(private readonly string $name)
    {
    }

    public function getName() : string
    {
        return $this->name;
    }
}
