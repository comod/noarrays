<?php
declare(strict_types=1);

namespace NoArrays\GenericCollection;

use Pogulailo\Collection\GenericCollection;
class CustomerCollection extends GenericCollection
{
    public function __construct(...$values)
    {
        parent::__construct(Customer::class, ...$values);
    }
}
