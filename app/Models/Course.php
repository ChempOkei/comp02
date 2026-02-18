<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'description',
        'hours',
        'price',
        'start_date',
        'end_date',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
