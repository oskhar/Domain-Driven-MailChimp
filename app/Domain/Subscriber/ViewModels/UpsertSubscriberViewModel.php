<?php

namespace App\Domain\Subscriber\ViewModels;

use App\Domain\Shared\ViewModels\ViewModel;
use App\Domain\Subscriber\Data\FormData;
use App\Domain\Subscriber\Data\SubscriberData;
use App\Domain\Subscriber\Data\TagData;
use App\Domain\Subscriber\Models\Form;
use App\Domain\Subscriber\Models\Subscriber;
use App\Domain\Subscriber\Models\Tag;
use Illuminate\Database\Eloquent\Collection;

class UpsertSubscriberViewModel extends ViewModel
{
    public function __construct(public readonly ?Subscriber $subscriber = null)
    {
    }

    public function subscriber(): ?SubscriberData
    {
        if (!$this->subscriber) {
            return null;
        }

        return SubscriberData::from(
            $this->subscriber->load('tags', 'form')
        );
    }

    /**
     * @return Collection<TagData>
     */
    public function tag(): Collection
    {
        return Tag::all()->map(fn(Tag $tag) => TagData::from($tag));
    }

    /**
     * @return Collection<FormData>
     */
    public function form(): Collection
    {
        return Form::all()->map(fn(Form $form) => FormData::from($form));
    }
}