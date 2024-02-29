<?php

namespace App\Domain\Subscriber\Models;

use App\Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subscriber extends BaseModel
{
    use HasFactory;

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
}
