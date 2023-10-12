<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'agent_company', 'address', 'city', 'country', 'slug'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
