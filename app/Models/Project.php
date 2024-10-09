<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'sector_id',
        'subdistric_name',
        'start_date',
        'end_date',
        'description',
        'state'
    ];
}
