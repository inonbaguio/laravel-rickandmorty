<?php

namespace Modules\RickAndMorty\src\Dto\Character;


class Origin
{
    /** Name to the character's origin location */
    public readonly string $name;

    /** Url to the character's origin location endpoint */
    public readonly string $url;
}
