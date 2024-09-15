<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $table = 'awards';
    
    protected $fillable = [
        'award_name', 'year', 'award_official'
    ];
}
