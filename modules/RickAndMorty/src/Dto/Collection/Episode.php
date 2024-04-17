<?php

namespace Modules\RickAndMorty\src\Dto\Collection;

use NickBeen\RickAndMortyPhpApi\Dto\Collection\Info;

class Episode
{
    public Info $info;

    /** @var Episode[] */
    public array $results;
}
