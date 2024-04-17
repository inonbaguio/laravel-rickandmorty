<?php

namespace Modules\RickAndMorty\src\Dto\Character;

class Location
{
    /** Name to the character's last known location */
    public readonly string $name;

    /** Url to the character's last known location endpoint */
    public readonly string $url;
}
