<?php

namespace App\Http\Controllers\Auth;

use App\Domain\Shared\Actions\GenerateTokenAction;
use App\Domain\Shared\Data\UserData;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GenerateTokenController extends Controller
{
    public function __invoke(UserData $data): JsonResponse
    {
        return GenerateTokenAction::execute($data);
    }
}
