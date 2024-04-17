<?php

namespace Modules\RickAndMorty\src\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\RickAndMorty\src\Api\Character;
use Modules\RickAndMorty\src\Enums\Gender;
use Modules\RickAndMorty\src\Enums\Status;

class RickAndMortyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Initialize Character API
        $character = new Character();

        // Getting the characters
        $resp = $character->get();

        // Retrieving specific page
        $resp = $character->page(4)->get();

        // Querying with filters
        $resp = $character->withName('Rick')
            ->withStatus(Status::Alive)
            ->withGender(Gender::Male)
            ->get();

        return response()->json($resp);


    }
}
