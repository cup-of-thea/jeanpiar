<?php

namespace App\Domain\Shops\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Shop extends Model
{
    protected $fillable = ['title', 'link', 'image'];
}