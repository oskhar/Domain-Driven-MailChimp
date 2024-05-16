<?php

namespace App\Http\Controllers;

use App\Domain\Subscriber\Actions\UpsertSubscriberAction;
use App\Domain\Subscriber\Data\SubscriberData;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CreateSubscriberController extends Controller
{
    public function __invoke(
        SubscriberData $data,
        Request $request
    ): JsonResponse {
        return UpsertSubscriberAction::execute($data, $request->user());
    }
}
