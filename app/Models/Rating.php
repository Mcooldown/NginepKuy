<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable=[
        'star','comment','accomodation_id'
    ];

    public function accomodation(){
        return $this->hasMany(Accomodation::class,'accomodation_id');
    }
}
