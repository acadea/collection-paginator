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

    public function test_paginated_array_keys_are_reset_on_page2_and_onward()
    {
        $collection = collect([1,2,3,4,5,6,7,8]);

        $pageSize = 4;

        /** @var $request \Illuminate\Http\Request */
        $request = $this->app['request'];

        // supply page query param to request
        $request->merge([
            'page' => '2',
        ]);

        $paginated = CollectionPaginator::paginate($collection, $pageSize);

        $this->assertSame([5, 6, 7, 8], array_values($paginated->all()));
        $this->assertSame([0, 1, 2, 3], array_keys($paginated->all()));
    }
}
