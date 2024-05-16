<?php

namespace App\Domain\Subscriber\Actions;

use App\Domain\Shared\Models\User;
use App\Domain\Subscriber\Data\SubscriberData;
use App\Domain\Subscriber\Models\Subscriber;
use Illuminate\Http\JsonResponse;

class UpsertSubscriberAction
{
    public static function execute(SubscriberData $data, User $user): JsonResponse
    {
        $subscriber = Subscriber::updateOrCreate(
            [
                'id' => $data->id
            ],
            [
                ...$data->all(),
                'form_id' => $data->form?->id,
                'user_id' => $user->id,
            ],
        );

        $subscriber->tags()->sync(request()->tags_id);

        return response()->json([
            'success' => [
                'data' => $subscriber,
                'tesdata' => $data
            ]
        ])->setStatusCode(200);
    }
}
