<?php

namespace Acadea\CollectionPaginator\Tests;

use Acadea\CollectionPaginator\CollectionPaginator;

class PaginationTest extends TestCase
{
    public function test_collection_is_paginated()
    {
        $collection = collect([1,2,3,4,5,6,7,8]);

        $pageSize = 4;

        $paginated = CollectionPaginator::paginate($collection, $pageSize);

        $this->assertEquals($collection->count(), $paginated->total());

        $this->assertEquals(ceil($collection->count() / $pageSize), $paginated->lastPage());

        $this->assertEquals($pageSize, $paginated->perPage());
    }
}
