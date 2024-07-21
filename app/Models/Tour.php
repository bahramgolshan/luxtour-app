<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    public static $duration_types = ['minute', 'hour', 'day', 'week', 'month', 'year'];
    public static $age_tiers = ['child', 'youth', 'adult', 'senior'];

    public function images()
    {
        return $this->hasMany(TourImage::class, 'tour_id');
    }
    public function attributes()
    {
        return $this->hasMany(TourAttribute::class, 'tour_id');
    }
    public function shifts()
    {
        return $this->hasMany(TourShift::class, 'tour_id')->orderBy('start_time');
    }
}
