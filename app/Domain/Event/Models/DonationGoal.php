<?php

declare(strict_types=1);

namespace App\Domain\Event\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DonationGoal extends Model
{
    protected $fillable = ['value', 'title', 'is_completed', 'is_every'];

    protected function everyCount(): Attribute
    {
        return Attribute::make(
            get: fn () => floor((float) $this->event->amount_done / (float) $this->value),
        );
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
