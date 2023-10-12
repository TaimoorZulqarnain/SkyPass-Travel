<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketSector extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = true;
    
    public function ticket()
{
    return $this->belongsTo(Ticket::class);
}

}
