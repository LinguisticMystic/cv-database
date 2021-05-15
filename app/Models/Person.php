<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Person extends Model
{
    use HasFactory;
    use Sortable;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'street_name',
        'house_number',
        'city',
        'postal_code',
        'country'
    ];

    public $sortable = [
        'id'
    ];
}
