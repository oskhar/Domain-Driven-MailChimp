<?php

namespace App\Domain\Subscriber\Http\Controllers;

use App\Domain\Subscriber\Actions\UpsertSubscriberAction;
use App\Domain\Subscriber\Data\SubscriberData;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(SubscriberData $data, Request $request): JsonResponse
    {
        UpsertSubscriberAction::execute($data, $request->user());

        return response()->json([
            'success' => [
                'message' => 'Data subscriber berhasil ditambahkan'
            ]
        ])->setStatusCode(201);
    }
}
