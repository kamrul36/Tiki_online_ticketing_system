<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function tripsFrom()
    {
        return $this->hasMany(Trip::class, 'location_from_id');
    }

    public function tripsTo()
    {
        return $this->hasMany(Trip::class, 'location_to_id');
    }
}
