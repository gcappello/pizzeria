<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class GetPizzasController extends Controller
{
    public function __invoke()
    {
        return new JsonResponse(
            [
                'margherita',
                'marinara',
                'capricciola',
                'quattro formaggi',
                '007',
                ],
            200
        );
    }
}
