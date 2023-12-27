<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
     protected $fillable = ['date', 'location_from_id', 'location_to_id'];

     public function locationFrom()
    {
        return $this->belongsTo(Location::class, 'location_from_id');
    }

    public function locationTo()
    {
        return $this->belongsTo(Location::class, 'location_to_id');
    }

    public function seatAllocations()
    {
        return $this->hasMany(SeatAllocation::class);
    }
}
