<?php

namespace App\Domain\Shared\Models\Conserns;

use App\Domain\Shared\Models\Scopes\UserScope;
use App\Domain\Shared\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasUser
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::addGlobalScope(new UserScope);
    }
}