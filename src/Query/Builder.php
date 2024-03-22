<?php

namespace Rennokki\QueryCache\Query;

use Illuminate\Database\Query\Builder as BaseBuilder;
use Rennokki\QueryCache\Contracts\QueryCacheModuleInterface;
use Rennokki\QueryCache\Traits\QueryCacheModule;

class Builder extends BaseBuilder implements QueryCacheModuleInterface
{
    use QueryCacheModule;

}
