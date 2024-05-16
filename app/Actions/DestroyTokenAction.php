<?php

namespace App\Actions;

use App\Domain\Shared\Models\User;
use Illuminate\Http\JsonResponse;

class DestroyTokenAction
{
    public static function execute(User $user): JsonResponse
    {
        $user->currentAccessToken()->delete();

        return response()->json([
            'success' => [
                'message' => 'Logout berhasil!'
            ]
        ])->setStatusCode(200);
    }
}
