<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'school',
        'degree',
        'major',
        'education_start_date',
        'education_end_date'
    ];
}
