<?php

declare(strict_types=1);

namespace NoArrays\GenericCollection;

include_once '../../vendor/autoload.php';

$customers = new CustomerCollection();

$customers->append(new Customer('foo'));
$customers->append(new Customer('bar'));

foreach ($customers as $customer) {
//    $customer->get
}
