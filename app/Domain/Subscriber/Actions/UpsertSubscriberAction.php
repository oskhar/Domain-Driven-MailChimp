<?php

namespace App\Domain\Subscriber\Actions;

use App\Domain\Shared\Models\User;
use App\Domain\Subscriber\Data\SubscriberData;
use App\Domain\Subscriber\Models\Subscriber;

class UpsertSubscriberAction
{
    public static function execute(SubscriberData $data, User $user): Subscriber
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

        $subscriber->tags()->sync($data->tags->toCollection()->pluck('id'));

        return $subscriber->load('tags', 'form');
    }
}
