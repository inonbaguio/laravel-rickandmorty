<?php

namespace Modules\RickAndMorty\src\Enums;

enum Status: string
{
    case Alive = 'Alive';
    case Dead = 'Dead';
    case Unknown = 'Unknown';
}
