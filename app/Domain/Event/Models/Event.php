<?php

declare(strict_types=1);

namespace App\Domain\Event\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Event extends Model
{
    use HasSlug;

    protected $fillable = ['title', 'amount_done', 'start_on', 'end_on', 'image'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected function startOn(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::create($value)->isoFormat('dddd D MMMM YYYY'),
        );
    }

    protected function endOn(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::create($value)->isoFormat('dddd D MMMM YYYY'),
        );
    }

    protected function percentage(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->donationGoals()->count()
                ? 100 * $this->nailedDonationGoals()->count() / $this->donationGoals()->count()
                : 0,
        );
    }

    public function donationGoals(): HasMany
    {
        return $this->hasMany(DonationGoal::class)->orderBy('value');
    }

    public function nailedDonationGoals(): HasMany
    {
        return $this->donationGoals()->where('value', '<=', $this->amount_done);
    }

    public function remainingDonationGoals(): HasMany
    {
        return $this->donationGoals()->where('value', '>', $this->amount_done);
    }
}
