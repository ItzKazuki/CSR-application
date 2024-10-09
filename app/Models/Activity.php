<?php

namespace App\Models;

use Spatie\Tags\HasTags;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory, HasTags;

    protected $fillable = [
        'title_activity',
        'image_activity',
        'description'
    ];
}
