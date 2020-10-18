<?php

namespace Acadea\CollectionPaginator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Acadea\CollectionPaginator\CollectionPaginator
 */
class CollectionPaginatorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'collection-paginator';
    }
}
