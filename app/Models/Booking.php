<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function tourShift()
    {
        return $this->belongsTo(TourShift::class, 'tour_shift_id');
    }
}
