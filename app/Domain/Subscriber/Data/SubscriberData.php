<?php

namespace App\Domain\Subscriber\Data;

use App\Domain\Subscriber\Models\Form;
use App\Domain\Subscriber\Models\Subscriber;
use App\Domain\Subscriber\Models\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Lazy;

class SubscriberData extends Data
{
  public function __construct(
    public readonly ?int $id,
    public readonly string $email,
    public readonly string $first_name,
    public readonly ?string $last_name,
    public readonly ?Carbon $subscribed_at,
    /** @var DataCollection<TagData> */
    public readonly null|Lazy|DataCollection|string $tags,
    public readonly null|Lazy|FormData $form
  ) {
  }

  public static function rules(): array
  {
    return [
      'email' => [
        'required',
        'email'
      ],
      'first_name' => ['required', 'string'],
      'last_name' => ['nullable', 'sometimes', 'string'],
      'tag_ids' => ['nullable', 'sometimes', 'array'],
      'form_id' => ['nullable', 'sometimes', 'exists:forms,id'],
    ];
  }

  public static function fromRequest(Request $request): self
  {
    return self::from([
      ...$request->all(),
      'tags' => TagData::collect(
        Tag::whereIn('id', $request->tags_id)->get()
      ),
      'form' => FormData::from(
        Form::findOrNew(
          $request->form_id
        )
      ),
    ]);
  }

  public static function fromModel(Subscriber $subscriber): self
  {
    return self::from([
      ...$subscriber->toArray(),
      'tags' => Lazy::whenLoaded(
        'tags',
        $subscriber,
        fn() => TagData::collect($subscriber->tags)
      ),
      'form' => Lazy::whenLoaded(
        'form',
        $subscriber,
        fn() => FormData::collect($subscriber->form)
      ),
      'full_name' => $subscriber->full_name
    ]);
  }
}
