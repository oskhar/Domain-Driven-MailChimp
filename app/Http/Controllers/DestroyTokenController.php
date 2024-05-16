<?php

namespace App\Http\Controllers;

use App\Actions\DestroyTokenAction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DestroyTokenController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        return DestroyTokenAction::execute($request->user());
    }
}
