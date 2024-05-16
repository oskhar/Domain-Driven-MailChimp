<?php

namespace App\Http\Controllers;

use App\Domain\Shared\Exceptions\BadRequestException;
use App\Domain\Subscriber\Models\Subscriber;
use App\Domain\Subscriber\ViewModels\GetSubscriberViewModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GetSubscriberController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        if (!$request->current_page) {
            throw BadRequestException::because('current_page harus diisi');
        }

        $per_page = $request->per_page ?? 10;

        return response()->json([
            'success' => [
                'data' => Subscriber::all()
            ]
        ]);
    }
}
