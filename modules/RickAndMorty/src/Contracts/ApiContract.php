<?php

namespace Modules\RickAndMorty\src\Contracts;

interface ApiContract
{
    /**
     * Get all available API's resources.
     *
     * @return ?object
     */
    public function get(): ?object;

    public function apiUrl(): string;
}
