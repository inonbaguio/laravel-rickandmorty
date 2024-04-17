<?php

namespace Modules\RickAndMorty\src\Enums;

enum Gender: string
{
    case Female = 'Female';
    case Genderless = 'Genderless';
    case Male = 'Male';
    case Unknown = 'Unknown';
}
