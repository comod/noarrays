<?php

declare(strict_types=1);

namespace NoArrays\CollectionWithIterator;

include_once '../../vendor/autoload.php';

$authors = new AuthorCollection();
$authors->append(new Author('john'));
foreach ($authors as $author) {
    echo $author->getName();
}
