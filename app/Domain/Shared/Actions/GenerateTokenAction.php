<?php

namespace App\Domain\Shared\Actions;

use App\Domain\Shared\Data\UserData;
use App\Domain\Shared\Exceptions\BadRequestException;
use App\Domain\Shared\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class GenerateTokenAction
{
    protected const EXPIRES_AT = null;
    public static function execute(UserData $data): JsonResponse
    {
        $user = User::where('email', $data->email)->first();

        if (!$user || !Hash::check($data->password, $user->password)) {
            throw BadRequestException::because(
                'email atau password tidak sesuai!'
            );
        }

        return UserData::responseWithToken(
            $user->createToken(
                'personal_access_tokens',
                [],
                self::EXPIRES_AT
            )->plainTextToken,
            self::EXPIRES_AT
        );
    }
}
