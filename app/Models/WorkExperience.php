<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'company',
        'job_title',
        'work_start_date',
        'work_end_date',
        'description'
    ];
}
