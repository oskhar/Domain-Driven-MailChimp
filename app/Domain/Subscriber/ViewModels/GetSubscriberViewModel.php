<?php

namespace App\Domain\Subscriber\ViewModels;

use App\Domain\Shared\ViewModels\ViewModel;
use App\Domain\Subscriber\Data\SubscriberData;
use App\Domain\Subscriber\Models\Subscriber;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\Paginator;

class GetSubscriberViewModel extends ViewModel
{

    public static function subscribers(int $current_page, int $per_page): Paginator
    {
        $items = Subscriber::with((['form', 'tags']))
            ->orderBy('first_name')
            ->get()
            ->map(
                fn(Subscriber $subscriber) =>
                SubscriberData::from($subscriber)
            );

        $items = $items->slice($per_page * ($current_page - 1));

        return new Paginator(
            $items,
            $per_page,
            $current_page,
        );
    }

    public static function total(): int
    {
        return Subscriber::count();
    }
}