<?php

declare(strict_types=1);

namespace NoArrays\GenericCollection;

class Customer
{

    public function __construct(private readonly string $test)
    {
    }

    public function getTest(): string
    {
        return $this->test;
    }

}
