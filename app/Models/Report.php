<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_report',
        'sector_id',
        'project_id',
        'send_at',
        'realization',
        'description',
        'state_report'
    ];
}
