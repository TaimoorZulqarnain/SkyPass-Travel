<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentTicket extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $guarded = [];
    protected $fillable = ['agent_id', 'ticket_id', 'booking_id', 'passengers_type', 'title', 'sur_name', 'given_name', 'passport_number', 'passport_expiry', 'dob', 'nationality', 'mobile_number', 'email', 'whatsapp_number', 'created_at','updated_at'];
    
}
