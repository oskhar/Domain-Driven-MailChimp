<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SentMail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sendable_id',
        'sendable_type',
        'subscriber_id',
        'sent_at',
        'opened_at',
        'clicked_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sendable_id' => 'integer',
        'subscriber_id' => 'integer',
        'sent_at' => 'timestamp',
        'opened_at' => 'timestamp',
        'clicked_at' => 'timestamp',
    ];

    public function sendable(): BelongsTo
    {
        return $this->belongsTo(Sendable::class);
    }

    public function subscriber(): BelongsTo
    {
        return $this->belongsTo(Subscriber::class);
    }
}
