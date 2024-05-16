<?php

namespace App\Domain\Subscriber\Models;

use App\Domain\Shared\Models\BaseModel;
use App\Domain\Shared\Models\Conserns\HasUser;
use App\Domain\Subscriber\Data\SubscriberData;
use Attribute;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\LaravelData\WithData;

class Subscriber extends BaseModel
{
    use WithData;
    use HasUser;

    protected $dataClass = SubscriberData::class;

    protected $fillable = [
        "email",
        "first_name",
        "last_name",
        "form_id",
        "user_id",
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function form(): BelongsTo
    {
        return $this->belongsTo(Form::class)
            ->withDefault();
    }

    public function fullName(): Attribute
    {
        return new Attribute(
            "{$this->first_name} {$this->last_name}",
        );
    }

    protected function getSubscribedAtAttribute(?string $subscribed_at): ?Carbon
    {
        return Carbon::parse($subscribed_at);
    }
}
