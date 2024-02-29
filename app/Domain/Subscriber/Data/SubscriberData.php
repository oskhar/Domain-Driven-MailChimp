<?php

namespace App\Domain\Subscriber\Data;

use App\Domain\Subscriber\Models\Form;
use App\Models\Tag;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class SubscriberData extends Data
{
  public function __construct(
    public readonly ?int $id,
    public readonly string $email,
    public readonly string $first_name,
    public readonly ?string $last_name,
    public readonly ?DataCollection $tags,
    public readonly ?FormData $form
  ) {
  }

  public static function rules(): array
  {
    return [
      'email' => [
        'required',
        'email',
        Rule::unique('subscriber', 'email')->ignore(request('subscriber'))
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
        Tag::whereIn('id', $request->collect('tags_id'))->get()
      ),
      'form' => FormData::from(Form::findOrNew($request->form_id)),
    ]);
  }
}
