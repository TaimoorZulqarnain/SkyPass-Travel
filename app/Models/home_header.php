<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_header extends Model
{
    use HasFactory;
    protected $table = 'home_header';
    protected $fillable = [
        'email',
        'phone',
        'logo',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
    ];
}