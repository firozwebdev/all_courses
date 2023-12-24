<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\SeatAllocation;

class Trip extends Model
{
   
    protected $fillable = [
        'location_id',
        'trip_date',
    ];
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function seatAllocations()
    {
        return $this->hasMany(SeatAllocation::class);
    }
}
