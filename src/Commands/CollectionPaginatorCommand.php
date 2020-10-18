<?php

namespace Acadea\CollectionPaginator\Commands;

use Illuminate\Console\Command;

class CollectionPaginatorCommand extends Command
{
    public $signature = 'collection-paginator';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
