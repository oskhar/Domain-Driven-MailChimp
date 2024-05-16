<?php

namespace App\Domain\Shared\Models\Scopes;

use Illuminate\Database\Eloquent\Scope;
use \Illuminate\Database\Eloquent\Builder;
use \Illuminate\Database\Eloquent\Model;

class UserScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        if ($user = request()->user()) {
            $builder->whereBelongsTo($user);
        }
    }
}