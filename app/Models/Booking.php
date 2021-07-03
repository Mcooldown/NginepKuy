<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id', 'booking_date', 'check_in', 'check_out', 'room_id', 'quantity',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
